<?php include 'templates/header.php'; ?>
<?php include 'templates/navbar.php'; ?>

<section class="max-w-5xl mx-auto px-6 py-20" data-aos="fade-up">
    <h1 class="text-5xl font-extrabold text-center text-blue-400 animate__animated animate__fadeInDown">Educación</h1>
    <p class="text-center text-gray-300 mt-4 animate__animated animate__fadeInUp animate__delay-1s">
        Aquí puedes ver mi trayectoria académica y certificaciones.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12">
        
        <!-- Universidad Nacional de San Agustín -->
        <div class="bg-gray-800 p-6 rounded-xl shadow-xl hover:scale-105 transition-transform transform duration-300 animate__animated animate__fadeInUp" data-aos="zoom-in" data-aos-delay="100">
            <div class="flex items-center space-x-4">
                <img src="https://upload.wikimedia.org/wikipedia/commons/f/f9/Escudo_UNSA.png" alt="UNSA" class="w-14 h-14 rounded-full border-2 border-blue-400">
                <h3 class="text-2xl font-bold text-white">Universidad Nacional de San Agustín</h3>
            </div>
            <p class="text-gray-300 mt-3">Egresado de Ingeniería de Minas</p>
            <p class="text-gray-400 text-sm mt-2">Formación en minería, análisis de datos y gestión de proyectos.</p>
        </div>

        <!-- Instituto Tecsup -->
        <div class="bg-gray-800 p-6 rounded-xl shadow-xl hover:scale-105 transition-transform transform duration-300 animate__animated animate__fadeInUp" data-aos="zoom-in" data-aos-delay="200">
            <div class="flex items-center space-x-4">
                <img src="https://i.ytimg.com/vi/H2iV_zG7JVs/maxresdefault.jpg" alt="Tecsup" class="w-14 h-14 rounded-full border-2 border-blue-400">
                <h3 class="text-2xl font-bold text-white">Instituto Tecsup</h3>
            </div>
            <p class="text-gray-300 mt-3">Especialización en Tecnología y Ciencias Aplicadas</p>
            <p class="text-gray-400 text-sm mt-2">Enfoque en innovación y nuevas tecnologías.</p>
        </div>

        <!-- Curso Scrum -->
        <div class="bg-gray-800 p-6 rounded-xl shadow-xl hover:scale-105 transition-transform transform duration-300 animate__animated animate__fadeInUp" data-aos="zoom-in" data-aos-delay="300">
            <div class="flex items-center space-x-4">
                <img src="https://agiletrainingalliance.co.za/wp-content/uploads/2024/07/sa-csp_sm-300.webp" alt="Scrum" class="w-14 h-14 rounded-full border-2 border-blue-400">
                <h3 class="text-2xl font-bold text-white">Curso de Scrum</h3>
            </div>
            <p class="text-gray-300 mt-3">Metodologías Ágiles</p>
            <p class="text-gray-400 text-sm mt-2">Gestión eficiente de proyectos con Scrum.</p>
        </div>

        <!-- Curso Análisis de Datos -->
        <div class="bg-gray-800 p-6 rounded-xl shadow-xl hover:scale-105 transition-transform transform duration-300 animate__animated animate__fadeInUp" data-aos="zoom-in" data-aos-delay="400">
            <div class="flex items-center space-x-4">
                <img src="https://foroalfa.org/imagenes/ilustraciones/1296.jpg" alt="Análisis de Datos" class="w-14 h-14 rounded-full border-2 border-blue-400">
                <h3 class="text-2xl font-bold text-white">Curso de Análisis de Datos</h3>
            </div>
            <p class="text-gray-300 mt-3">Big Data y Visualización</p>
            <p class="text-gray-400 text-sm mt-2">Herramientas como Python, SQL y Power BI.</p>
        </div>

    </div>
</section>

<?php include 'templates/footer.php'; ?>
