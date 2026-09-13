<x-guest-layout>

    {{-- Session Status --}}
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">

        @csrf

        {{-- Email Address --}}
        <div>
            <x-input-label
                for="email"
                :value="__('Email')"
                class="text-[#3a5a32]"
            />
<x-text-input
    id="email"
    class="block mt-1 w-full"
    type="email"
    name="email"
    :value="old('email')"
    required
    autofocus
    autocomplete="username"
/>

            <x-input-error
                :messages="$errors->get('email')"
                class="mt-2"
            />
        </div>

        {{-- Password --}}
        <div class="mt-4">

            <x-input-label
                for="password"
                :value="__('Password')"
                class="text-[#3a5a32]"
            />

         <x-text-input
    id="password"
    class="block mt-1 w-full"
    type="password"
    name="password"
    required
    autocomplete="current-password"
/>

            <x-input-error
                :messages="$errors->get('password')"
                class="mt-2"
            />

        </div>

        {{-- Remember Me --}}
        <div class="mt-4 block">

            <label for="remember_me" class="inline-flex items-center">

                <input
                    id="remember_me"
                    type="checkbox"
                    class="rounded border-gray-300 text-[#3a5a32] shadow-sm focus:ring-[#3a5a32]"
                    name="remember"
                >

                <span class="ms-2 text-sm text-[#666666]">
                    {{ __('Remember me') }}
                </span>

            </label>

        </div>

        <div class="mt-5 flex items-center justify-end">

            @if (Route::has('password.request'))

                <a
                    class="rounded-md text-sm text-[#666666] underline hover:text-[#3a5a32] focus:outline-none focus:ring-2 focus:ring-[#3a5a32]"
                    href="{{ route('password.request') }}"
                >
                    {{ __('Forgot your password?') }}
                </a>

            @endif

            <x-primary-button
                class="ms-3 rounded-md bg-[#3a5a32] px-4 py-2 text-white hover:opacity-90 focus:bg-[#323c34] active:bg-[#323c34]"
            >
                {{ __('Log in') }}
            </x-primary-button>

        </div>

    </form>

</x-guest-layout>
