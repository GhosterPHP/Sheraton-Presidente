
let scrollThreshold = 10;
let hasScrolled = false;
const header = document.querySelector("header");
window.onload = function () {
    firstload();

};
window.onscroll = function () {
    if (!document.querySelector("header").classList.contains("sticky")) {
        toggleStickyHeader()
    }
};
window.onbeforeunload = function () {
    window.scrollTo(0, 0);
}


function firstload() {
    const header = document.querySelector("header");
    const divlogo = document.querySelector("div[logo]");
    const nav = document.querySelector("nav");
    const main = document.querySelector("main");
    divlogo.onclick = function () {
    }
    main.classList.remove("sticky");
    header.classList.remove("sticky");
    nav.style.display = "none";
}
function toggleStickyHeader() {

    const header = document.querySelector("header");
    const divlogo = document.querySelector("div[logo]");
    const nav = document.querySelector("nav");
    const main = document.querySelector("main");

    header.classList.add("sticky");
    main.classList.add("sticky");
    nav.style.display = "block";
    divlogo.onclick = function () {
        firstload();
        hasScrolled = false;
    }
    setTimeout(() => {
        if (!hasScrolled) {
            window.scrollTo(0, 5);
            hasScrolled = true;
        }
    }, 500);


}
//hover poseidon
const poseidon = document.querySelector("#poseidon");
poseidon.onmouseover = function () {
    createRain();
    header.classList.add("dark");

}

poseidon.onmouseout = function () {
    const canvas = document.querySelector(".poseido");
    if (canvas) {
        canvas.remove();
        header.classList.remove("dark");
    }
}

function createRain() {
    const canvas = document.createElement("canvas");
    canvas.classList.add("poseido");
    canvas.width = window.innerWidth;
    // canvas.height = 10000;

    if (canvas.getContext) {
        var ctx = canvas.getContext('2d');
        var w = canvas.width;
        var h = canvas.height;
        ctx.strokeStyle = 'rgba(174,194,224,0.5)';
        ctx.lineWidth = 1;
        ctx.lineCap = 'round';

        var init = [];
        var maxParts = 1000; // Incrementa el número de partículas
        for (var a = 0; a < maxParts; a++) {
            init.push({
                x: Math.random() * w,
                y: Math.random() * h,
                l: Math.random() * 1,
                xs: -4 + Math.random() * 4 + 2,
                ys: Math.random() * 10 + 10
            });
        }

        var particles = [];
        for (var b = 0; b < maxParts; b++) {
            particles[b] = init[b];
        }

        function draw() {
            ctx.clearRect(0, 0, w, h);
            for (var c = 0; c < particles.length; c++) {
                var p = particles[c];
                ctx.beginPath();
                ctx.moveTo(p.x, p.y);
                ctx.lineTo(p.x + p.l * p.xs, p.y + p.l * p.ys);
                ctx.stroke();
            }
            move();
        }

        function move() {
            for (var b = 0; b < particles.length; b++) {
                var p = particles[b];
                p.x += p.xs;
                p.y += p.ys;
                if (p.x > w || p.y > h) {
                    p.x = Math.random() * w;
                    p.y = -20;
                }
            }
        }

        setInterval(draw, 30);
    }
    document.querySelector("main").appendChild(canvas);
}
