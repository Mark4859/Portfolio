let 
    slides = document.getElementsByClassName('slides-item'),
    prevBtn = document.getElementById("left_arrow"),
    nextBtn = document.getElementById("right_arrow"),
    slideIndex = 1;
var txt = document.getElementsByClassName('text_caption'),
    textIndex = 1; 
showSlides(slideIndex);
showText(textIndex);
function showSlides(n) {
    if (n < 1){
        slideIndex = slides.length;
        textIndex = txt.length;
    }else if (n > slides.length){
        slideIndex = 1;
    }
    for (let i = 0; i < slides.length; i++){
        slides[i].style.display = 'none';
        txt[i].style.display = 'none';
    }
    slides[slideIndex -1].style.display = 'block';
}
function plusSlides(n){
    showSlides(slideIndex += n);
    showText(textIndex += n);
}
prevBtn.onclick = function(){
    plusSlides(-1);
}
nextBtn.onclick = function(){
    plusSlides(1);
}
function showText(n){
    if(n < 1){
        textIndex = txt.length;
    }else if(n > txt.length){
        textIndex = 1;
    }
    for (let i = 0; i < txt.length; i++){
        txt[i].style.display = 'none';
    }
    txt[textIndex -1].style.display = 'inline-block';
}





















