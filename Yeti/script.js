
var btnNext = document.getElementById("btn2"),
btnPrev = document.getElementById("btn1"),
slider = document.getElementById("slider_main_products"),
btnNextNext = document.getElementById("btn3"),
secondPage = document.getElementById("secondPage");
var indexCool = 0;
var index = 0;
var indexC = 0;
var indexSt = 0;
var indexP = 0;
var indexNext = 0;
var x = window.matchMedia("(max-width: 800px)");

window.addEventListener("scroll", function(){ 
    var hiddenMenu = document.getElementById("wrapper_menu_container");
    var headerTop = document.getElementById("header_top");
    hiddenMenu.classList.toggle("sticky", window.scrollY > 0);
    headerTop.classList.toggle("hidden", window.scrollY > 0);
});  
function media(x){
    if (x.matches) {
        indexNext = -35;
    }else{
        indexNext = -50;
    }
}
media(x);
x.addListener(media); 


btnNext.onclick = function(){
    slider.style.transform = "translate(" + (indexNext) + "%)";
    btnPrev.style.border = "1px solid rgba(24, 44, 63, 0.39)";
    btnPrev.style.backgroundColor = "rgba(24, 44, 63, 0.39)";
    btnNext.style.border = "1px solid rgba(24, 44, 63)";
    btnNext.style.backgroundColor = "rgba(24, 44, 63)";
    btnNextNext.style.border = "1px solid rgba(24, 44, 63, 0.39)";
    btnNextNext.style.backgroundColor = "rgba(24, 44, 63, 0.39)";
}
btnPrev.onclick = function(){
    slider.style.transform = "translate(0%)";
    btnNext.style.border = "1px solid rgba(24, 44, 63, 0.39)";
    btnNext.style.backgroundColor = "rgba(24, 44, 63, 0.39)";
    btnPrev.style.border = "1px solid rgba(24, 44, 63)";
    btnPrev.style.backgroundColor = "rgba(24, 44, 63)";
    btnNextNext.style.border = "1px solid rgba(24, 44, 63, 0.39)";
    btnNextNext.style.backgroundColor = "rgba(24, 44, 63, 0.39)";
}
btnNextNext.onclick = function () {
    slider.style.transform = "translate(-70%)";
    btnPrev.style.border = "1px solid rgba(24, 44, 63, 0.39)";
    btnPrev.style.backgroundColor = "rgba(24, 44, 63, 0.39)";
    btnNext.style.border = "1px solid rgba(24, 44, 63, 0.39)";
    btnNext.style.backgroundColor = "rgba(24, 44, 63, 0.39)";
    btnNextNext.style.border = "1px solid rgba(24, 44, 63)";
    btnNextNext.style.backgroundColor = "rgba(24, 44, 63)";
}


function supportShow(){
    var sI = document.getElementById("supportI");
    var display  = document.getElementById("supportUl");
    index = index + 1;
    sI.style.transform = 'rotateZ(' + (index) * 180 + 'deg)'; 
    if(display.style.display == "flex"){
        display.style.display = "none";
    }else{
        display.style.display = "flex";
        display.style.flexDirection = "column";
    }
}
function companyShow(){
    var cI = document.getElementById("companyI");
    var display  = document.getElementById("companyUl");
    indexC = indexC + 1;
    cI.style.transform = 'rotateZ(' + (indexC) * 180 + 'deg)';
    if(display.style.display == "flex"){
        display.style.display = "none";
    }else{
        display.style.display = "flex";
        display.style.flexDirection = "column";
    }
} 
function storesShow(){
    var stI = document.getElementById("storesI");
    var display  = document.getElementById("storesUl");
    indexSt = indexSt + 1;
    stI.style.transform = 'rotateZ(' + (indexSt) * 180 + 'deg)';
    if(display.style.display == "flex"){
        display.style.display = "none";
    }else{
        display.style.display = "flex";
        display.style.flexDirection = "column";
    }
}
function privacyShow() {
    var pI = document.getElementById("privacyI");
    var display  = document.getElementById("privacyUl");
    indexP = indexP + 1;
    pI.style.transform = 'rotateZ(' + (indexP) * 180 + 'deg)';
    if(display.style.display == "flex"){
        display.style.display = "none";
    }else{
        display.style.display = "flex";
        display.style.flexDirection = "column";
    }
}
function showMenu(){
    var headerList = document.getElementById("sub_list_header");
    if(headerList.style.display == "flex"){
        headerList.style.display = "none";
    }else{
        headerList.style.display = "flex";
        headerList.style.flexDirection = "column";
    }
}


document.getElementById("coolers").onclick = function(){
    var subList = document.getElementById("coolers_list");
    var span = document.getElementById("coolers");
    
    if(subList.style.display == "flex"){
        subList.style.display = "none";
        span.style.transform = "rotateZ(-45deg)";
    }else{
        subList.style.display = "flex";
        subList.style.flexDirection = "column";

        span.style.transform = "rotateZ(135deg)";
    }
}
document.getElementById("drinkware").onclick = function(){
    var subList = document.getElementById("drinkware_list");
    var span = document.getElementById("drinkware");
    
    if(subList.style.display == "flex"){
        subList.style.display = "none";
        span.style.transform = "rotateZ(-45deg)";
    }else{
        subList.style.display = "flex";
        subList.style.flexDirection = "column";
 
        span.style.transform = "rotateZ(135deg)";
    }
}
document.getElementById("bags").onclick = function(){
    var subList = document.getElementById("bags_list");
    var span = document.getElementById("bags");
    
    if(subList.style.display == "flex"){
        subList.style.display = "none";
        span.style.transform = "rotateZ(-45deg)";
    }else{
        subList.style.display = "flex";
        subList.style.flexDirection = "column";

        span.style.transform = "rotateZ(135deg)";
    }
}
document.getElementById("gear").onclick = function(){
    var subList = document.getElementById("gear_list");
    var span = document.getElementById("gear");
    
    if(subList.style.display == "flex"){
        subList.style.display = "none";
        span.style.transform = "rotateZ(-45deg)";
    }else{
        subList.style.display = "flex";
        subList.style.flexDirection = "column";

        span.style.transform = "rotateZ(135deg)";
    }
}
document.getElementById("custom").onclick = function(){
    var subList = document.getElementById("custom_list");
    var span = document.getElementById("custom");
    
    if(subList.style.display == "flex"){
        subList.style.display = "none";
        span.style.transform = "rotateZ(-45deg)";
    }else{
        subList.style.display = "flex";
        subList.style.flexDirection = "column";
        span.style.transform = "rotateZ(135deg)";
    }
}
document.getElementById("yeti").onclick = function(){
    var subList = document.getElementById("yeti_list");
    var span = document.getElementById("yeti");
    
    if(subList.style.display == "flex"){
        subList.style.display = "none";
        span.style.transform = "rotateZ(-45deg)";
    }else{
        subList.style.display = "flex";
        subList.style.flexDirection = "column";

        span.style.transform = "rotateZ(135deg)";
    }
}