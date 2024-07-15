<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transparencia UNASAM</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-200">
    <x-header />
    <main>
        <section class="hero">
            <img src="{{ asset('img/university-campus.jpg') }}" alt="Campus Universitario"
                class="w-full object-cover block mb-4">
            <div class="hero-text p-5 md:p-10">
                <h1 class="font-bold text-xl md:text-4xl">TRANSPARENCIA UNASAM</h1>
                <p class="uppercase text-sm md:text-xl">Una nueva Universidad para el Desarrollo</p>
            </div>
        </section>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <section class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-2">
                <x-card title="Numeral 11 de la ley universitaria"
                    description='Una descripción de la ley universitaria' />
                <x-card title="Indicador-CBC" description='Una descripción del inidicador CBC' />
                @foreach ($informations as $information)
                    <x-card title="{{$information->name}}" description='{{$information->description}}' />
                @endforeach
                @foreach ($documents as $document)
                    <x-card title="{{$document->name}}" description='{{$document->description}}' />
                @endforeach
            </section>
        </div>
    </main>
    <x-footer />
    <x-social-networks />
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/collapse.js"></script>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</body>

</html>
