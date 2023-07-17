<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $metaTitle }}</title>

    <link rel="storage icon" href="/storage/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/storage/favicon-32x32.svg" sizes="32x32">
    <link rel="apple-touch-icon" href="/storage/favicon-180x180.svg" sizes="180x180">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@6/swiper-bundle.min.css" />

    @vite(['resources/css/index.css', 'resources/js/index.js'])
</head>

<body>
    @if ($hasHeader)
        <x-header />
    @endif

    @yield('page')

    @if ($hasFooter)
        <x-footer />
    @endif
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    window.jQuery || document.write('<script src="/jquery/3.6.4.js"><\/script>')
</script>

</html>
