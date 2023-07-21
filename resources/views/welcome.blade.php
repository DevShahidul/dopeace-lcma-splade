<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="p-12 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="w-64 flex justify-center items-center mx-auto bg-white dark:bg-gray-800">
                <!-- <img src="{{asset('assets/Do-peace-logo.svg')}}" alt="" /> -->
                <x-main-logo class="w-56" />
            </div>
            <h2 class="text-lg xl:text-2xl xl:leading-snug max-w-xl mx-auto text-center mt-6 font-semibold text-gray-700 dark:text-gray-200">Welcome to DoPeace Learning Center Management Application</h2>
            <div class="mt-6 flex justify-center">
                <x-primary-button-link href="{{ route('login') }}" class="px-10 py-4 capitalize">
                    {{ __('Log in your dashboard') }}
                </x-primary-button-link>
            </div>
        </div>
    </div>
</div>