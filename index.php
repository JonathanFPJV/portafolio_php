<?php include 'templates/header.php'; ?>
<?php include 'templates/navbar.php'; ?>

<!-- Sección de imagen central con efecto -->
<section class="relative flex justify-center items-center w-full h-96 mt-16 overflow-hidden rounded-full"> <!-- Cambié "overflow-hidden" para una forma ovalada -->
    <!-- Imagen centrada con efecto de opacidad -->
    <img src="img/02.png" alt="Imagen Central" class="absolute w-full h-full object-cover opacity-80 rounded-full" /> <!-- Aplicamos el estilo ovalado aquí -->
    
    <!-- Texto sobre la imagen -->
    <div class="absolute z-10 text-white text-3xl font-bold animate__animated animate__fadeInUp">
        <p class="text-center">Explora mis proyectos y habilidades</p>
    </div>

    <!-- Canvas con efecto de nieve que se limita a la forma ovalada -->
    <canvas id="snow-canvas" class="absolute inset-0 z-0 rounded-full"></canvas> <!-- Agregamos el estilo ovalado también al canvas -->
</section>

<section class="text-center py-20">
    <h1 class="text-5xl font-extrabold animate__animated animate__fadeInDown">Hola, soy <span class="text-blue-400">Jonathan Juli Velazco</span></h1>
    <p class="mt-4 text-gray-300 text-lg animate__animated animate__fadeInUp">Desarrollador y analista de datos</p>
    <div class="mt-6 space-x-4 animate__animated animate__fadeInUp">
        <a href="about.php" class="px-6 py-3 bg-blue-500 hover:bg-blue-600 rounded-full text-white shadow-lg transition-all">Sobre mí</a>
        <a href="projects.php" class="px-6 py-3 bg-green-500 hover:bg-green-600 rounded-full text-white shadow-lg transition-all">Mis proyectos</a>
        <a href="contact.php" class="px-6 py-3 bg-red-500 hover:bg-red-600 rounded-full text-white shadow-lg transition-all">Contáctame</a>
    </div>
</section>

<section class="max-w-6xl mx-auto px-6 mt-16" data-aos="fade-up">
    <h2 class="text-4xl font-bold text-center mb-10 text-yellow-400">Mis Proyectos</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Proyecto 1 -->
        <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition">
            <img class="w-full h-48 object-cover" src="img/php-store.png" alt="Tienda Online PHP">
            <div class="p-4">
                <h3 class="text-xl font-bold text-white">Tienda Online en PHP</h3>
                <p class="mt-2 text-gray-300">Desarrollo de una tienda de venta online utilizando PHP y MySQL.</p>
            </div>
        </div>
        <!-- Proyecto 2 -->
        <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition">
            <img class="w-full h-48 object-cover" src="img/inventory-system.png" alt="Sistema de Inventarios">
            <div class="p-4">
                <h3 class="text-xl font-bold text-white">Sistema de Gestión de Inventarios</h3>
                <p class="mt-2 text-gray-300">Sistema en tiempo real para la gestión de inventarios en empresas.</p>
            </div>
        </div>
        <!-- Proyecto 3 -->
        <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition">
            <img class="w-full h-48 object-cover" src="img/rfid-app.png" alt="App RFID Kotlin">
            <div class="p-4">
                <h3 class="text-xl font-bold text-white">App RFID en Kotlin</h3>
                <p class="mt-2 text-gray-300">Aplicación móvil que utiliza tecnología RFID para control de acceso y gestión.</p>
            </div>
        </div>
    </div>
    <div class="text-center mt-10">
        <a href="projects.php" class="px-6 py-3 bg-gray-700 hover:bg-gray-600 rounded-full text-white shadow-lg transition">Ver más proyectos</a>
    </div>
</section>

<script src="js/script.js"></script>
</body>
</html>
