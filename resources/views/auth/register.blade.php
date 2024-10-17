<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <div class="container">
            <h2 class=" text-2xl font-bold">Registro</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mt-4">
                    <x-label for="name" value="{{ __('Name') }}"/>
                    <x-input id="name" class="block mt-1 w-full border-[#f10707] focus:border-[#f10707] focus:ring-[#f10707]" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full border-[#f10707] focus:border-[#f10707] focus:ring-[#f10707]" type="email" name="email" :value="old('email')" required autocomplete="username" />
                </div>

                <div class="mt-4">
                    <x-label for="password" value="{{ __('Password') }}"  />
                    <x-input id="password" class="block mt-1 w-full border-[#f10707] focus:border-[#f10707] focus:ring-[#f10707]" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-label for="password_confirmation" value="{{ __('Confirm Password') }}"  />
                    <x-input id="password_confirmation" class="block mt-1 w-full border-[#f10707] focus:border-[#f10707] focus:ring-[#f10707]" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-label for="role" value="{{ __('Role') }}"  />
                    <select id="role" name="role" class="block mt-1 w-full border-[#f10707] focus:border-[#f10707] focus:ring-[#f10707]" required>
                        <option value="" disabled selected>Selecciona un rol</option>
                        <option value="vendedor">Vendedor</option>
                        <option value="comprador">Comprador</option>
                    </select>
                </div>

                <x-button class="mt-4 bg-[#f10707] hover:bg-red-800 focus:bg-red-800">
                    {{ __('Register') }}
                </x-button>
            </form>
        </div>
    </x-authentication-card>
</x-guest-layout>
