@extends('layouts.app')

@section('content')
    <x-back-image isComplete="0" />
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row">
            <div class="flex-none lg:w-1/3">
                <div class="flex flex-col">
                    <x-tab isActive="0" title="Numeral 11 de la ley universitaria" link="{{ route('numerals') }}" />
                    <x-tab isActive="0" title="Indicadores-CBC" link="{{ route('indicador_cbc') }}" />
                    @foreach ($informations as $info)
                        <x-tab isActive="{{ Request::is('informacion/' . $info->id) }}" title="{{ $info->name }}"
                            link="{{ route('information', $info) }}" />
                    @endforeach
                    @foreach ($documents as $doc)
                        <x-tab isActive="0" title="{{ $doc->name }}" link="{{ route('document', $doc) }}" />
                    @endforeach
                </div>
            </div>
            <div class="flex-1 lg:w-2/3 bg-white p-2 m-1 border-l-4 border-blue-950 rounded-md">
                <h2 class="uppercase text-blue-950 font-bold text-lg">{{ $information->name }}</h2>
                <p class="mb-4 text-blue-950">{{ $information->description }}</p>
                <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
                    @foreach ($information->information_details as $information_detail)
                        <a href="{{ $information_detail->link }}" target="_blank"
                            class="w-full rounded-md bg-blue-950 p-2 text-center align-middle font-sans uppercase text-white transition-transform transform hover:scale-105">
                            {{ $information_detail->name }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
