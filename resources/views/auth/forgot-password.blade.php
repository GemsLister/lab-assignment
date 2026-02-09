<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex flex-col items-center justify-end mt-8 gap-3">
            <x-primary-button class="justify-center w-full">
                {{ __('Email') }}
            </x-primary-button>
            <!-- Back to Login form -->
            <a href="{{ route('login') }}" class="w-full">
                <x-secondary-button class="justify-center w-full">
                    {{ __('Back') }}
                </x-secondary-button>
            </a>

        </div>
    </form>
</x-guest-layout>