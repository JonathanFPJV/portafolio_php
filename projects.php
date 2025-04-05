<?php include 'templates/header.php'; ?>
<?php include 'templates/navbar.php'; ?>

<section class="max-w-6xl mx-auto px-6 py-20" data-aos="fade-up">
    <h1 class="text-5xl font-extrabold text-center text-green-400 animate__animated animate__fadeInDown">Proyectos</h1>
    <p class="text-center text-gray-300 mt-4 animate__animated animate__fadeInUp animate__delay-1s">
        Aquí puedes ver algunos de los proyectos en los que he trabajado.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-10">

        <!-- Tienda de venta online en PHP -->
        <div class="bg-gray-800 rounded-lg shadow-xl overflow-hidden hover:scale-105 transition-transform transform duration-300 animate__animated animate__fadeInUp" data-aos="zoom-in" data-aos-delay="100">
            <img class="w-full h-48 object-cover" src="img/php-store.png" alt="Tienda Online PHP">
            <div class="p-6">
                <h3 class="text-2xl font-bold text-white">Tienda Online en PHP</h3>
                <p class="text-gray-300 mt-3">Desarrollo de una plataforma de comercio electrónico con integración de pagos y carrito de compras.</p>
                <a href="#" class="text-blue-400 hover:underline mt-3 inline-block">Ver más</a>
            </div>
        </div>

        <!-- Sistema de gestión de inventarios en tiempo real -->
        <div class="bg-gray-800 rounded-lg shadow-xl overflow-hidden hover:scale-105 transition-transform transform duration-300 animate__animated animate__fadeInUp" data-aos="zoom-in" data-aos-delay="200">
            <img class="w-full h-48 object-cover" src="img/inventory-system.png" alt="Inventario en tiempo real">
            <div class="p-6">
                <h3 class="text-2xl font-bold text-white">Gestión de Inventarios en Tiempo Real</h3>
                <p class="text-gray-300 mt-3">Sistema que permite el seguimiento de stock con actualización automática y reportes en vivo.</p>
                <a href="#" class="text-blue-400 hover:underline mt-3 inline-block">Ver más</a>
            </div>
        </div>

        <!-- Aplicación móvil con RFID en Kotlin -->
        <div class="bg-gray-800 rounded-lg shadow-xl overflow-hidden hover:scale-105 transition-transform transform duration-300 animate__animated animate__fadeInUp" data-aos="zoom-in" data-aos-delay="300">
            <img class="w-full h-48 object-cover" src="img/rfid-app.png" alt="App Móvil con RFID">
            <div class="p-6">
                <h3 class="text-2xl font-bold text-white">App Móvil con RFID en Kotlin</h3>
                <p class="text-gray-300 mt-3">Aplicación que utiliza tecnología RFID para el rastreo y control de activos desde dispositivos móviles.</p>
                <a href="#" class="text-blue-400 hover:underline mt-3 inline-block">Ver más</a>
            </div>
        </div>

        <!-- Sistema de gestión de tienda textil con Django y React -->
        <div class="bg-gray-800 rounded-lg shadow-xl overflow-hidden hover:scale-105 transition-transform transform duration-300 animate__animated animate__fadeInUp" data-aos="zoom-in" data-aos-delay="400">
            <img class="w-full h-48 object-cover" src="img/textil.png" alt="Gestión de tienda textil">
            <div class="p-6">
                <h3 class="text-2xl font-bold text-white">Gestión de Tienda Textil</h3>
                <p class="text-gray-300 mt-3">Plataforma desarrollada con Django y React para administrar ventas, clientes y productos.</p>
                <a href="#" class="text-blue-400 hover:underline mt-3 inline-block">Ver más</a>
            </div>
        </div>

        <!-- Tienda online de discos de vinilo en Spring Boot -->
        <div class="bg-gray-800 rounded-lg shadow-xl overflow-hidden hover:scale-105 transition-transform transform duration-300 animate__animated animate__fadeInUp" data-aos="zoom-in" data-aos-delay="500">
            <img class="w-full h-48 object-cover" src="img/vinilo.png" alt="Tienda de discos">
            <div class="p-6">
                <h3 class="text-2xl font-bold text-white">Tienda de Discos en Spring Boot</h3>
                <p class="text-gray-300 mt-3">E-commerce especializado en la venta de vinilos con catálogo interactivo y pagos integrados.</p>
                <a href="#" class="text-blue-400 hover:underline mt-3 inline-block">Ver más</a>
            </div>
        </div>

    </div>
</section>

<?php include 'templates/footer.php'; ?>
