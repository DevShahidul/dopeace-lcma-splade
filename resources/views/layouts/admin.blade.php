<div class="min-h-screen bg-gray-100">
    @include('layouts.admin-navigation')

    <div class="flex space-x-4">
        <sidebar />

        <!-- Page Content -->
        <main class="flex-1 pr-4">
            <div class="content-wrap">
                {{ $slot }}
            </div>
        </main>
    </div>
</div>
