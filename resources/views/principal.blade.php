<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página Paranormal</title>


    <link href="https://fonts.googleapis.com/css2?family=Creepster&family=Cormorant+Garamond:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            font-family: 'Cormorant Garamond', serif;
            overflow-x: hidden;
        }

        body {
            background: url('{{ asset('images/flying-saucer-adobestock_88487610-(1)-2017.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }

        .toggle-btn {
            position: fixed;
            top: 8px;
            left: 10px;
            font-size: 1.2rem;
            color: #ff2e2e;
            background: rgba(0, 0, 0, 0.7);
            padding: 6px 10px;
            border: 2px solid #ff2e2e;
            border-radius: 50%;
            cursor: pointer;
            z-index: 2001;
            box-shadow: 0 0 10px #ff2e2e;
            transition: all 0.3s ease;
            backdrop-filter: blur(5px);
        }

        .toggle-btn:hover {
            background: rgba(255, 46, 46, 0.15);
            box-shadow: 0 0 20px #ff2e2e, 0 0 10px #fff inset;
            transform: scale(1.1) rotate(1deg);
        }

        .sidebar {
            height: 100vh;
            width: 230px;
            position: fixed;
            top: 0;
            left: 0;
            background: linear-gradient(180deg, #0e0e1a 0%, #1a1a2e 100%);
            box-shadow: inset 0 0 15px rgba(255, 0, 0, 0.3);
            border-right: 2px solid rgba(255, 0, 0, 0.4);
            padding: 20px;
            z-index: 1000;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            display: flex;
            flex-direction: column;
        }

        .sidebar.hidden {
            transform: translateX(-100%);
        }

        .sidebar h2 {
            margin-top: auto;
            font-size: 1.8rem;
            text-align: center;
            color: #ff1a1a;
            font-family: 'Creepster', cursive;
            text-shadow: 2px 2px 8px #000, 0 0 10px #ff0000;
            animation: flicker 2.5s infinite;
        }

        @keyframes flicker {
            0%, 100% { opacity: 1; }
            45% { opacity: 0.7; }
            50% { opacity: 0.2; }
            55% { opacity: 0.9; }
            70% { opacity: 0.3; }
        }

        .sidebar a {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #e0e0e0;
            padding: 12px 20px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            transition: all 0.3s ease;
            margin-top: 50px;
            border-left: 3px solid transparent;
        }

        .sidebar a:hover {
            background-color: #1c1c2e;
            color: #ff4d4d;
            border-left: 3px solid #ff4d4d;
            transform: translateX(5px);
        }

        nav {
            background-color: rgba(0, 0, 0, 0.8);
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-left: 230px;
            border-bottom: 2px solid red;
            transition: margin-left 0.3s ease-in-out;
        }

        nav.shifted {
            margin-left: 0;
        }

        nav a {
            color: #d8d8d8;
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
            padding-top: 160px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            min-height: calc(100vh - 80px);
            text-align: center;
            padding: 2rem;
            background-color: rgba(0, 0, 0, 0.5);
            animation: fadeIn 2s ease-in;
            transition: margin-left 0.3s ease-in-out;
        }

        .contenido.shifted {
            margin-left: 0;
        }

        h1 {
            font-size: 3.5rem;
            color: #ff2e2e;
            margin-bottom: 1.5rem;
            font-family: 'Creepster', cursive;
            text-shadow: 2px 2px 10px black;
            animation: pulse 3s infinite alternate;
        }

        p {
            font-size: 1.3rem;
            max-width: 800px;
            line-height: 1.6;
            color: #e0e0e0;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes pulse {
            0% { text-shadow: 0 0 10px red; }
            100% { text-shadow: 0 0 20px red; }
        }

        .boton-historia {
            margin-top: 2rem;
            background-color: #8b0000;
            color: white;
            padding: 0.6rem 1.4rem;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 0 10px red;
            transition: all 0.3s ease-in-out;
        }

        .boton-historia:hover {
            background-color: #ff0000;
            box-shadow: 0 0 20px #ff3333;
        }
   
   </style>
</head>
<body>

    <button class="toggle-btn" onclick="toggleSidebar()">☰</button>

    <div class="sidebar" id="sidebar">
        <a href="/"><span>🏠</span> Iniciar sesión</a>
        <h2>🦇 Echo con ❤️<br>para la comunidad</h2>
    </div>

    <nav id="navbar">
        <a href="{{ url('/historias') }}">Historias de la Comunidad</a>
        <a href="{{ url('/historiasfamosas') }}">Historias Famosas</a>
       
    </nav>

    <div class="contenido" id="contenido">
        <h1>Una página dedicada para los curiosos y los amantes de lo inexplicable</h1>
        <p>
            Te invitamos a relatarnos tus historias y ser parte de la comunidad.
        </p>
        
        
        
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const navbar = document.getElementById('navbar');
            const contenido = document.getElementById('contenido');
            sidebar.classList.toggle('hidden');
            navbar.classList.toggle('shifted');
            contenido.classList.toggle('shifted');
        }
    </script>
   
    <footer style="background-color: rgba(20, 0, 40, 0.85); padding: 2rem 1rem; text-align: center; box-shadow: 0 -4px 20px #7b1fa2; border-top: 2px solid #9c27b0; margin-top: 0,5rem; display: flex; flex-direction: column; align-items: center;">
        <p style="color: #d1a1ff; font-size: 1.2rem; margin-bottom: 0.8rem; text-shadow: 1px 1px 5px #000; text-align: center; width: 100%;">Gracias por compartir lo inexplicable</p>
        <div style="margin-top: 1rem;">
            <a href="#" style="color: #ba68c8; margin: 0 10px; font-size: 1.5rem;" title="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" style="color: #ce93d8; margin: 0 10px; font-size: 1.5rem;" title="TikTok"><i class="fab fa-tiktok"></i></a>
            <a href="#" style="color: #ab47bc; margin: 0 10px; font-size: 1.5rem;" title="YouTube"><i class="fab fa-youtube"></i></a>
        </div>
    <small style="display: block; color: #aaa; margin-top: 1rem;">&copy; 2025 Historias Paranormales. Todos los derechos reservados.</small>
    </footer>

</body>
</html>
