var modal_login = document.getElementById("modal-login");
var modal_register = document.getElementById("modal-register");

function abc()
{
    modal_register.style.display = "none";
    modal_login.style.display = "block";
    window.onclick = function(event){
        if(event.target == modal_login)
        {
            modal_login.style.display = "none";
        }
    }
}


function abc2()
{
    modal_login.style.display = "none";
    modal_register.style.display = "block";
    window.onclick = function(event){
        if(event.target == modal_register)
        {
            modal_register.style.display = "none";
        }
    }
}




