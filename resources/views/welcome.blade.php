<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-200">
    <header class="bg-blue-950 text-white sticky w-full top-0 z-20">
        <div class="flex justify-between items-center py-4">
            <img src="https://www.unasam.edu.pe/img/unasam.png" alt="Logo Universidad" class="w-12 ml-4">
            <div class="flex-grow text-center">
                <h1 class="font-bold text-2xl md:text-4xl">PORTAL DE TRANSPARENCIA</h1>
                <p class="sm:block hidden text-xl">UNIVERSIDAD NACIONAL SANTIAGO ANTÚNEZ DE MAYOLO</p>
                <p class="sm:hidden block text-xl">UNASAM</p>
            </div>
        </div>
        <nav class="sm:block hidden bg-gray-900 text-right">
            <ul class="m-0 px-3">
                <li class="inline-block px-4 py-2 hover:bg-blue-950 transition-transform transform hover:scale-110 rounded m-0"><a target="_blank" href="http://campus.unasam.edu.pe">Campus Virtual</a></li>
                <li class="inline-block px-4 py-2 hover:bg-blue-950 transition-transform transform hover:scale-110 rounded m-0"><a target="_blank" href="https://sga.unasam.edu.pe">Sistema de Gestión Academica</a></li>
                <li class="inline-block px-4 py-2 hover:bg-blue-950 transition-transform transform hover:scale-110 rounded m-0"><a target="_blank" href="https://www.office.com/">Office 365</a></li>
                <li class="inline-block px-4 py-2 hover:bg-blue-950 transition-transform transform hover:scale-110 rounded m-0"><a target="_blank" href="https://directorio.universidad.edu">Directorio Telefónico</a></li>
            </ul>
        </nav>
        <nav class="sm:hidden relative px-2 pb-2">
            <button data-ripple-light="true" data-collapse-target="collapse" 
            class="select-none w-full rounded-md bg-gray-900 py-2 text-center align-middle font-sans uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                OTROS ENLACES
            </button>
            <div data-collapse="collapse" class="block h-0 w-full basis-full overflow-hidden transition-all duration-300 ease-in-out">
                <div class="relative mx-auto my-4 flex flex-col rounded-md bg-white bg-clip-border text-gray-700 shadow-md">
                    <div class="flex flex-col">
                        <span class="inline-block px-4 py-2 hover:bg-blue-950 hover:text-white rounded m-0"><a target="_blank" href="http://campus.unasam.edu.pe">Campus Virtual</a></span>
                        <span class="inline-block px-4 py-2 hover:bg-blue-950 hover:text-white rounded m-0"><a target="_blank" href="https://sga.unasam.edu.pe">Sistema de Gestión Academica</a></span>
                        <span class="inline-block px-4 py-2 hover:bg-blue-950 hover:text-white rounded m-0"><a target="_blank" href="https://www.office.com/">Office 365</a></span>
                        <span class="inline-block px-4 py-2 hover:bg-blue-950 hover:text-white rounded m-0"><a target="_blank" href="https://directorio.universidad.edu">Directorio Telefónico</a></span>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="hero">
            <img src="{{ asset('img/university-campus.jpg') }}" alt="Campus Universitario" class="w-full object-cover block mb-4">
            <div class="hero-text p-10">
                <h1 class="font-bold text-xl md:text-4xl">TRANSPARENCIA UNASAM</h1>
                <p class="uppercase text-sm md:text-xl">Una nueva Universidad para el Desarrollo</p>
            </div>
        </section>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <section class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-2">
                <div class="bg-white p-5 m-2 text-center border-l-4 border-blue-950 rounded-md transition-transform transform hover:scale-110"><!-- Card -->
                    <a href="https://unasam.edu.pe/misionvision">
                        <h2 class="uppercase text-blue-950 mb-4 font-bold text-lg">Numeral 11 de la ley universitaria</h2>
                        <p>Una descripción de la ley universitaria</p>
                    </a>
                </div>
            </section>
        </div>
    </main>
    <footer class="bg-blue-950 py-4 mt-4 text-white text-center text-sm">
        <p>© Derechos de autor 2024. Universidad Nacional Santiago Antúnez de Mayolo - Todos los Derechos Reservados.
        </p>
        <p>RUC: 2016650239 | Av. Centenario Nro. 200</p>
    </footer>
    <div class="fixed bottom-4 right-4 z-50">
        <input type="checkbox" id="btn-mas">
        <div class="redes">
            <a href="#" class="fa fa-facebook bg-blue-900 text-white"></a>
            <a href="#" class="fa fa-youtube bg-blue-900 text-white"></a>
            <a href="#" class="fa fa-twitter bg-blue-900 text-white"></a>
            <a href="#" class="fa fa-pinterest bg-blue-900 text-white"></a>
        </div>
        <div class="btn-mas">
            <label for="btn-mas" class="fa fa-envelope bg-gray-600 text-white"></label>
        </div>
    </div>
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/collapse.js"></script>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</body>
</html>
