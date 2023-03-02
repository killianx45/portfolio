'use strict';

// Set up canvas and context
const canvas = document.getElementById("canva");
const ctx = canvas.getContext("2d");

// Set canvas dimensions
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

// Set up particles
const numParticles = 100;
const particles = [];

for (let i = 0; i < numParticles; i++) {
  particles.push({
    x: Math.random() * canvas.width,
    y: Math.random() * canvas.height,
    vx: Math.random() * 2 - 1,
    vy: Math.random() * 2 - 1
  });
}

// Set up animation loop
function animate() {
  // Clear canvas
  ctx.clearRect(0, 0, canvas.width, canvas.height);

  // Draw particles
  ctx.fillStyle = "rgba(30, 30, 30, 1)";
  ctx.beginPath();
  particles.forEach(particle => {
    // Update position
    particle.x += particle.vx;
    particle.y += particle.vy;

    // Bounce off edges of canvas
    if (particle.x < 0 || particle.x > canvas.width) {
      particle.vx *= -1;
    }
    if (particle.y < 0 || particle.y > canvas.height) {
      particle.vy *= -1;
    }

    // Draw particle
    ctx.moveTo(particle.x, particle.y);
    ctx.arc(particle.x, particle.y, 1, 0, 2 * Math.PI);
  });
  ctx.closePath();
  ctx.fill();

  // Request next frame
  requestAnimationFrame(animate);
}

// Start animation loop
animate();

