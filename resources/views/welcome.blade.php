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
        <x-back-image isComplete="1" />
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <section class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-2">
                
                <x-card title="Numeral 11 de la ley universitaria"
                    description='Una descripción de la ley universitaria' link="{{route('numerals')}}" />
                <x-card title="Indicador-CBC" description='Una descripción del inidicador CBC' link="{{route('indicador_cbc')}}" />
                @foreach ($informations as $information)
                    <x-card title="{{$information->name}}" description='{{$information->description}}' link="{{route('information', $information)}}"/>
                @endforeach
                @foreach ($documents as $document)
                    <x-card title="{{$document->name}}" description='{{$document->description}}' link="{{route('document', $document)}}"/>
                @endforeach
            </section>
        </div>
    </main>
    <x-footer />
    <x-social-networks />
    <script src="{{asset('js/scripts.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>

</html>
