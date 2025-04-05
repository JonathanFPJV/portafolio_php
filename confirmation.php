<?php include 'templates/header.php'; ?>
<?php include 'templates/navbar.php'; ?>

<section class="flex flex-col items-center justify-center min-h-screen text-center px-6" data-aos="zoom-in">
    <div class="bg-gray-800 p-10 rounded-2xl shadow-2xl animate__animated animate__fadeIn">
        <h1 class="text-5xl font-extrabold text-green-400 animate__animated animate__fadeInDown">¡Gracias por tu mensaje!</h1>
        <p class="mt-4 text-lg text-gray-300 animate__animated animate__fadeInUp animate__delay-1s">
            Muy pronto me pondré en contacto contigo.
        </p>
        <div id="success-msg" class="mt-8 opacity-0 transition-opacity duration-1000 ease-in-out text-white font-semibold text-xl">
            ✅ Tu mensaje ha sido enviado correctamente.
        </div>
        <a href="index.php" class="mt-8 inline-block bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-full shadow-md transition transform hover:scale-105">
            Volver al Inicio
        </a>
    </div>
</section>

<script>
    // JS para mostrar mensaje de éxito con animación
    window.addEventListener('DOMContentLoaded', () => {
        const msg = document.getElementById('success-msg');
        setTimeout(() => {
            msg.classList.add('opacity-100');
        }, 1000); // Aparece después de 1 segundo
    });
</script>

<?php include 'templates/footer.php'; ?>
