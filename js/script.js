const canvas = document.getElementById('snow-canvas');
const ctx = canvas.getContext('2d');
const img = document.querySelector('img');  // Seleccionamos la imagen para obtener las dimensiones

// Ajustar el tamaño del canvas según el contenedor
canvas.width = img.clientWidth;
canvas.height = img.clientHeight;

const chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"; // Conjunto de caracteres que caerán
const fontSize = 16; // Tamaño de la fuente
const columns = canvas.width / fontSize; // Número de columnas
const drops = []; // Array de gotas (letras que caen)

// Inicializamos las gotas (letras)
for (let i = 0; i < columns; i++) {
    drops[i] = 0; // Las gotas empiezan en la parte superior
}

// Función para dibujar las letras
function drawMatrix() {
    ctx.clearRect(0, 0, canvas.width, canvas.height); // Limpiamos el lienzo

    // Aplicar el recorte de la forma ovalada
    ctx.save(); // Guardamos el estado del contexto
    ctx.beginPath();
    ctx.ellipse(canvas.width / 2, canvas.height / 2, canvas.width / 2, canvas.height / 2, 0, 0, Math.PI * 2);
    ctx.clip(); // Solo se dibujará dentro del área ovalada

    ctx.fillStyle = "#0F0"; // Color verde de las letras
    ctx.font = `${fontSize}px monospace`; // Fuente de las letras

    // Dibuja las letras que caen
    for (let i = 0; i < drops.length; i++) {
        let char = chars[Math.floor(Math.random() * chars.length)]; // Selecciona una letra aleatoria
        ctx.fillText(char, i * fontSize, drops[i] * fontSize); // Dibuja la letra

        // Reseteamos la gota al final de la pantalla
        if (drops[i] * fontSize > canvas.height && Math.random() > 0.975) {
            drops[i] = 0;
        }

        // Movemos las gotas hacia abajo
        drops[i]++;
    }

    ctx.restore(); // Restauramos el estado del contexto
}

// Evento para detectar el movimiento del ratón
canvas.addEventListener('mousemove', (e) => {
    const xPos = e.offsetX;
    const yPos = e.offsetY;
    
    // Generar letras solo cerca del ratón
    let xColumn = Math.floor(xPos / fontSize);
    let yColumn = Math.floor(yPos / fontSize);
    
    drops[xColumn] = yColumn; // Hacer que las gotas se generen en la posición del ratón
});

// Llamamos a la función drawMatrix continuamente para crear el efecto
setInterval(drawMatrix, 1000 / 30); // 30 FPS
