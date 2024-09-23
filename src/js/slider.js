const slidesContainer = document.getElementById('slides');
const prevButton = document.getElementById('prev');
const nextButton = document.getElementById('next');
const caption = document.querySelector('[caption]');

let currentIndex = 0;
let images = [];

async function fetchImages() {
    try {
        const response = await fetch('images.json');
        images = await response.json();
        loadImages();
        showSlide(currentIndex);
    } catch (error) {
        console.error('Error fetching images:', error);
    }
}

function loadImages() {
    slidesContainer.innerHTML = images.map(image => `
        <img src="${image.src}" alt="${image.title}" class="slide" loading="lazy">
    `).join('');
}

function showSlide(index) {
    if (index >= images.length) {
        currentIndex = 0; // Volver al inicio
    } else if (index < 0) {
        currentIndex = images.length - 1; // Ir al final
    } else {
        currentIndex = index;
    }

    slidesContainer.style.transition = 'transform 1.5s ease-in-out';
    slidesContainer.style.transform = `translateX(${-currentIndex * 100}%)`;

    updateCaption();
}

function updateCaption() {
    caption.querySelector('h4').textContent = images[currentIndex].title;
    caption.querySelector('p').textContent = images[currentIndex].description;
    caption.querySelector('button').onclick = () => {
        window.open(images[currentIndex].url, '_blank');
    };
}

prevButton.addEventListener('click', () => {
    showSlide(currentIndex - 1);
});

nextButton.addEventListener('click', () => {
    showSlide(currentIndex + 1);
});

fetchImages();

// Auto slide
setInterval(() => {
    showSlide(currentIndex + 1);
}, 5000);
