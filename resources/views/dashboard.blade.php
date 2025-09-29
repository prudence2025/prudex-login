<x-layouts.app :title="__('Dashboard')">
    {{-- This div will act as the container for your iframe. --}}
    {{-- We use h-full and w-full to make it fill the available space. --}}
    <div class="h-full w-full">
        {{-- We check if the dashboard URL is provided by the controller. --}}
        @if(isset($dashboardUrl) && !empty($dashboardUrl))
            {{-- The iframe will load the user-specific dashboard URL. --}}
            {{-- The classes ensure it fills its container without any borders. --}}
            <iframe src="{{ $dashboardUrl }}" class="h-full w-full border-0" title="User Dashboard"></iframe>
        @else
            {{-- It's good practice to show a message if the URL isn't set for the user. --}}
            <div class="flex h-full items-center justify-center rounded-xl border border-dashed border-neutral-300 bg-gray-50 dark:border-neutral-700 dark:bg-neutral-800">
                <div class="text-center">
                    <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Dashboard Not Configured</h2>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Please contact support to set up your dashboard URL.</p>
                </div>
            </div>
        @endif
    </div>
</x-layouts.app>