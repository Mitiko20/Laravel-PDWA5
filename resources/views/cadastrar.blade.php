<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="/cadastrar" method="post">
                        @csrf <!-- token de formulario -->
                        <!--Marca-->
                        <div>
                            <x-input-label for="marca" :value="__('Marca')" />
                            <x-text-input id="marca" class="block mt-1 w-full" type="text" name="marca" :value="old('marca')" maxlenght=50 required autofocus autocomplete="marca" />
                            <x-input-error :messages="$errors->get('marca')" class="mt-2" />
                        </div>
                        
                        <!--Modelo-->
                        <div>
                            <x-input-label for="modelo" :value="__('Modelo')" />
                            <x-text-input id="modelo" class="block mt-1 w-full" type="text" name="modelo" :value="old('modelo')" maxlenght=50 required autofocus autocomplete="modelo" />
                            <x-input-error :messages="$errors->get('modelo')" class="mt-2" />
                        </div>

                        <!--Cor-->
                        <div>
                            <x-input-label for="cor" :value="__('Cor')" />
                            <x-text-input id="cor" class="block mt-1 w-full" type="text" name="cor" :value="old('cor')" maxlenght=20 required autofocus autocomplete="cor" />
                            <x-input-error :messages="$errors->get('cor')" class="mt-2" />
                        </div>

                        <!--Memoria Ram-->
                        <div>
                            <x-input-label for="memoriaRam" :value="__('Memória Ram')" />
                            <x-text-input id="memoriaRam" class="block mt-1 w-full" type="number" name="memoriaRam" :value="old('memoriaRam')" required autofocus autocomplete="memoriaRam" />
                            <x-input-error :messages="$errors->get('memoriaRam')" class="mt-2" />
                        </div>

                        <!--Sistema-->
                        <div>
                            <x-input-label for="sistema" :value="__('Sistema')" />
                            <x-text-input id="sistema" class="block mt-1 w-full" type="text" name="sistema" :value="old('sistema')" maxlenght=50 required autofocus autocomplete="sistema" />
                            <x-input-error :messages="$errors->get('sistema')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Cadastrar') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
