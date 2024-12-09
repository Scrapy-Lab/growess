// loader
window.addEventListener( "load", ()=>{
    document.querySelector("body").style.setProperty("--loading" , "none");
});
var imgLoader = document.querySelectorAll("[data-image-src]");

const imgLoad__Options = {
    threshold:0,
    rootMargin: "0px 0px 0px 0px"
};

const imgLoadObserver = new IntersectionObserver((entries , imgLoadObserver) => {
entries.forEach(entry =>{
    if (!entry.isIntersecting) {
        // entry.target.classList.remove(aniname);
        return;
    }else {
        (entry.target.dataset.imgBefore == "true") ? entry.target.style.setProperty("--bg" , `url(${entry.target.dataset.imageSrc})`) : entry.target.src = entry.target.dataset.imageSrc;
        imgLoadObserver.unobserve(entry.target);
    }
});
},imgLoad__Options);


imgLoader.forEach(animate => {
imgLoadObserver.observe(animate);
});
// Header
let dropDownBtn = document.querySelectorAll(".drop-down-btn");
dropDownBtn.forEach(dd =>{
    dd.addEventListener("click" , ()=>{
        dd.classList.toggle( "active" );
    })
});
// const menuBtn = document.querySelector(".menu-btn");
// const navigations = document.querySelector(".navigations");
// menuBtn.onclick = toggleMenu;
// function toggleMenu(){
//     // menuBtn.classList.toggle("active");
//     // navigations.classList.toggle("active");
//     document.querySelector(".close-side-menu").classList.toggle('active')
// }
// // Get body Srcool width
function getBodyScrollbarWidth() {
    // Create a div element
    const scrollDiv = document.createElement('div');
    // Set its style
    scrollDiv.style.cssText = 'width: 100px; height: 100px; overflow: scroll; position: absolute; top: -9999px;';
    // Append the div to the body
    document.body.appendChild(scrollDiv);
    // Calculate the scrollbar width
    const scrollbarWidth = scrollDiv.offsetWidth - scrollDiv.clientWidth;
    // Remove the div from the DOM
    document.body.removeChild(scrollDiv);
    // Return the scrollbar width
    return scrollbarWidth;
  }

  // Example usage
  const bodyScrollbarWidth = getBodyScrollbarWidth();
  document.querySelector('body').style.setProperty("--pr" , bodyScrollbarWidth+"px");
  function openPrice(){
    document.querySelector('#price-table').classList.toggle("active");
    document.querySelector('body').classList.toggle("overflow-hidden-table");
    document.querySelector('.close-table').classList.toggle("active");
};
// Marque templates
var scroll_inner = document.querySelectorAll(".scroll-inner")
scroll_inner.forEach(scroll_inner => {
    let x = scroll_inner.innerHTML
    scroll_inner.innerHTML = x + x
});

// ======================================

var faqItems = document.querySelectorAll(".faq-items");
faqItems.forEach(faq => {
    faq.addEventListener("click" , ()=>{
        faq.classList.toggle('active');
    })
});

// popup form
function togglePopUpForm(){
    document.querySelector("#pop-up-form").classList.toggle("active")
    document.querySelector('body').classList.toggle("overflow-hidden-table");
    let input = document.querySelector('#biz_bottom_menu_icons');
    if(input.checked){
        input.checked = false;
      }
}

// scroll TOP
let lastScrollTop = 0;

window.addEventListener("scroll", function() {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop) {
        // Scrolling down
        document.querySelector(".go_top_btn").classList.remove("active")
        console.log("Scrolling down");
    } else if (300 > scrollTop){
        document.querySelector(".go_top_btn").classList.remove("active")
    }
     else {
        // Scrolling up
        document.querySelector(".go_top_btn").classList.add("active")
        console.log("Scrolling up");
    }

    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // For Mobile or negative scrolling
}, false);
document.querySelector(".go_top_btn").addEventListener("click", () => {
    document.documentElement.scrollTop = 0;
})
