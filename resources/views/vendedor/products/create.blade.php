<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="container mx-auto mt-4">
            <h2 class="text-2xl font-bold">Agregar Producto</h2>
            <form method="POST" action="{{ route('vendedor.products.store') }}" class="mt-4">
                @csrf

                <div class="mb-4">
                    <x-label for="name" value="{{ __('Nombre') }}" />
                    <x-input id="name" type="text" name="name" class="block mt-1 w-full border border-red-600" required />
                </div>

                <div class="mb-4">
                    <x-label for="description" value="{{ __('Descripción') }}" />
                    <textarea id="description" name="description" class="block mt-1 w-full border border-red-600" required></textarea>
                </div>

                <div class="mb-4">
                    <x-label for="price" value="{{ __('Precio') }}" />
                    <x-input id="price" type="number" name="price" step="0.01" class="block mt-1 w-full border border-red-600" required />
                </div>

                <x-button class="mt-4 bg-red-600 hover:bg-red-500">
                    {{ __('Agregar Producto') }}
                </x-button>
            </form>

            <!-- Botón para volver al Dashboard -->
            <div class="mt-6">
                <a href="{{ route('vendedor.dashboard') }}" class="bg-blue-400 text-white px-4 py-2 rounded hover:bg-red-500">
                    Volver al Dashboard
                </a>
            </div>
        </div>
    </x-authentication-card>
</x-guest-layout>
