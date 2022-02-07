var btn2 = document.getElementById("btn-update");
var modal2 = document.getElementById("myModal2");
var span2 = document.getElementsByClassName("close")[1];
btn2.onclick = function(){
    modal2.style.display = "block";
}

span2.onclick = function(){
    modal2.style.display = "none";
}

window.onclick = function(event){
    if(event.target == modal2)
    {
        modal2.style.display = "none";
    }
}