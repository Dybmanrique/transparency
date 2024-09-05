<header class="text-white bg-blue-950">
    <a href="{{ route('index') }}">
        <div class="flex items-center py-4">
            <div class="text-right w-1/3">
                <img src="{{ asset('img/logo_unasam.png') }}" alt="Descripción" class="w-20 inline-block">
            </div>
            <div class="flex-grow ml-4 w-2/3">
                <h1 class="font-bold text-2xl md:text-4xl">PORTAL DE TRANSPARENCIA</h1>
                <p class="sm:block hidden text-xl">UNIVERSIDAD NACIONAL SANTIAGO ANTÚNEZ DE MAYOLO</p>
                <p class="sm:hidden block text-xl">UNASAM</p>
            </div>
        </div>
    </a>
</header>
<nav class="sm:block hidden bg-gray-900 text-white text-right sticky top-0 z-10">
    <ul class="m-0 px-3">
        <li class="inline-block px-4 py-2 hover:bg-blue-950 transition-transform transform hover:scale-110 rounded m-0">
            <a target="_blank" href="http://campus.unasam.edu.pe">Campus Virtual</a></li>
        <li class="inline-block px-4 py-2 hover:bg-blue-950 transition-transform transform hover:scale-110 rounded m-0">
            <a target="_blank" href="https://sga.unasam.edu.pe">Sistema de Gestión Academica</a></li>
        <li class="inline-block px-4 py-2 hover:bg-blue-950 transition-transform transform hover:scale-110 rounded m-0">
            <a target="_blank" href="https://www.office.com/">Office 365</a></li>
        <li class="inline-block px-4 py-2 hover:bg-blue-950 transition-transform transform hover:scale-110 rounded m-0">
            <a target="_blank" href="https://www.gob.pe/institucion/unasam/contacto-y-numeros-de-emergencias">Directorio
                Telefónico</a></li>
    </ul>
</nav>
<nav class="sm:hidden relative px-2 py-2">
    <button data-ripple-light="true" data-collapse-target="collapse"
        class="select-none w-full rounded-md bg-gray-900 py-2 text-center align-middle font-sans uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
        OTROS ENLACES
    </button>
    <div data-collapse="collapse" class="h-0 w-full basis-full overflow-hidden transition-all duration-300 ease-in-out">
        <div class="relative mx-auto my-4 flex flex-col rounded-md bg-white bg-clip-border text-gray-700 shadow-md">
            <div class="flex flex-col">
                <span class="inline-block px-4 py-2 hover:bg-blue-950 hover:text-white rounded m-0"><a target="_blank"
                        href="http://campus.unasam.edu.pe">Campus Virtual</a></span>
                <span class="inline-block px-4 py-2 hover:bg-blue-950 hover:text-white rounded m-0"><a target="_blank"
                        href="https://sga.unasam.edu.pe">Sistema de Gestión Academica</a></span>
                <span class="inline-block px-4 py-2 hover:bg-blue-950 hover:text-white rounded m-0"><a target="_blank"
                        href="https://www.office.com/">Office 365</a></span>
                <span class="inline-block px-4 py-2 hover:bg-blue-950 hover:text-white rounded m-0"><a target="_blank"
                        href="https://www.gob.pe/institucion/unasam/contacto-y-numeros-de-emergencias">Directorio
                        Telefónico</a></span>
            </div>
        </div>
    </div>
</nav>
