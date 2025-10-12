<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mi Página Personal - Laravel</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Figtree', sans-serif;
            background-color: #f3f4f6; /* Un gris claro para el fondo */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            color: #333;
        }
        .container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: center;
            max-width: 500px;
            width: 90%;
        }
        h1 {
            color: #4f46e5; /* Un morado vibrante */
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.2rem;
            color: #555;
            margin-bottom: 30px;
        }
        .profile-image {
            width: 180px; /* Tamaño del gatito */
            height: 180px;
            object-fit: cover; /* Para que la imagen se vea bien si no es cuadrada */
            border-radius: 50%; /* Para que la imagen sea redonda */
            border: 4px solid #a78bfa; /* Borde morado claro */
            margin-bottom: 25px;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{ asset('images/gatito1.jpg') }}" alt="Foto de un lindo gatito" class="profile-image">
        <h1>SHIRLEY GEOVANA LIMA MAMANI</h1>
        <p>¡Bienvenido/a a mi página personal en Laravel! Estoy aprendiendo y construyendo cosas geniales.</p>
        <p>Espero que te guste este pequeño gatito tanto como a mí.</p>
    </div>
</body>
</html>
