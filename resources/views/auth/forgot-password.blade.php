<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Esqueçeu a sua senha? sem problemas. 
               Basta nos informar seu endereço de e-mail e nós 
               enviaremos por e-mail um link de redefinição de senha que permitirá que você 
               para escolha uma nova senha.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Enviar Link Redefinição de senha') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
