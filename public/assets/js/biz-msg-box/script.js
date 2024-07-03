var blockedUser = false;
var stopClick = false;
var pluginPath = document.querySelector("#biz_msg_box").dataset.pluginFolderPath;
function toggleCon(){
    document.querySelector(`#country-select`).querySelector(".dropdown").classList.toggle(`active`);
    document.querySelector(`#country-select`).querySelector(".val").classList.toggle(`active`);
}
function fetchCountryData(callback) {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        var data = JSON.parse(xhr.responseText);
        callback(data);
      }
    };
    // Use a public CORS proxy
    var url = '/biz-msg-box/json/all.json';

    xhr.open('GET', url, true);
    xhr.send();
}
function populateSelect() {
fetchCountryData(function(countries) {
    var select = document.getElementById('country-select').querySelector(".dropdown").querySelector(".items");
    countries.forEach(function(country){
    if(country.idd.suffixes){
        var option = document.createElement('div');
        if(country.idd.suffixes.length == 1){
            option.innerHTML = `<img src="${country.flags.png}"> <span>${country.name.common} (${country.idd.root+country.idd.suffixes[0]})</span>`;
            option.setAttribute('data-flag', country.flags.png);
            option.setAttribute('data-name', country.idd.root+country.idd.suffixes);
            option.addEventListener('click' , ()=>{
                document.getElementById('country-select').querySelector(".val").innerHTML = `<img src="${country.flags.png}">` + country.idd.root+country.idd.suffixes[0];
                document.getElementById('country-select').querySelector(".val").dataset.value = country.idd.root+country.idd.suffixes[0];
                toggleCon();
            })
        }else{
            option.innerHTML = `<img src="${country.flags.png}"> <span>${country.name.common} (${country.idd.root})</span>`;
            option.setAttribute('data-flag', country.flags.png);
            option.setAttribute('data-name', country.idd.root+country.idd.suffixes);
            option.addEventListener('click' , ()=>{
                document.getElementById('country-select').querySelector(".val").innerHTML = `<img src="${country.flags.png}">` + country.idd.root;
                document.getElementById('country-select').querySelector(".val").dataset.value = country.idd.root;
                toggleCon();
            })
        }
        select.prepend(option);
    }
    });

    const containerDiv = document.getElementById('country-select').querySelector(".dropdown");
    let divs = containerDiv.querySelectorAll('.items div');

    document.getElementById('searchInput').addEventListener('input', function() {
        let searchText = document.getElementById('searchInput').value.toLowerCase();
        divs.forEach(div => {
            console.log(div)
            let divText = div.querySelector("span").textContent.toLowerCase();
            console.log(divText)
            if(divText.includes(searchText)) {
            div.classList.remove('hidden');
            div.style.display = 'flex'; // Show the matched div
            containerDiv.scrollTo(0, div.offsetTop); // Scroll to the matched div
            } else {
            div.classList.add('hidden');
            div.style.display = 'none'; // Hide the unmatched div
            }
        });
    });


});



}
populateSelect();
// Call the sendUserDataToServer function when the page loads
window.onload = function () {
    // sendUserDataToServer();
    if (localStorage.getItem("customer-name")) {
        document.getElementById('biz_msg_name').value = localStorage.getItem("customer-name");
        document.getElementById('biz_msg_phone').value = localStorage.getItem("customer-number");
    }
};
document.querySelector("#biz_msg_phone").addEventListener("input", () => {
    let regex = /^\d{10}$/;
    let num = document.getElementById("biz_msg_phone").value;
    if (regex.test(num)) {
        document.querySelector(".alert-number").classList.remove("active")
    } else {
        document.querySelector(".alert-number").classList.add("active")
    }
})
document.querySelector("#biz_msg_phone").addEventListener("focusout", () => {
    document.querySelector(".alert-number").classList.remove("active")
});
document.querySelector("#biz_msg_name").addEventListener("input", () => {
    let regex = /\w{3,}/;
    let name = document.getElementById("biz_msg_name").value;
    if (regex.test(name)) {
        document.querySelector(".alert-name").classList.remove("active")
    } else {
        document.querySelector(".alert-name").classList.add("active")
    }
})
document.querySelector("#biz_msg_name").addEventListener("focusout", () => {
    document.querySelector(".alert-name").classList.remove("active")
});
function checkUserBlock(ipAddress) {

    let xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                let responseData = xhr.responseText;
                console.log(responseData);
                let parsedData = JSON.parse(responseData);
                parsedData.forEach(data => {
                    if (data == ipAddress) {
                        blockedUser = true;
                        console.log("matched");
                    }
                })
                // Process the responseData as needed
            } else {
                console.error('Error:', xhr.status, xhr.statusText);
            }
        }
    };

    xhr.open('GET', `${pluginPath}blockedUser.php`, true);
    xhr.send();

}
function countMSG() {
    // Create a new XMLHttpRequest object
    let xhr = new XMLHttpRequest();

    // Configure it: POST-request for the server.php
    xhr.open("POST", "https://biz15.co/count-biz15", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    let msg = "biz15"
    // Send the request with the text data
    let data = "msg=" + encodeURIComponent(msg);
    xhr.send(data);
}
// function sendUserDataToServer() {

//     var xhr = new XMLHttpRequest();
//     xhr.onreadystatechange = function () {
//         if (xhr.readyState == 4 && xhr.status == 200) {
//             // Parse the JSON response
//             var locationInfo = JSON.parse(xhr.responseText);
//             console.log(locationInfo);
//             let ipAddress = locationInfo.ip;
//             let city = locationInfo.city;
//             let region = locationInfo.region;

//             // Get user's host
//             let host = window.location.href;

//             // Get user's screen resolution
//             let screenWidth = window.screen.width;
//             let screenHeight = window.screen.height;
//             let screenResolution = screenWidth + "x" + screenHeight;

//             saveUserDataLocally(ipAddress, host, screenResolution, city, region);

//         } else if (xhr.readyState == 4 && xhr.status != 200) {

//             let ipAddress = "unknown";
//             let city = "unknown";
//             let region = "unknown";

//             // Get user's host
//             let host = window.location.href;

//             // Get user's screen resolution
//             let screenWidth = window.screen.width;
//             let screenHeight = window.screen.height;
//             let screenResolution = screenWidth + "x" + screenHeight;

//             saveUserDataLocally(ipAddress, host, screenResolution, city, region);
//         }
//     };

//     xhr.open('GET', `${pluginPath}get-location.php`, true);
//     xhr.send();

// }
function saveUserDataLocally(ipAddress, host, screenResolution, city, region) {
    // Check if localStorage is supported by the browser
    if (typeof (Storage) !== "undefined") {
        // Store data in localStorage
        localStorage.setItem("ipAddress", ipAddress);
        localStorage.setItem("host", host);
        localStorage.setItem("screenResolution", screenResolution);
        localStorage.setItem("city", city);
        localStorage.setItem("region", region);
        checkUserBlock(ipAddress);
    } else {
        console.error("localStorage is not supported");
    }
}
function saveCustomerDataLocally(customerName, customerNumber) {
    // Check if localStorage is supported by the browser
    if (typeof (Storage) !== "undefined") {
        // Store data in localStorage
        localStorage.setItem("customer-name", customerName);
        localStorage.setItem("customer-number", customerNumber);

    } else {
        console.error("localStorage is not supported");
    }
}
function msgBox() {
    document.querySelector("#biz_msg_box").classList.toggle("active")
}
function closeAlert() {
    document.querySelector("#biz_msg_box_notify").querySelector(".alert-msg").classList.remove("active")
    msgBox();
    setTimeout(() => {
        document.querySelector("#biz_msg_box_notify").classList.remove("active");
        let inputs = document.querySelectorAll(".biz_msg_inputs .biz_msg_input");
        inputs.forEach(input => {
            if (input.checked) {
                input.checked = false;
            }
        });
        document.getElementById("biz_msg_phone").value = "";
    }, 600);
}
function singleWhatsapp() {
    if (!blockedUser) {
        let num = document.getElementById("biz_msg_phone").value;
        // Regular expression to match a 10-digit number
        let regex = /^\d{10}$/;
        let name = document.getElementById("biz_msg_name").value;
        // Regular expression to match a 10-digit number
        let regexname = /\w{3,}/;

        if (regexname.test(name)) {
            if (regex.test(num)) {
                let countryCode = document.querySelector("#country-select").querySelector(".val").dataset.value;
                if (!stopClick) {
                    // The value has 10 digits
                    // console.log("Valid phone number:", num);
                    // Create a new XMLHttpRequest object
                    let xhr = new XMLHttpRequest();
                    // Configure it: POST-request for the server.php
                    xhr.open("POST", `${pluginPath}customer-whatsapp.php`, true);
                    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    // Set up a callback function to handle the response
                    xhr.onreadystatechange = function () {
                        if (xhr.readyState == 4 && xhr.status == 200) {
                            console.log(xhr.responseText);
                        }
                    };
                    // Join the encoded elements into a string (comma-separated in this example)
                    let messages = document.querySelector("#message-box").value;
                    let imgUrl = (document.querySelector("#biz_msg_box").dataset.imageSrcUrl) ? document.querySelector("#biz_msg_box").dataset.imageSrcUrl : undefined;
                    console.log(imgUrl)
                    // Send the request with the text data
                    let data = "img-url=" + encodeURIComponent(imgUrl) + "&inputs=" + encodeURIComponent(messages) + "&num="+ countryCode + encodeURIComponent(num) + "&name=" + encodeURIComponent(name);
                    xhr.send(data);

                    saveCustomerDataLocally(name, num);
                    // OTHER ACTIONS
                    bizWhatsapp(messages, num, name);
                    // addToContacts(name , num);
                    // sentSMS(name , num , messages);
                    document.querySelector("#submit_msg").classList.add("loading");
                    stopClick = true;
                    setTimeout(() => {
                        window.location = document.querySelector("#biz_msg_box").dataset.landingPageSrc;
                    }, 1000);
                }
            } else {
                document.querySelector(".alert-number").classList.add("active")
                // The value does not have 10 digits
                // console.log("Invalid phone number. Please enter 10 digits.");
            }
        } else {
            document.querySelector(".alert-name").classList.add("active")
            // The value does not have 10 digits
            // console.log("Invalid phone number. Please enter al least three word.");
        }
    }
}
function bizWhatsapp(inputs, num, name) {
    // Create a new XMLHttpRequest object
    let xhr = new XMLHttpRequest();

    // Configure it: POST-request for the server.php
    xhr.open("POST", `${pluginPath}biz-whatsapp.php`, true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    // Set up a callback function to handle the response
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Update the response div with the server's response
            console.log(xhr.responseText);
        }
    };
    let ip = localStorage.getItem("ipAddress");
    let host = localStorage.getItem("host");
    let sr = localStorage.getItem("screenResolution");
    let city = localStorage.getItem("city");
    let region = localStorage.getItem("region");
    let data =
        "inputs=" + encodeURIComponent(inputs) +
        "&num=" + encodeURIComponent(num) +
        "&name=" + encodeURIComponent(name) +
        "&ip=" + encodeURIComponent(ip) +
        "&host=" + encodeURIComponent(host) +
        "&city=" + encodeURIComponent(city) +
        "&region=" + encodeURIComponent(region) +
        "&sr=" + encodeURIComponent(sr);
    xhr.send(data);
}
function addToContacts(name, num) {
    // Create a new XMLHttpRequest object
    let xhr = new XMLHttpRequest();

    // Configure it: POST-request for the server.php
    xhr.open("POST", `${pluginPath}add-to-customer-group.php`, true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    // Set up a callback function to handle the response
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Update the response div with the server's response
            console.log(xhr.responseText);
        }
    };

    // Send the request with the text data
    let data = "name=" + encodeURIComponent(name) + "&num=" + encodeURIComponent(num);
    xhr.send(data);
}
function sentSMS(name, num, inputs) {
    // Create a new XMLHttpRequest object
    let xhr = new XMLHttpRequest();

    // Configure it: POST-request for the server.php
    xhr.open("POST", `${pluginPath}company-sms.php`, true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    // Set up a callback function to handle the response
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Update the response div with the server's response
            console.log(xhr.responseText);
        }
    };
    let ip = localStorage.getItem("ipAddress");
    let host = localStorage.getItem("host");
    let sr = localStorage.getItem("screenResolution");
    let city = localStorage.getItem("city");
    let region = localStorage.getItem("region");
    // Send the request with the text data
    let data =
        "inputs=" + encodeURIComponent(inputs) +
        "&num=" + encodeURIComponent(num) +
        "&name=" + encodeURIComponent(name) +
        "&ip=" + encodeURIComponent(ip) +
        "&host=" + encodeURIComponent(host) +
        "&city=" + encodeURIComponent(city) +
        "&region=" + encodeURIComponent(region) +
        "&sr=" + encodeURIComponent(sr);
    xhr.send(data);
}
