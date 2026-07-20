<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMEP SENA</title>
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    @vite('resources/css/app.css')
    @fonts
    <style>
        .bg-layer {
            position: fixed;
            inset: 0;
            background-size: cover;
            background-position: center;
            z-index: -1;
            opacity: 0;
        }
        .bg-layer:nth-child(1) {
            background-image: url('/fondo1.jpg');
            animation: layer1 24s infinite;
        }
        .bg-layer:nth-child(2) {
            background-image: url('/fondo2.jpg');
            animation: layer2 24s infinite;
        }
        .bg-layer:nth-child(3) {
            background-image: url('/fondo3.jpg');
            animation: layer3 24s infinite;
        }
        @keyframes layer1 {
            0%, 29.17% { opacity: 1; }
            33.33%, 95.83% { opacity: 0; }
            100% { opacity: 1; }
        }
        @keyframes layer2 {
            0%, 29.17% { opacity: 0; }
            33.33%, 62.5% { opacity: 1; }
            66.67%, 100% { opacity: 0; }
        }
        @keyframes layer3 {
            0%, 62.5% { opacity: 0; }
            66.67%, 95.83% { opacity: 1; }
            100% { opacity: 0; }
        }
    </style>
</head>
<body class="m-0 p-0 h-screen w-screen flex justify-center items-center">
    <div class="bg-layer"></div>
    <div class="bg-layer"></div>
    <div class="bg-layer"></div>
    @yield('content')
</body>
</html>
