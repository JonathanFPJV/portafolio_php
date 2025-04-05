<?php include 'templates/header.php'; ?>
<?php include 'templates/navbar.php'; ?>

<!-- 🔹 Sobre Mí -->
<section class="max-w-4xl mx-auto px-6 py-20 text-center" data-aos="fade-up">
    <h1 class="text-5xl font-extrabold text-blue-400 animate__animated animate__fadeInDown">Sobre Mí</h1>
    <p class="mt-4 text-gray-300 text-lg leading-relaxed animate__animated animate__fadeInUp">
        Soy <span class="font-bold text-white">Jonathan Juli</span>, desarrollador con experiencia en JavaScript, Node.js, React, PHP y MySQL.
        Me especializo en el desarrollo backend, asegurando que las aplicaciones funcionen de manera óptima.
        Destaco por mi responsabilidad, enfoque sistemático y capacidad para resolver problemas complejos.
        Actualmente, estoy ampliando mis conocimientos en análisis de datos para apoyar la toma de decisiones estratégicas.
    </p>
    <div class="mt-8 animate__animated animate__zoomIn">
        <img src="img/yo.png" alt="Foto de Jonathan" class="w-40 h-40 mx-auto rounded-full shadow-lg">
    </div>
</section>

<!-- 🔹 Habilidades -->
<section class="max-w-6xl mx-auto px-6 py-16" data-aos="fade-up">
    <h2 class="text-4xl font-bold text-center mb-12 text-yellow-400 animate__animated animate__fadeInDown">Mis Habilidades</h2>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 text-center">
        <!-- JavaScript -->
        <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:scale-105 transform transition" data-aos="zoom-in">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript" class="w-12 h-12 mx-auto">
            <p class="mt-2 text-white font-bold">JavaScript</p>
        </div>
        <!-- Node.js -->
        <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:scale-105 transform transition" data-aos="zoom-in" data-aos-delay="100">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" alt="Node.js" class="w-12 h-12 mx-auto">
            <p class="mt-2 text-white font-bold">Node.js</p>
        </div>
        <!-- React -->
        <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:scale-105 transform transition" data-aos="zoom-in" data-aos-delay="200">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React" class="w-12 h-12 mx-auto">
            <p class="mt-2 text-white font-bold">React</p>
        </div>
        <!-- Docker -->
        <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:scale-105 transform transition" data-aos="zoom-in" data-aos-delay="300">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg" alt="Docker" class="w-12 h-12 mx-auto">
            <p class="mt-2 text-white font-bold">Docker</p>
        </div>
    </div>
</section>

<!-- 🔹 Experiencia -->
<section class="max-w-6xl mx-auto px-6 py-16" data-aos="fade-up">
    <h2 class="text-4xl font-bold text-center mb-12 text-yellow-400 animate__animated animate__fadeInDown">Experiencia</h2>
    <div class="space-y-8">
        <!-- Experiencia 1 -->
        <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:scale-105 transform transition" data-aos="fade-right">
            <h3 class="text-2xl font-bold text-white">Desarrollador Backend</h3>
            <p class="text-gray-300">MinigConsulting - 2025</p>
            <p class="mt-2 text-gray-400">Desarrollo y mantenimiento de aplicaciones web escalables con React y Node.js.</p>
        </div>
        <!-- Experiencia 2 -->
        <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:scale-105 transform transition" data-aos="fade-left">
            <h3 class="text-2xl font-bold text-white">Desarrollador de Aplicaciones Móviles</h3>
            <p class="text-gray-300">StoreKeeper - 2024-2025</p>
            <p class="mt-2 text-gray-400">Creación de una aplicación en Kotlin para gestionar una tienda mediante NFC.</p>
        </div>
    </div>
</section>

<script src="js/script.js"></script>
</body>
</html>
