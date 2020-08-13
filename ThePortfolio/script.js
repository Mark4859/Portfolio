let menu = document.getElementById("menu"),
ul = document.getElementById("list"),
i = 1;
menu.onclick =  function(){
    i = i + 1;
    if(i % 2 == 0){
        ul.style.display = "flex";
    }
    else{
        ul.style.display = "none";
    }
}  
  
