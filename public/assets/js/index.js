const sectionRegistre = document.querySelector('#registre');
const sectionLogin = document.querySelector('#login');
const registretologin = document.querySelector('#registretologin');
const logintoregistre = document.querySelector('#logintoregistre');

function showLogin(){
    registretologin.addEventListener('click',(event)=>{
        event.preventDefault()
        sectionLogin.classList.toggle("hidden");
        sectionRegistre.classList.toggle("hidden");
    })
}

function showRegistre(){
    logintoregistre.addEventListener('click',(event)=>{
        event.preventDefault()
        sectionLogin.classList.toggle("hidden");
        sectionRegistre.classList.toggle("hidden");
    })
}

showLogin()
showRegistre()
