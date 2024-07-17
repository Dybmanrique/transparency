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
        <x-back-image isComplete="0" />
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row">
                <div class="flex-none lg:w-1/3">
                    <div class="flex flex-col">
                        <x-tab title="Numeral 11 de la ley universitaria" link="{{route('numerals')}}"/>
                        <x-tab title="Indicadores-CBC" link="{{route('indicador_cbc')}}"/>
                        @foreach ($informations as $info)
                            <x-tab title="{{$info->name}}" link="{{route('information',$info)}}"/>
                        @endforeach
                        @foreach ($documents as $document)
                            <x-tab title="{{$document->name}}" link="#"/>
                        @endforeach
                    </div>
                </div>
                <div class="flex-1 lg:w-2/3 bg-white p-2 m-1 border-l-4 border-blue-950 rounded-md">
                    <h2 class="uppercase text-blue-950 font-bold text-lg">{{$information->name}}</h2>
                    <p class="mb-4 text-blue-950">{{$information->description}}</p>
                    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
                        @foreach ($information->information_details as $information_detail)
                            <a href="{{$information_detail->link}}" target="_blank" class="w-full rounded-md bg-blue-950 p-2 text-center align-middle font-sans uppercase text-white transition-transform transform hover:scale-105">
                                {{ $information_detail->name }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </main>
    <x-footer />
    <x-social-networks />
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</body>

</html>
