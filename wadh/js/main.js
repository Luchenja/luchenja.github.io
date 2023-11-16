let container = document.querySelector('.image-container');
let images = document.querySelectorAll('.image-container img');

let position = 0;

setInterval(() => {
    position -= 10; // Adjust the value based on your desired speed
    container.style.transform = `translateX(${position}px)`;

    // Reset position if images move out of view
    if (position <= -images[0].width) {
        position = 0;
    }
}, 50); // Adjust the interval based on your desired smoothness
