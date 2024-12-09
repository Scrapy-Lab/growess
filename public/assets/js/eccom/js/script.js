// Feature section
document.querySelectorAll(".scroll-items").forEach((el  , index) => {
    el.addEventListener("click", ()=> {
        document.querySelectorAll(".scroll-items").forEach((e)=>{
            e.classList.contains('active') ? e.classList.remove("active") : ""; 
        });
        el.classList.add("active");
        document.querySelector("#bioPageBlocks").dataset.pos = index;
        changeBioMobFrame(index);
    });
});

function changeBioMobFrame(i){
    document.querySelectorAll(".swap-items").forEach((item) => item.classList.remove("active"));
    document.querySelectorAll(".swap-items")[i].classList.add("active");
    if(i == 4){
        let v = document.querySelectorAll(".swap-items")[i].querySelectorAll("video");
        v.forEach(vid => {
            vid.src = vid.src;
            vid.play();
        });
    }
};

// loader
window.addEventListener( "load", ()=>{
    document.querySelectorAll(".scroll-items").classList.add("play");
})

// Price sec
var priceName = [
    {
        name : "Ecom Basic",
        color : "hsl(341, 100%, 45%)"
    },
    {
        name : "EStore Essential",
        color : "hsl(118, 42%, 45%)"
    },
    {
        name : "RetailRise Package",
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

