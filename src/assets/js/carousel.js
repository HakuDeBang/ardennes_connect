const slides = document.querySelectorAll(".slide");
const indicateurs = document.querySelectorAll(".indicateur");
let slideActif = 0;

function activerSlide(slideIndex) {
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    for (let i = 0; i < indicateurs.length; i++) {
        indicateurs[i].disabled = true;
    }

    slides[slideIndex].style.display = "block";
    indicateurs[slideIndex].disabled = false;
}

function slideDroit() {
    slideActif = (slideActif + 1) % slides.length;
    activerSlide(slideActif);
}

function slideGauche() {
    slideActif = (slideActif - 1) % slides.length;
    activerSlide(slideActif);
}

for (let i = 0; i < indicateurs.length; i++) {
    indicateurs[i].addEventListener("click", function() {
        activerSlide(i);
        slideActif = 1;
    });
}

document.getElementById("navigateur_droit").addEventListener("click", slideDroit);
document.getElementById("navigateur_gauche").addEventListener("click", slideGauche);

window.onload = function () {
    indicateurs[0].disabled = true;
};