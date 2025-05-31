<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio - Historias Paranormales</title>

   
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            height: 100%;
            font-family: 'Cormorant Garamond', serif;
        }

        body {
            background: url('{{ asset('images/flying-saucer-adobestock_88487610-(1)-2017.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            color: white;
        }

        .sidebar {
            height: 100vh;
            width: 230px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #0e0e1a;
            padding-top: 20px;
            z-index: 1000;
        }

        .sidebar h2 {
            text-align: center;
            color: red;
            margin-bottom: 20px;
        }

        .sidebar a {
            display: block;
            color: #fff;
            padding: 12px 20px;
            text-decoration: none;
            font-size: 16px;
        }

        .sidebar a:hover {
            background-color: #1c1c2e;
        }

        nav {
            background-color: black;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-left: 230px;
        }

        nav a {
            color: rgb(169, 167, 156);
            text-decoration: none;
            font-weight: bold;
            font-size: 1.1rem;
            margin: 0 1rem;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #00ffff;
        }

        .contenido {
            margin-left: 230px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 80px);
            text-align: center;
            padding: 2rem;
            background-color: rgba(0, 0, 0, 0.6);
        }

        h1 {
            font-size: 3rem;
            color: #ff2e2e;
            margin-bottom: 1rem;
        }

        p {
            font-size: 1.2rem;
            max-width: 800px;
            line-height: 1.6;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <h2>🦇 Echo con ❤️ para la comunidad </h2>
        <a href="/"><span>🏠</span> Iniciar sesión</a>
    </div>

    <nav>
        <a href="{{ url('/misterios-paranormales') }}">Historias de la Comunidad</a>
        <a href="{{ url('/leyendas') }}">Historias Famosas</a>
        <a href="{{ url('/investigaciones') }}">Lugares Extraños Famosos</a>
    </nav>

    <div class="contenido">
        <h1>Una página dedicada para los curiosos y los amantes de lo inexplicable</h1>
        <p>
            Te invitamos a relatarnos tus historias y ser parte de la comunidad.
        </p>
    </div>

</body>
</html>
