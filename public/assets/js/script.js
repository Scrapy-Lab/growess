// Main Banner
const mainBanner = document.querySelector("#main-banner");
let bannerImgs = mainBanner.querySelectorAll("picture img");
window.onload = function() {
var imgList = document.getElementsByTagName('img');
var imgLoaded = true;
var loadedCount = 0;

// Function to check if all images are loaded
function checkAllImagesLoaded() {
    if (loadedCount === imgList.length) {
        imgLoaded = true;
        console.log('All images loaded successfully.');
        mainBanner.classList.add("start")
        // Perform actions when all images are loaded
    } else {
        imgLoaded = false;
        console.log('Some images are not yet loaded.');
        // Perform actions when some images are not yet loaded
    }
}
// Loop through each image using forEach
Array.from(imgList).forEach(function(img) {
    // Add a load event listener to each image
    img.addEventListener('load', function() {
        loadedCount++;
        checkAllImagesLoaded();
    });
    // Check if image is already loaded (for cached images)
    if (img.complete) {
        loadedCount++;
    }
});
// Check if all images are loaded initially (for cached images)
checkAllImagesLoaded();
};


document.querySelectorAll(".scroll-items").forEach((el  , index) => {
    el.addEventListener("click", ()=> {
        document.querySelectorAll(".scroll-items").forEach((e)=>{
            e.classList.contains('active') ? e.classList.remove("active") : ""; 
        });
        el.classList.add("active");
        document.querySelector(".change-titles").querySelector("h2").innerHTML = el.querySelector("h5").innerHTML;
        document.querySelector(".change-titles").querySelector("p").innerHTML = el.querySelector("p").innerHTML;
        changeBioMobFrame(index + 1 , el.dataset.src);
    });
});
function changeBioMobFrame(i , s){
    document.querySelector(`#shape_shifting_shapes`).style.setProperty("--bg-d" , `url(../../images/website-responsive/desktop/${i}.jpg)`);
    document.querySelector(`#shape_shifting_shapes`).style.setProperty("--bg-m" , `url(../../images/website-responsive/mobile/${i}.jpg)`);
    document.querySelector(`#shape_shifting_shapes`).style.setProperty("--bg-t" , `url(../../images/website-responsive/tabs/${i}.jpg)`);
    document.querySelector(`#shape_shifting_shapes`).href = s;
};
var bizaimation = document.querySelectorAll(".scroll-items");

const loadOptions = {
    threshold:0,
    rootMargin: "0px 0px 0px 0px"
};

const loadObserver = new IntersectionObserver((entries , loadObserver) => {
entries.forEach(entry =>{ 
    if (!entry.isIntersecting) {
        // entry.target.classList.remove(aniname);
        return;
    }else {
        entry.target.classList.add("play");
        loadObserver.unobserve(entry.target);
    }
});
},loadOptions);


bizaimation.forEach(animate => {
loadObserver.observe(animate);
}); 



// Price sec
var priceName = [
    {
        name : "WebStarter One",
        color : "hsl(341, 100%, 45%)"
    },
    {
        name : "Web Basics",
        color : "hsl(118, 42%, 45%)"
    },
    {
        name : "Web Standard",
        color : "hsl(258, 42%, 45%)"
    },
];
var swiper = new Swiper(".price-sec", {
    grabCursor: true,
    effect: "creative",
    loop:true,
    creativeEffect: {
        prev: {
        shadow: false,
        translate: [0, 0, -400],
        },
        next: {
        translate: ["100%", 0, 0],
        },
    },
    pagination: {
        el: ".plan-paginations",
            clickable: true,
            renderBullet: function (index, className) {
            return '<span style="--clr:'+priceName[index].color+';" class="px-3 py-2 ' + className + '">' + priceName[index].name + "</span>";
        },
    },
});


