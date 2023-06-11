// Animation on scroll
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        const textBox = entry.target.querySelector('.contact__information');
        const imgBox = entry.target.querySelector('.contact__img-box');
        if (entry.isIntersecting) {
            textBox.classList.add('animation-left');
            imgBox.classList.add('animation-right');
            return;
        }
    });    
});

observer.observe(document.querySelector('.contact'));

const obs = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        const textBoxDev = entry.target.querySelector('.development__text-box');
        const imgBoxDev = entry.target.querySelector('.development__img-box');
        const textLinkBoxDev = entry.target.querySelector('.development__text-link-box');
        if (entry.isIntersecting) {
            textBoxDev.classList.add('animation-left');
            imgBoxDev.classList.add('animation-right');
            textLinkBoxDev.classList.add('animation-right');
            return;
        }
    });    

});

obs.observe(document.querySelector('.development'));


// Main menu navigation
const openBtn = document.querySelector('#openMenu');

const closeButton = () => {
    const element = document.querySelector(".navigation__button");
    element.classList.toggle("close-line");
}

const openNavigaton = () => {
    const element = document.getElementById("navModal");
    element.classList.toggle("open-nav-menu");
    closeButton();
}

openBtn.addEventListener("click", openNavigaton);

const devBtn = document.querySelector('#devBtn');
devBtn.addEventListener("click", openNavigaton);

const skillsBtn = document.querySelector('#skillsBtn');
skillsBtn.addEventListener("click", openNavigaton);

const contactBtn = document.querySelector('#contactBtn');
contactBtn.addEventListener("click", openNavigaton);

const heroBtn = document.querySelector('#heroBtn');
heroBtn.addEventListener("click", openNavigaton);


// Dark mode
const lightImg = document.querySelector(".switch__img--light")
const darkImg = document.querySelector(".switch__img--dark")
const darkMode = document.querySelector('#darkModeBtn');

const makeDark = () => {
    const element = document.body;
    element.classList.toggle("dark-theme");

    if (darkMode.checked === true){
        lightImg.style.display = "none";
        darkImg.style.display = "block";

    } else {
        lightImg.style.display = "block";
        darkImg.style.display = "none";
    }
}

darkMode.addEventListener("click", makeDark);


// Up div
const goToTopBtn = document.querySelector(".go-to-top");

window.addEventListener("scroll", () => {
    if (window.pageYOffset > 150) {
        goToTopBtn.classList.add("active");
    } else {
        goToTopBtn.classList.remove("active");
    }
})

// Curent year - footer
const currentYear = new Date().getFullYear();
const yearDisplay = document.querySelector('.footer__year');
yearDisplay.textContent = currentYear;