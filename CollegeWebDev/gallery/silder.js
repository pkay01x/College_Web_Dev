var slideIndex = 1;
window.onload = function () {
    showSlides(slideIndex);
}
function nextSlide() {
    showSlides(slideIndex += 1);
}

function prevSlide() {
    showSlides(slideIndex -= 1);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("slider-image");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
}