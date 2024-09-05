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

<body class="bg-gray-200 flex flex-col h-screen justify-between">
    <x-header />
    <main class="mb-auto">
        <x-back-image isComplete="0" />
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row">
                <div class="flex-none lg:w-1/3">
                    <div class="flex flex-col">
                        <x-tab isActive="0" title="Numeral 11 de la ley universitaria" link="{{ route('numerals') }}" />
                        <x-tab isActive="0" title="Indicadores-CBC" link="{{ route('indicador_cbc') }}" />
                        @foreach ($informations as $info)
                            <x-tab isActive="0" title="{{ $info->name }}" link="{{ route('information', $info) }}" />
                        @endforeach
                        @foreach ($documents as $doc)
                            <x-tab isActive="{{ Request::is('documentos/'.$doc->id) }}" title="{{ $doc->name }}" link="{{ route('document', $doc) }}" />
                        @endforeach
                    </div>
                </div>
                <div class="flex-1 lg:w-2/3 bg-white p-2 m-1 border-l-4 border-blue-950 rounded-md">
                    <h2 class="uppercase text-blue-950 font-bold text-lg">{{$document->name}}</h2>
                    <p class="mb-4 text-blue-950">{{$document->description}}</p>
                    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
                        @foreach ($document->document_details as $document_detail)
                            <a href="{{Storage::url($document_detail->file)}}" target="_blank" class="w-full rounded-md bg-blue-950 p-2 text-center align-middle font-sans uppercase text-white transition-transform transform hover:scale-105">
                                {{ $document_detail->name }}
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>

</html>
