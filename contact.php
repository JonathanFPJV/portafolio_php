<?php include 'templates/header.php'; ?>
<?php include 'templates/navbar.php'; ?>

<section class="max-w-4xl mx-auto px-6 py-20" data-aos="fade-up">
    <h1 class="text-5xl font-extrabold text-center text-blue-400 animate__animated animate__fadeInDown">Contáctame</h1>
    <p class="text-center text-gray-300 mt-4 animate__animated animate__fadeInUp animate__delay-1s">
        Envíame un mensaje y te responderé lo antes posible.
    </p>

    <form action="confirmation.php" method="POST" class="mt-10 bg-gray-800 p-8 rounded-xl shadow-2xl animate__animated animate__fadeIn">
        <!-- Nombre -->
        <div class="mb-6">
            <label class="block text-gray-300 font-semibold mb-2" for="nombre">Nombre</label>
            <div class="flex items-center bg-gray-900 rounded-lg shadow-md p-3">
                <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M5.121 17.804A13.937 13.937 0 0112 15c2.485 0 4.779.755 6.879 2.047M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <input type="text" id="nombre" name="nombre" placeholder="Tu nombre"
                    class="w-full bg-transparent text-white ml-3 focus:outline-none" required>
            </div>
        </div>

        <!-- Correo -->
        <div class="mb-6">
            <label class="block text-gray-300 font-semibold mb-2" for="correo">Correo Electrónico</label>
            <div class="flex items-center bg-gray-900 rounded-lg shadow-md p-3">
                <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16 12a4 4 0 01-8 0 4 4 0 018 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 14l9-5-9-5-9 5 9 5z" />
                </svg>
                <input type="email" id="correo" name="correo" placeholder="Tu correo"
                    class="w-full bg-transparent text-white ml-3 focus:outline-none" required>
            </div>
        </div>

        <!-- Mensaje -->
        <div class="mb-6">
            <label class="block text-gray-300 font-semibold mb-2" for="mensaje">Mensaje</label>
            <textarea id="mensaje" name="mensaje" rows="4" placeholder="Escribe tu mensaje aquí..."
                class="w-full bg-gray-900 text-white rounded-lg p-3 shadow-md focus:outline-none focus:ring-2 focus:ring-blue-400" required></textarea>
        </div>

        <!-- Botón Enviar -->
        <button type="submit"
            class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 rounded-lg shadow-lg transition-transform transform hover:scale-105 animate__animated animate__pulse animate__infinite">
            Enviar Mensaje
        </button>
    </form>
</section>

<?php include 'templates/footer.php'; ?>
