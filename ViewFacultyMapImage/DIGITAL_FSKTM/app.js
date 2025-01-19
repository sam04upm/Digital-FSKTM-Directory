import './bootstrap';

const rectangleImage = document.querySelector('.rectangle-image');
const zoomInButton = document.querySelector('.zoom-in');
const zoomOutButton = document.querySelector('.zoom-out');

let zoomLevel = 1; // Initial zoom level
const zoomStep = 0.2; // Increment/decrement value for each zoom step
const maxZoom = 3; // Maximum zoom level
const minZoom = 1; // Minimum zoom level

zoomInButton.addEventListener('click', () => {
    if (zoomLevel < maxZoom) {
        zoomLevel += zoomStep;
        rectangleImage.style.transform = `translate(-50%, -50%) scale(${zoomLevel})`;
    }
});

zoomOutButton.addEventListener('click', () => {
    if (zoomLevel > minZoom) {
        zoomLevel -= zoomStep;
        rectangleImage.style.transform = `translate(-50%, -50%) scale(${zoomLevel})`;
    }
});

const rectangle = document.querySelector('.gallery');
const scrollStep = 100; // Amount to scroll per click

document.querySelector('.scroll-up').addEventListener('click', () => {
    rectangle.scrollBy({ top: -scrollStep, behavior: 'smooth' });
});

document.querySelector('.scroll-down').addEventListener('click', () => {
    rectangle.scrollBy({ top: scrollStep, behavior: 'smooth' });
});
