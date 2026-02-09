<x-guest-layout>
    @php
        $fields = [
            // For Name input
            [
                'label' => 'Name',
                'id' => 'name',
                'type' => 'text',
                'name' => 'name',
                'autocomplete' => 'name',
            ],
            // For Username input
            [
                'label' => 'Username',
                'id' => 'username',
                'type' => 'text',
                'name' => 'username',
                'autocomplete' => 'username',
            ],
            // For Email input
            [
                'label' => 'Email',
                'id' => 'email',
                'type' => 'email',
                'name' => 'email',
                'autocomplete' => 'email',
            ],
            // For Password input
            [
                'label' => 'Password',
                'id' => 'password',
                'type' => 'password',
                'name' => 'password',
                'autocomplete' => 'new-password',
            ],
            // For Password Confirmation input
            [
                'label' => 'Confirm Password',
                'id' => 'password_confirmation',
                'type' => 'password',
                'name' => 'password_confirmation',
                'autocomplete' => 'new-password',
            ],
        ]
    @endphp
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="flex flex-col gap-4">
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
            @foreach ($fields as $field)
                <x-form-field :label="$field['label']" :id="$field['id']" :type="$field['type']" :name="$field['name']"
                    :autocomplete="$field['autocomplete']" />
            @endforeach
        </div>

        <div class="flex flex-col items-center justify-end mt-8 gap-3">
            <x-primary-button class="justify-center w-full">
                {{ __('Register') }}
            </x-primary-button>
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
        </div>
    </form>
</x-guest-layout>