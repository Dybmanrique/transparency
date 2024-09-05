@extends('layouts.app')

@section('content')
    <x-back-image isComplete="1" />
    
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <section class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-2">

            <x-card title="Numeral 11 de la ley universitaria" description='Una descripción de la ley universitaria'
                link="{{ route('numerals') }}" />
            <x-card title="Indicador-CBC" description='Una descripción del inidicador CBC'
                link="{{ route('indicador_cbc') }}" />
            @foreach ($informations as $information)
                <x-card title="{{ $information->name }}" description='{{ $information->description }}'
                    link="{{ route('information', $information) }}" />
            @endforeach
            @foreach ($documents as $document)
                <x-card title="{{ $document->name }}" description='{{ $document->description }}'
                    link="{{ route('document', $document) }}" />
            @endforeach
        </section>
    </div>
@endsection

@push('scripts')
    
@endpush
