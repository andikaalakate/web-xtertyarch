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
    <link href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') . '?id=' . Str::random(16) }}" />

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
            <x-home-team></x-home-team>
            <x-home-stats></x-home-stats>
            <x-home-project></x-home-project>
            <x-home-product></x-home-product>
            <x-home-cta></x-home-cta>
            <x-home-testimoni></x-home-testimoni>
        </article>
    </main>

    {{-- Footer --}}
    <x-home-footer></x-home-footer>

    <script src="assets/js/script.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script type="module">
        import KeenSlider from 'https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/+esm'

        const keenSlider = new KeenSlider(
            '#keen-slider', {
                loop: true,
                slides: {
                    origin: 'center',
                    perView: 1.25,
                    spacing: 16,
                },
                breakpoints: {
                    '(min-width: 1024px)': {
                        slides: {
                            origin: 'auto',
                            perView: 2.5,
                            spacing: 32,
                        },
                    },
                },
            },
            []
        )

        const keenSliderPrevious = document.getElementById('keen-slider-previous')
        const keenSliderNext = document.getElementById('keen-slider-next')

        keenSliderPrevious.addEventListener('click', () => keenSlider.prev())
        keenSliderNext.addEventListener('click', () => keenSlider.next())
    </script>

</body>

</html>
