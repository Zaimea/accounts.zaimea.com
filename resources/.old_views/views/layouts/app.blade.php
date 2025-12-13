<x-app-layout layout="layout" :title="$title" :description="$description"
    class="bg-gray-300 dark:bg-gray-900 font-sans leading-normal text-gray-900 dark:text-gray-200"
    x-data="AppOffCanvasMenu()">
    <x-slot name="head">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        {{ $head ?? '' }}
    </x-slot>
    <div class="relative">
        @include('_partials.app-nav')
        {{ $slot }}
    </div>
    <x-slot name="footer">
        {{ $footer ?? '' }}
    </x-slot>
</x-app-layout>
