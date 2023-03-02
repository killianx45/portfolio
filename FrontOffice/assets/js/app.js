'use strict'
const txtAnim = document.querySelector('.app');

new Typewriter(txtAnim,{
    loop: true, //permet de répéter la boucle.
    deleteSpeed: 15
})
.changeDelay(20)
.typeString('Jeune Développeur')
.pauseFor(1000)
.deleteChars(17)
.typeString('Etudiant')
.pauseFor(1000)
.deleteChars(8)
.typeString('Passioné')
.start()


const themeToggle = document.getElementById('theme-toggle');
const phone = document.getElementById('phone');
const site = document.getElementById('site');
const mail = document.getElementById('mail');
const github = document.getElementById('git');
const linkedin = document.getElementById('linkedin');
const twitter = document.getElementById('twitter');

const body = document.body;

themeToggle.addEventListener('click', () => {
	if (body.classList.contains('light-mode')) {
		body.classList.remove('light-mode');
		themeToggle.src = '../portfolio/FrontOffice/assets/img/lever-du-soleil.png';
    phone.src = '../portfolio/FrontOffice/assets/img/phone-white.png';
    site.src = '../portfolio/FrontOffice/assets/img/web-white.png';
    mail.src = '../portfolio/FrontOffice/assets/img/mail-white.png';
    github.src = '../portfolio/FrontOffice/assets/img/github-white.png';
    linkedin.src = '../portfolio/FrontOffice/assets/img/linkedin-white.png';
    twitter.src = '../portfolio/FrontOffice/assets/img/twitter-white.png';

	} else {
		body.classList.add('light-mode');
		themeToggle.src = '../portfolio/FrontOffice/assets/img/lunes.png';
    phone.src = '../portfolio/FrontOffice/assets/img/phone-black.png';
    site.src = '../portfolio/FrontOffice/assets/img/site-black.png';
    mail.src = '../portfolio/FrontOffice/assets/img/mail-black.png';
    github.src = '../portfolio/FrontOffice/assets/img/github-black.png';
    linkedin.src = '../portfolio/FrontOffice/assets/img/linkedin-black.png';
    twitter.src = '../portfolio/FrontOffice/assets/img/twitter-black.png';

	}
});



// Récupération du bouton
const scrollToTopButton = document.getElementById('scroll-to-top-btn');

// Ajout d'un écouteur d'événements pour le clic sur le bouton
scrollToTopButton.addEventListener('click', scrollToTop);

// Ajout d'un écouteur d'événements pour le scroll de la page
window.addEventListener('scroll', showScrollButton);

function scrollToTop() {
  // Fait défiler la page jusqu'en haut
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
}

function showScrollButton() {
  // Affiche ou cache le bouton en fonction de la position du scroll
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    scrollToTopButton.style.display = 'block';
  } else {
    scrollToTopButton.style.display = 'none';
  }
}

// ANIMATION HEADER BACKGROUND //
const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');


// Set canvas size
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

// Define special characters
const chars = ['{', ';', '/', ']', '<', '>', '[', '}']; //['{', ';', '/', ']', '<', '>', '[', '}', '💻' ]

// Define particle colors
const colors = ['#F44336', '#E91E63', '#9C27B0', '#673AB7', '#3F51B5', '#2196F3', '#03A9F4', '#00BCD4', '#009688', '#4CAF50', '#8BC34A', '#CDDC39', '#FFEB3B', '#FFC107', '#FF9800', '#FF5722', '#795548', '#9E9E9E', '#607D8B'];

// Create array of particles
const particles = [];
for (let i = 0; i < 100; i++) {
  particles.push({
    x: Math.random() * canvas.width,
    y: Math.random() * canvas.height,
    vx: Math.random() * 2 - 1,
    vy: Math.random() * 2 - 1,
    char: chars[Math.floor(Math.random() * chars.length)],
    color: colors[Math.floor(Math.random() * colors.length)]
  });
}


// Update particle positions and draw on canvas
function update() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);

  // Draw black background
  ctx.fillStyle = 'rgba(30, 30, 30, 1)';
  ctx.fillRect(0, 0, canvas.width, canvas.height);

  // Draw particles
  for (let i = 0; i < particles.length; i++) {
    const p = particles[i];

    // Update position
    p.x += p.vx;
    p.y += p.vy;

    // Bounce off edges
    if (p.x < 0 || p.x > canvas.width) p.vx *= -1;
    if (p.y < 0 || p.y > canvas.height) p.vy *= -1;

    // Draw particle
    ctx.fillStyle = p.color;
    ctx.font = '30px monospace';
    ctx.fillText(p.char, p.x, p.y);

    // Increase particle size
    ctx.font = '90px monospace';
  }

  // Call update again
  requestAnimationFrame(update);
}

// Start animation
update();


// Optionnel: ajouter une animation lors du chargement de la page
window.onload = function() {
  var cartes = document.getElementsByClassName("dev");
  for (var i = 0; i < cartes.length; i++) {
    cartes[i].classList.add("carte-animation");
  }
}

// Ajouter une classe pour activer l'animation de la carte
var cartes = document.getElementsByClassName("dev");
for (var i = 0; i < cartes.length; i++) {
  cartes[i].addEventListener("mouseover", function() {
    this.classList.add("carte-retourner");
  });
  cartes[i].addEventListener("mouseout", function() {
    this.classList.remove("carte-retourner");
  });
}


function scrollToBottom() {
  window.scrollTo({
    top: document.body.scrollHeight,
    behavior: 'smooth'
  });
}

