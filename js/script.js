// Efecto de nieve o código cayendo estilo Matrix
const canvas = document.getElementById('snow-canvas');
const ctx = canvas.getContext('2d');
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

let particles = [];

function createParticle(e) {
    let xPos = e.x;
    let yPos = e.y;

    let size = Math.random() * 5 + 1;
    let speed = Math.random() * 3 + 1;
    let direction = Math.random() * 2 * Math.PI;

    particles.push({
        x: xPos,
        y: yPos,
        size: size,
        speed: speed,
        direction: direction
    });
}

function updateParticles() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    particles.forEach((particle, index) => {
        let xSpeed = Math.cos(particle.direction) * particle.speed;
        let ySpeed = Math.sin(particle.direction) * particle.speed;

        particle.x += xSpeed;
        particle.y += ySpeed;

        if (particle.y > canvas.height) {
            particles.splice(index, 1);
        }

        ctx.beginPath();
        ctx.arc(particle.x, particle.y, particle.size, 0, Math.PI * 2);
        ctx.fillStyle = 'white';
        ctx.fill();
    });
}

canvas.addEventListener('mousemove', createParticle);
setInterval(updateParticles, 1000 / 60);
