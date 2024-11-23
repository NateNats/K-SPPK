<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/heroicons@2.0.18/umd/heroicons.min.js"></script>
    <link rel="shortcut icon" href="{{ asset('img/logo/learnify-logo.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <title>SPPK</title>
    @vite('resources/css/app.css')
    <style>

      html {
        scroll-behavior: smooth;
      }
      .notify {
    position: fixed !important;
    top: 20px;
    right: 20px;
    z-index: 9999;
    }
    </style>
</head>

<body class="bg-white">
    @include('components.navbar')
        @yield('content')
</body>

</html>