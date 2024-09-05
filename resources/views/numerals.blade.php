@extends('layouts.app')

@section('content')
    <x-back-image isComplete="0" />
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row">
            <div class="flex-none lg:w-1/3">
                <div class="flex flex-col">
                    <x-tab isActive="1" title="Numeral 11 de la ley universitaria" link="{{ route('numerals') }}" />
                    <x-tab isActive="0" title="Indicadores-CBC" link="{{ route('indicador_cbc') }}" />
                    @foreach ($informations as $info)
                        <x-tab isActive="0" title="{{ $info->name }}" link="{{ route('information', $info) }}" />
                    @endforeach
                    @foreach ($documents as $doc)
                        <x-tab isActive="0" title="{{ $doc->name }}" link="{{ route('document', $doc) }}" />
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
                        <div class="relative mx-auto flex flex-col rounded-md bg-gray-200 p-2 bg-clip-border text-blue-950">
                            <h3 class="font-bold uppercase">{{ $numeral->description }}</h3>
                            <hr class="border-blue-950 my-1">
                            <div class="flex flex-col">
                                @foreach ($numeral->regulations as $regulation)
                                    <ul class="ms-5 list-disc">
                                        @if ($regulation->is_active)
                                            <li><a href="{{ $regulation->link }}" target="_blank"
                                                    class="w-full rounded-md my-1 hover:underline text-left font-sans">
                                                    {{ $regulation->description }}
                                                </a></li>
                                        @endif
                                    </ul>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
