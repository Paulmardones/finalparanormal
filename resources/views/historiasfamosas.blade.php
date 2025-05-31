<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Historias Famosas</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
        body {
            background-color: #111;
            color: #f2f2f2;
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
        }

        
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #222;
            padding: 1rem 2rem;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.5);
        }

        nav .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        nav .logo img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: contain;
            animation: flotar 3s ease-in-out infinite;
            transition: transform 0.3s ease, filter 0.3s ease;
        }

        nav .logo img:hover {
            transform: scale(1.2);
            filter: brightness(1.4);
        }

        @keyframes flotar {
            0% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
            100% { transform: translateY(0); }
        }

        nav .logo span {
            color: #ffca28;
            font-weight: bold;
            font-size: 1.5rem;
        }

        nav .nav-links a {
            color: #ccc;
            text-decoration: none;
            margin-left: 1.5rem;
            transition: color 0.3s ease;
        }

        nav .nav-links a:hover {
            color: #ffca28;
        }

        
        .header-space {
            height: 80px;
        }

        .contenido {
            padding: 2rem;
        }

        .historia {
            background-color: #1e1e1e;
            border-left: 5px solid #ffca28;
            margin-bottom: 2rem;
            padding: 1rem;
            border-radius: 8px;
        }

        .historia img {
            width: 100%;
            max-width: 600px;
            max-height: 300px;
            object-fit: cover;
            border-radius: 6px;
            margin-bottom: 0.5rem;
        }

        .volver {
            display: inline-block;
            margin-top: 2rem;
            padding: 0.6rem 1.2rem;
            background-color: #5c6bc0;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .volver:hover {
            background-color: #7986cb;
        }
    </style>
</head>
<body>

    <nav>
        <div class="logo">
            <img src="{{ asset('images/68-683005_ghost-halloween-wall-sticker-halloween-imagenes-de-fantasmas.png') }}" alt="Logo">
            <span>Paranormal Grandes Historias</span>
        </div>
        <div class="nav-links">
            <a href="{{ url('/') }}">Inicio</a>
            <a href="{{ url('/historiasfamosas') }}">Historias</a>
        </div>
    </nav>

    <div class="header-space"></div>

    <div class="contenido">
        <div class="historia animate__animated animate__fadeInUp">
            <img src="{{ asset('images/roswell-split-og.jpg') }}" 
                 alt="Incidente de Roswell" 
                 class="img-fluid rounded mx-auto d-block mb-4">
            <h2>El incidente de Roswell</h2>
            <p>En 1947, un supuesto OVNI se estrelló en Roswell, Nuevo México. El gobierno afirmó que era un globo meteorológico, pero testigos aseguran haber visto cuerpos extraterrestres.</p>
        </div>

        <a class="boton" href="{{ route('principal') }}"> Volver </a>

    </div>

</body>
</html>
