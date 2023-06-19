//footer
//code to get current year
//when the dom is ready
document.addEventListener("DOMContentLoaded", function year(){
    //get the element
    const yrSpan = document.getElementById("footer");
    //get the current year
    const currentYr = new Date().getFullYear();
    //set the span element text to the current year
    yrSpan.textContent = currentYr;
})

//Sign-page and Sign-up show and hide password
//code to show or hide password
//get the elements
const eyeicon = document.getElementById("eye");
const password = document.getElementById("password");

//onclick function
eyeicon.onclick = function(){
    //checking condition
    if(password.type=="password"){
        //if the condition true then password type will become text type
        password.type= "text";
        eyeicon.src = "Greenzone-img/eye-open.png"
        //otherwise viseversa
    }else {
        password.type = "password";
        eyeicon.src = "Greenzone-img/eye-close.png"
    }
}