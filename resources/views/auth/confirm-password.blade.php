<x-guest-layout>

    <div class="w-full">
        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <x-splade-form action="{{ route('password.confirm') }}" class="space-y-4">
            <x-splade-input id="password" type="password" name="password" required autocomplete="current-password" :label="__('Password')" />

            <x-splade-submit :label="__('Confirm')" class="w-full" />
        </x-splade-form>
    </div>
</x-guest-layout>
