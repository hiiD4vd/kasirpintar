<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Role -->
        <div class="mt-4">
            <x-input-label for="peran" :value="__('Peran')" />
            <x-select id="peran" name="peran" :value="old('peran')" required>
                <option value="admin">Admin</option>
                <option value="kasir">Kasir</option>
            </x-select>
            
        </div>

        <!-- Alamat -->
        <div class="mt-4">
            <x-input-label for="alamat" :value="__('Alamat')" />
            <x-text-input id="alamat" class="block mt-1 w-full" type="text" name="alamat" :value="old('alamat')"
                required />
            <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
        </div>

        <!-- Telepon -->
        <div class="mt-4">
            <x-input-label for="telepon" :value="__('Telepon')" />
            <x-text-input id="telepon" class="block mt-1 w-full" type="text" name="telepon" :value="old('telepon')" />
            <x-input-error :messages="$errors->get('telepon')" class="mt-2" />
        </div>


        {{-- <!-- Role (Peran) -->
        <div class="mt-4">
            <x-label for="peran" :value="__('Peran')" />
            <select id="peran" name="peran" class="block mt-1 w-full" required>
                <option value="admin">Admin</option>
                <option value="kasir">Kasir</option>
            </select>
        </div>

        <!-- Telepon -->
        <div class="mt-4">
            <x-label for="telepon" :value="__('Telepon')" />
            <x-input id="telepon" class="block mt-1 w-full" type="text" name="telepon" :value="old('telepon')" />
        </div>

        <!-- Alamat -->
        <div class="mt-4">
            <x-label for="alamat" :value="__('Alamat')" />
            <x-input id="alamat" class="block mt-1 w-full" type="text" name="alamat" :value="old('alamat')" />
        </div> --}}

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>