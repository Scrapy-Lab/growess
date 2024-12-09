// Main Banner
document.querySelectorAll(".service-items").forEach((el  , index) => {
    el.addEventListener("click", ()=> {
        document.querySelectorAll(".service-items").forEach((e)=>{
            e.classList.contains('active') ? e.classList.remove("active") : ""; 
        });
        el.classList.add("active");
        document.querySelector(".service-content").style.setProperty("--clr" , el.dataset.clr);
        document.querySelector(".service-title").innerHTML = el.querySelector("h6").innerHTML;
        document.querySelector(".service-para").innerHTML = el.querySelector("p").innerHTML;
        document.querySelector(".service-img-items").dataset.pos = index + 1;
    });
});

