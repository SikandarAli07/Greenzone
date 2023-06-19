

console.log("hello dalle");

let user = document.getElementById("user");
let settings = document.getElementById("settings");

user.addEventListener('click', openSettings)
window.addEventListener('click', close)

function openSettings(){
    if (settings.style.display == 'none') {
        settings.style.display = 'block'
    } else {
        settings.style.display = 'none'
    }
}

function close(event) {
    if(event.target == settings) {
        settings.style.display = 'none'
    }
}