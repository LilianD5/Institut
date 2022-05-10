const button = document.getElementById("icone-burger");
const menu = document.getElementById("menu-b");

button.addEventListener('click', function(){
    menu.classList.toggle('show');
});

console.log(button);