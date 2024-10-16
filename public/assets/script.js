
const button = document.getElementById('titi');
const overlay = document.getElementById('overlay');
const diagonal = document.getElementsByClassName('diagonal');

button.addEventListener('mouseover', () => {
    diagonal[0].style.backgroundColor = 'rgba(184, 184, 184, 0.961)';
    overlay.style.display = 'block';
    //désactiver le scroll
    document.body.style.overflow = 'hidden';
});

button.addEventListener('mouseout', () => {
    overlay.style.display = 'none';
    diagonal[0].style.backgroundColor = 'white';
    document.body.style.overflow = 'auto';
});

gsap.from('.confiance_carousel_item',

    {
        transform: 'translate(-100%,0%)',
        ease: 'none',

        scrollTrigger:

        {
            trigger: '.confiance_carousel_item',
            start: '0% 150%',
            end: '150% 0%',
            scrub: true

        }
    });

// gsap.to('.confiance_carousel_item',

//     {
//         transform: 'translate(-50%,0%)',
//         ease: 'none',

//         scrollTrigger:

//         {
//             trigger: '.dm-scroll-right',
//             start: '0% 100%',
//             end: '100% 0%',
//             scrub: true

//         }

//     });
// const childSplit = new SplitText("h2", { type: "lines" });

// childSplit.lines.forEach(line => {
//     gsap.from(line, {
//         opacity: 0,
//         yPercent: 100,
//         duration: 1.5,
//         ease: "power4",
//         scrollTrigger: {
//             trigger: line,
//             toggleActions: "play none none reverse"
//         }
//     });
// });


//Infosoluce
const carousel = document.querySelector(".carousel");
const rectangles = document.querySelectorAll(".rectangle");
const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");

let currentIndex = 0;

function updateCarousel() {
    const offset = -currentIndex * 18; // déplace l'index actuel
    carousel.style.transform = `translateX(${offset}%)`;
}

nextBtn.addEventListener("click", () => {
    if (currentIndex < rectangles.length - 1) {
        currentIndex++;
        updateCarousel();

    }
});

prevBtn.addEventListener("click", () => {
    if (currentIndex > 0) {
        currentIndex--;
        updateCarousel();
    }
});