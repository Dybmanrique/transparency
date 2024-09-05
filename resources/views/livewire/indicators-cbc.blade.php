<div>
    <div x-data="{ modelOpen: false }">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" wire:ignore>
            <div class="flex flex-col lg:flex-row">
                <div class="flex-none lg:w-1/3">
                    <div class="flex flex-col">
                        <x-tab title="Numeral 11 de la ley universitaria" link="{{ route('numerals') }}" />
                        <x-tab title="Indicadores-CBC" link="{{ route('indicador_cbc') }}" />
                        @foreach ($informations as $info)
                            <x-tab title="{{ $info->name }}" link="{{ route('information', $info) }}" />
                        @endforeach
                        @foreach ($documents as $doc)
                            <x-tab title="{{ $doc->name }}" link="{{ route('document', $doc) }}" />
                        @endforeach
                    </div>
                </div>
                <div class="flex-1 lg:w-2/3 bg-white p-2 m-1 border-l-4 border-blue-950 rounded-md">
                    <h2 class="uppercase text-blue-950 mb-4 font-bold text-lg">Indicadores de Condiciones Básicas de
                        Calidad
                    </h2>
                    @foreach ($conditions as $condition)
                        <button data-ripple-light="true" data-collapse-target="collapse{{ $condition->id }}"
                            class="w-full rounded-md bg-blue-950 p-2 mt-0 text-center align-middle font-sans uppercase text-white focus:font-bold">
                            {{ $condition->name }}
                        </button>
                        <div data-collapse="collapse{{ $condition->id }}"
                            class="block h-0 my-1 w-full basis-full overflow-hidden transition-all duration-300 ease-in-out">
                            <div
                                class="relative mx-auto flex flex-col rounded-md bg-gray-200 p-2 bg-clip-border text-blue-950">
                                <h3 class="font-bold uppercase">{{ $condition->description }}</h3>
                                <hr class="border-blue-950 my-1">
                                <div class="flex flex-col">
                                    @foreach ($condition->components as $component)
                                        @if ($component->is_active)
                                            <button type="button" @click="modelOpen =!modelOpen"
                                                wire:click="seleccionarComponente('{{ $component->id }}')"
                                                class="w-full rounded-md bg-gray-700 p-2 my-1 text-left align-middle font-sans text-white focus:font-bold">
                                                <span class="font-bold">{{ $component->name }}:</span>
                                                {{ $component->description }}
                                            </button>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog"
            aria-modal="true">

            <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                    x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                    class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"></div>

                <div x-cloak x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                    <div wire:loading class="rounded-md w-full mx-auto">
                        <div class="animate-pulse flex space-x-4">
                            <div class="flex-1 space-y-6 py-1">
                                <div class="h-6 w-40 bg-slate-700 rounded"></div>
                                <div class="h-3 w-56 bg-slate-700 rounded"></div>
                                <div class="space-y-3">
                                    <div class="h-4 w-96 bg-slate-700 rounded"></div>
                                    <div class="h-20 w-full bg-slate-700 rounded"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (!empty($componente_seleccionado))
                        <div wire:loading.remove>
                            <div class="flex items-center justify-between space-x-4">
                                <h1 class="text-xl text-gray-800 font-bold">{{ $componente_seleccionado->name }}
                                </h1>

                                <button @click="modelOpen = false"
                                    class="text-gray-600 focus:outline-none hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </button>
                            </div>

                            <p class="mt-2 text-md text-gray-600 ">
                                {{ $componente_seleccionado->description }}
                            </p>

                            <div class="mt-5 w-full flex flex-wrap">
                                <hr>
                                <h3 class="font-bold mb-2 text-gray-700">LISTA DE INDICADORES Y SUS MEDIOS DE VERIFICACIÓN</h3>
                                @foreach ($componente_seleccionado->indicators as $indicator)
                                    @if ($indicator->is_active == 1)
                                        <span
                                            class="w-full bg-blue-950 text-white rounded-b-none rounded-md p-2">{{ $indicator->description }}</span>
                                        <div class="w-full border mb-2 p-2 rounded-t-none rounded-md flex flex-wrap">
                                            <ul class="ms-5 list-disc">
                                                @foreach ($indicator->verification_resources as $verification_resource)
                                                    @if ($verification_resource->is_active == 1)
                                                        <li>
                                                            <a href="{{ $verification_resource->link }}"
                                                                target="_blank"
                                                                class="hover:underline my-1">{{ $verification_resource->description }}</a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>

                    @endif
                </div>
            </div>
        </div>

    </div>
</div>
