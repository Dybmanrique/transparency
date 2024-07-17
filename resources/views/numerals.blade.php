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
                        @foreach ($informations as $information)
                            <x-tab title="{{$information->name}}" link="{{route('information',$information)}}"/>
                        @endforeach
                        @foreach ($documents as $document)
                            <x-tab title="{{$document->name}}" link="#"/>
                        @endforeach
                    </div>
                </div>
                <div class="flex-1 lg:w-2/3 bg-white p-2 m-1 border-l-4 border-blue-950 rounded-md">
                    <h2 class="uppercase text-blue-950 mb-4 font-bold text-lg">Numeral 11 de la ley universitaria</h2>
                    @foreach ($numerals as $numeral)
                        <button data-ripple-light="true" data-collapse-target="collapse{{ $numeral->id }}"
                            class="w-full rounded-md bg-blue-950 p-2 mt-0 text-center align-middle font-sans uppercase text-white focus:font-bold">
                            {{ $numeral->name }}
                        </button>
                        <div data-collapse="collapse{{ $numeral->id }}"
                            class="block h-0 my-1 w-full basis-full overflow-hidden transition-all duration-300 ease-in-out">
                            <div
                                class="relative mx-auto flex flex-col rounded-md bg-gray-200 p-2 bg-clip-border text-blue-950">
                                <h3 class="font-bold uppercase">{{$numeral->description}}</h3>
                                <hr class="border-blue-950 my-1">
                                <div class="flex flex-col">
                                    @foreach ($numeral->regulations as $regulation)
                                        @if ($regulation->is_active)
                                            <span class="text-blue-950 hover:underline my-1"><a target="_blank"
                                                    href="{{ $regulation->link }}">{{ $regulation->description }}</a></span>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
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
