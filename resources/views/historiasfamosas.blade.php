<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Historias Famosas</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            color: #f0f0f0;
            background: 
                linear-gradient(to bottom, rgba(0, 0, 0, 0.9), rgba(10, 10, 10, 0.95)), 
                url('{{ asset('images/fondo_neblina.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            background-blend-mode: overlay;
            overflow-x: hidden;
        }

        .fondo-niebla {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            background: url("{{ asset('images/images.jpg') }}") repeat;
            animation: moverNiebla 60s linear infinite;
            opacity: 0.25;
            z-index: 0;
        }

        @keyframes moverNiebla {
            0% { background-position: 0 0; }
            100% { background-position: 1000px 0; }
        }

        nav {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #111111e6;
            backdrop-filter: blur(6px);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            box-shadow: 0 2px 20px rgba(0,0,0,0.6);
            z-index: 1000;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logo img {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            animation: flotar 3s ease-in-out infinite;
        }

        @keyframes flotar {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-6px); }
        }

        .logo span {
            font-size: 1.7rem;
            font-weight: 700;
            color: #ffca28;
        }

        .nav-links a {
            margin-left: 1.5rem;
            text-decoration: none;
            color: #ccc;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #ffca28;
        }

        .header-space {
            height: 90px;
        }

        .contenido {
            position: relative;
            z-index: 1;
            max-width: 1300px;
            padding: 2rem;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2.5rem;
        }

        .historia {
            background: linear-gradient(145deg, #1a1a1a, #232323);
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(255, 202, 40, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .historia:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(255, 202, 40, 0.2);
        }

        .historia img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-bottom: 2px solid #333;
        }

        .historia h2 {
            color: #ffca28;
            margin: 1rem 1rem 0.5rem;
            font-size: 1.4rem;
        }

        .historia p {
            margin: 0 1rem 1.5rem;
            line-height: 1.6;
            color: #d0d0d0;
            font-size: 1rem;
        }

        .volver {
            display: block;
            text-align: center;
            margin: 3rem auto 5rem;
            padding: 0.9rem 2.5rem;
            background: linear-gradient(to right, #5c6bc0, #7986cb);
            color: white;
            border-radius: 50px;
            text-decoration: none;
            font-weight: bold;
            font-size: 1rem;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .volver:hover {
            transform: scale(1.05);
            background: linear-gradient(to right, #7986cb, #5c6bc0);
        }

        footer {
            background-color: rgba(20, 0, 40, 0.85);
            padding: 2rem 1rem;
            text-align: center;
            box-shadow: 0 -4px 20px #7b1fa2;
            border-top: 2px solid #9c27b0;
            margin-top: 3rem;
            z-index: 1;
            position: relative;
        }

        footer p {
            color: #d1a1ff;
            font-size: 1.2rem;
            margin-bottom: 0.8rem;
            text-shadow: 1px 1px 5px #000;
        }

        footer a {
            color: #ba68c8;
            margin: 0 10px;
            font-size: 1.5rem;
            transition: color 0.3s;
        }

        footer a:hover {
            color: #e1bee7;
        }

        footer small {
            display: block;
            color: #aaa;
            margin-top: 1rem;
        }
    </style>
</head>
<body>


<div class="fondo-niebla"></div>

<nav>
    <div class="logo">
        <img src="{{ asset('images/68-683005_ghost-halloween-wall-sticker-halloween-imagenes-de-fantasmas.png') }}" alt="Logo">
        <span>Paranormal Grandes Historias</span>
    </div>
    <div class="nav-links">
        <a href="{{ url('/principal') }}">Inicio</a>
        <a href="{{ url('/historias') }}">Historias</a>
    </div>
</nav>

<div class="header-space"></div>

<div class="contenido">
    @foreach ($historias as $historia)
        <div class="historia animate__animated animate__fadeInUp">
            <img src="{{ asset('images/' . $historia->imagen) }}" alt="{{ $historia->titulo }}">
            <h2>{{ $historia->titulo }}</h2>
            <p>{{ $historia->contenido }}</p>
        </div>
    @endforeach
</div>

<footer>
    <p>Gracias por compartir lo inexplicable...</p>
    <div>
        <a href="#"><i class="fab fa-instagram" title="Instagram"></i></a>
        <a href="#"><i class="fab fa-tiktok" title="TikTok"></i></a>
        <a href="#"><i class="fab fa-youtube" title="YouTube"></i></a>
    </div>
    <small>&copy; 2025 Historias Paranormales. Todos los derechos reservados.</small>
</footer>

</body>
</html>
