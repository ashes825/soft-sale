window.onload = function(){
    slidesScrolling();
    document.getElementById('top-btn').onclick = function(){
        window.scrollTo(0,0);
    } 
} 
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
        document.getElementById('top-btn').style.display = "block";
    } 
    else {
        document.getElementById('top-btn').style.display = "none";
    }
} 
function slidesScrolling(){
    var radioBtn1 = document.getElementById('r1');
    var radioBtn2 = document.getElementById('r2');
    var radioBtn3 = document.getElementById('r3');

    radioBtn1.addEventListener("click", function(){
        showSlide();
        makeTimer();
    })
    radioBtn2.addEventListener("click", function(){
        showSlide();
        makeTimer();
    })
    radioBtn3.addEventListener("click", function(){
        showSlide();
        makeTimer();
    })

    function showSlide(){
        var slides = document.getElementsByClassName("slide");
        if(radioBtn1.checked){
            slides[0].style.marginLeft = "0";
        } 
        if(radioBtn2.checked){
            slides[0].style.marginLeft = "-33.6%";
        } 
        if(radioBtn3.checked){
            slides[0].style.marginLeft = "-67.2%";
        } 
    }
    var timer = 0;
    makeTimer(); 
    function makeTimer(){
        clearInterval(timer) 
        timer = setInterval(function(){
            if(radioBtn1.checked){
                radioBtn2.checked = true;
                showSlide();
            } 
            else if(radioBtn2.checked){
                radioBtn3.checked = true;
                showSlide();
            } 
            else{ 
                radioBtn1.checked = true;
                showSlide();
            } 
    },6000);
  }   
}