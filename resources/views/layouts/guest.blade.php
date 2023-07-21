<div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
    @if (isset($image))
    <div
        class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800"
    >
        <div class="flex flex-col overflow-y-auto md:flex-row">
            <div class="h-32 md:h-auto md:w-1/2">
                {{ $image }}
            </div>
            <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                {{ $slot }}
            </div>
        </div>
    </div>
    @else
    <div class="flex-1 h-full p-10 max-w-md mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
        {{ $slot }}
    </div>
    @endif
</div>