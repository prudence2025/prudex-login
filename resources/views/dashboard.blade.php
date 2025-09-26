<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <!-- Card 1 -->
            <div class="relative flex items-center justify-center aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800">
                <div class="text-center">
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white">1,245</h2>
                    <p class="text-sm text-gray-600 dark:text-gray-300">Total Users</p>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="relative flex items-center justify-center aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800">
                <div class="text-center">
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white">328</h2>
                    <p class="text-sm text-gray-600 dark:text-gray-300">Active Orders</p>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="relative flex items-center justify-center aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800">
                <div class="text-center">
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white">87%</h2>
                    <p class="text-sm text-gray-600 dark:text-gray-300">Success Rate</p>
                </div>
            </div>
        </div>

        <!-- Large section -->
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800">
            <div class="flex h-full w-full items-center justify-center">
                <div class="text-center">
                    <h2 class="text-4xl font-bold text-gray-900 dark:text-white">₨ 2,345,600</h2>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">Total Revenue</p>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
