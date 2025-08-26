<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="lastname" :value="__('Lastname')" />
            <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus autocomplete="lastname" />
            <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="date_of_birth" :value="__('Date of Birth')" />
            <x-text-input id="date_of_birth" class="block mt-1 w-full" type="date" name="date_of_birth" :value="old('date_of_birth')" required autofocus autocomplete="date_of_birth" />
            <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="bank_acc" :value="__('Bank Account')" />
            <x-text-input id="bank_acc" class="block mt-1 w-full" type="text" name="bank_acc" :value="old('bank_acc')" required autofocus autocomplete="bank_acc" />
            <x-input-error :messages="$errors->get('bank_acc')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="discipline_id" :value="__('Choose Your Discipline')" />
            <select id="discipline_id" name="discipline_id" class="block mt-1 w-full" required>
                <option value="">-- Choose your Fit! --</option>
                @foreach($disciplines as $discipline)
                    <option value="{{ $discipline->id }}" {{ old('discipline_id') == $discipline->id ? 'selected' : '' }}>
                        {{ $discipline->name }}
                    </option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('discipline_id')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ ('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ ('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
