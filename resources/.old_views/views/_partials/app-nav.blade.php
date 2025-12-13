<nav class="sticky top-0 w-[calc(100%)] flex items-center my-4 z-100 shadow-white/25 dark:shadow-white/10 h-16 h-(--popover-top-offset) backdrop-blur-md" style="--popover-top-offset: 5.5rem;">
    <div class="max-w-5xl px-6 lg:px-1 xl:px-2 container flex items-center mx-auto space-x-3" >
        <div class="flex items-center lg:hidden">
            <button aria-label="Toggle Documentation Navigation" @click.prevent="toggle()"
                class="text-gray-700 dark:text-gray-200 focus:text-gray-600 dark:focus:text-gray-400 focus:outline-none">
                <x-i.menu class="md:size-8 size-6 text-gray-700 dark:text-white opacity-50"></x-i.menu>
            </button>
        </div>

        <div class="flex items-center flex-none">
            <a href="/" class="flex items-center justify-center">
                <img class="h-8 dark:hidden flex" loading="lazy" src="{{ asset('assets/img/logo-dark.svg') }}" alt="{{ config('app.name') }} logo" />
                <img class="h-8 hidden dark:flex" loading="lazy" src="{{ asset('assets/img/logo.svg') }}" alt="{{ config('app.name') }} logo" />
            </a>
        </div>

        <div class="flex items-center justify-end space-x-1 w-full text-right">
            <div class="hidden lg:flex pt-1">
                @include('_partials.nav-items')
            </div>
        </div>
    </div>
</nav>
