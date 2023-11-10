let form = document.querySelector(".formBox");
let formulaire = document.querySelectorAll(".contForm");
let check = document.querySelector(".check");
let add = document.querySelector(".modifier");
let del = document.querySelector(".supprimer");
let icone = document.querySelector(".icone");

// Afficher les icones ajouter et supprimer
function hovering() {
    icone.classList.add("hover");
    formulaire.forEach(function (value, key, parent) {
        value.classList.add("bg");
    })
}

// Cacher les icones ajouter et supprimer
function nothovering(){
    icone.classList.remove("hover");
    formulaire.classList.remove("bg");
}

// TEST

add.addEventListener("click", function () {
    alert("C'est le botton ajouter, alert !!!!")
});del.addEventListener("click", function () {
    alert("C'est le botton supprimer, alert !!!!")
})


//Appelle des fonctions en ajoutant des ecouteurs d'evenement
formulaire.addEventListener("mouseover", hovering);
formulaire.addEventListener("mouseout", nothovering);
