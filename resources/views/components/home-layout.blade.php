<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>XtertyArch</title>
    <meta name="title" content="XtertyArch">
    <link rel="stylesheet" href="{{ mix('css/app.css') . '?id=' . Str::random(16) }}" />

    <link rel="shortcut icon" href="favicon.svg" type="image/svg+xml">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') . '?id=' . Str::random(16) }}"/>

    <link rel="preload" as="image" href="{{ asset('assets/images/hero-bg.jpg') }}">
    <link rel="preload" as="image" href="{{ asset('assets/images/hero-slide-1.jpg') }}">
    <link rel="preload" as="image" href="{{ asset('assets/images/hero-slide-2.jpg') }}">
    <link rel="preload" as="image" href="{{ asset('assets/images/hero-slide-3.jpg') }}">

</head>

<body>
    {{-- Header --}}
    <x-home-header></x-home-header>
    <main>
        <article>
            <x-home-hero></x-home-hero>
            <x-home-service></x-home-service>
            <x-home-about></x-home-about>
            <x-home-feature></x-home-feature>
            <x-home-stats></x-home-stats>
            <x-home-project></x-home-project>
        <x-home-cta></x-home-cta>
        </article>
    </main>

    {{-- Footer --}}
    <x-home-footer></x-home-footer>

    <script src="assets/js/script.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
