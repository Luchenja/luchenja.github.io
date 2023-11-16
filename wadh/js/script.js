const movingPictures = document.querySelectorAll('.animatedPicture');

function startAnimation(){
    movingPictures.forEach(picture => picture.style.animationPlayState= 'running');

}
function stopAnimation(){
    movingPictures.forEach(picture => picture.style.animationPlayState = 'paused');  
}
startAnimation();

setTimeout(stopAnimation, 10000);