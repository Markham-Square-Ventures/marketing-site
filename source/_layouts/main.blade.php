<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}" class="scroll-smooth">
    <head>
       <x-seo/>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
        <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
    </head>
    <body class="text-gray-900 font-sans antialiased selection:bg-orange-500 selection:text-white">
        @yield('body')
    </body>
</html>
