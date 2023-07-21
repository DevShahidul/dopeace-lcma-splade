<x-guest-layout>
<x-auth-session-status class="mb-4" :status="session('status')" />
    <x-slot:image>
        <img
        aria-hidden="true"
        class="object-cover w-full h-full dark:hidden"
        src="/assets/login-office.jpeg"
        alt="Office"
        />
        <img
        aria-hidden="true"
        class="hidden object-cover w-full h-full dark:block"
        src="/assets/login-office-dark.jpeg"
        alt="Office"
        />
    </x-slot:image>

    <div class="w-full">
        <x-splade-form action="{{ route('login') }}" class="space-y-4">
            <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200" >
                {{ __('Login') }}
            </h1>
            <!-- Email Address -->
            <x-splade-input id="email" type="email" name="email" :label="__('Email')" required autofocus class="text-sm" />
            <x-splade-input id="password" type="password" name="password" :label="__('Password')" required autocomplete="current-password" class="text-sm" />
            <x-splade-checkbox id="remember_me" name="remember" :label="__('Remember me')" class="text-sm" />

            <x-splade-submit class="w-full" :label="__('Log in')" />

            <hr class="my-6" />
            @if (Route::has('password.request'))
                <p>
                    <Link class="text-sm font-medium text-purple-600 dark:text-gray-400 hover:underline dark:hover:text-gray-100 rounded-md focus:outline-none focus:shadow-none" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </Link>
                </p>
            @endif
        </x-splade-form>
    </div>
</x-guest-layout>