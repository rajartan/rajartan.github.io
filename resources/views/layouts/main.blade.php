<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rajartan</title>

    {{-- Icon --}}
    <link rel="shortcut icon" href="images/rajartan.png" type="image/x-icon">

    {{-- Tailwindcss --}}
    <link href="/css/app.css" rel="stylesheet">

    {{-- My Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    {{-- Fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

</head>
<body class="mb-80">

    @include('layouts.navbar')

    @yield('content')

    {{-- Tailwindcss --}}
    <script src="../path/to/flowbite/dist/flowbite.js"></script>

    {{-- Alternatif Tailwindcss --}}
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
</body>
</html>
