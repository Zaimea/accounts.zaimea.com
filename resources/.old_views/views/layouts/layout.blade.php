<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ $title = empty($title) ? config('site.title') : "{$title} | ".config('site.title') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $attributes->get('description') ?? config('site.description') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Favicon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#ff2d20">
    <link rel="shortcut icon" href="/img/favicon/favicon.ico">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:creator" content="@zaimeacom">
    <meta name="twitter:image:alt" content="zaimea">
    <meta name="msapplication-TileColor" content="#ff2d20">
    <meta name="msapplication-config" content="/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#09090b">
    <meta name="color-scheme" content="light">
    <meta property="og:site_name" content="{{ config('site.title') }}" />
    <meta property="og:title" content="{{ $title }}" />
    <meta property="og:description" content="{{ $description ?? config('site.description') }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="https://zaimea.com/assets/img/logo.png" />
    <meta property="og:type" content="website" />

    {{ $head ?? '' }}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
    @stack('styles')
    @livewireStyles
</head>

<body {{ $attributes->except(['title', 'description', 'extras']) }}>

    {{ $slot }}

    {{ $footer ?? '' }}

    @stack('scripts')
    @stack('modals')

    @livewireScripts

    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
    <script>
        var notyf = new Notyf();
        Livewire.on('successAlert', alertMessage => {
            notyf.success(alertMessage);
        });
        Livewire.on('errorAlert', alertMessage => {
            notyf.error(alertMessage);
        });
    </script>
</body>
</html>
