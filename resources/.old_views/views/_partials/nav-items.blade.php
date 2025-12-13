<div class="flex flex-col px-3 mt-4 space-y-6 lg:mt-0 lg:px-3 lg:items-center lg:space-y-0 lg:space-x-6 lg:flex-row">
    <div class="flex flex-row space-x-4 mt-0 items-center">
        <button x-data="ToggleDark()" x-cloak x-init="created()" title="Dark Mode" @click.prevent="toggle()"
                class="ml-2 dark:text-white text-gray-700 focus:outline-none" :class="{'text-white': mode == 'dark'}">
            <svg fill="none" stroke="currentColor" class="fill-current h-8 lg:h-6"
                stroke-linecap="round" stroke-linejoin="round" :class="{'hidden': mode == 'dark'}" stroke-width="2"
                viewBox="0 0 24 24">
                <path d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
            </svg>
            <svg fill="none" stroke="currentColor" class="fill-current h-8 lg:h-6"
                stroke-linecap="round" stroke-linejoin="round" :class="{'hidden': mode == 'light'}" stroke-width="2"
                viewBox="0 0 24 24">
                <path
                    d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z">
                </path>
            </svg>
        </button>
        <a title="Github" href="{{ config('site.github') }}" target="_blank" rel="noopener"
            class="transition text-gray-400 hover:text-black dark:text-white">
            <x-i.github class="h-5 w-5"></x-i.github>
        </a>
        @if (Route::has('auth.zaimea.redirect'))
            <nav class="flex items-center justify-end gap-4">
                @auth
                    <span class="text-sm text-gray-700 dark:text-gray-400">
                        {{ auth()->user()->name }}
                    </span>
                    <form method="POST" action="{{ route('auth.zaimea.logout') }}">
                        @csrf
                        <button type="submit" class="select-none font-medium tracking-tight flex gap-2 items-center justify-center whitespace-nowrap cursor-pointer bg-zinc-800 text-zinc-50 shadow-xs hover:bg-zinc-800/80 focus-visible:outline focus-visible:outline-offset-2 focus-visible:outline-zinc-600 px-2 py-1 text-[13px] md:px-2.5 md:py-1.5 md:text-sm rounded-sm">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('auth.zaimea.redirect') }}">
                        <button type="submit" class="select-none font-medium tracking-tight flex gap-2 items-center justify-center whitespace-nowrap cursor-pointer bg-zinc-800 text-zinc-50 shadow-xs hover:bg-zinc-800/80 focus-visible:outline focus-visible:outline-offset-2 focus-visible:outline-zinc-600 px-2 py-1 text-[13px] md:px-2.5 md:py-1.5 md:text-sm rounded-sm">
                            Log in
                        </button>
                    </a>
                @endauth
            </nav>
        @endif
    </div>
</div>
