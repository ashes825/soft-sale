window.onload = function(){
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