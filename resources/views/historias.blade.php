<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Historias Paranormales</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    
    <style>
        

        body {
           font-family: 'Montserrat', sans-serif;
           background: url('{{ asset('images/colton-sturgeon-EFQlS6SL9uw-unsplash.jpg') }}') no-repeat center center fixed;
           background-size: cover;
           color: #e0e0e0;
           margin: 0;
           padding: 0;
           background-blend-mode: multiply;
           background-color: rgba(10, 0, 20, 0.7);
           min-height: 100vh;
           display: flex;
           flex-direction: column;
        }

        header {
            background-color: rgba(0, 0, 0, 0.85);
            padding: 2rem;
            text-align: center;
            box-shadow: 0 0 40px #7b1fa2;
            border-bottom: 2px solid #9c27b0;
        }

        h1 {
            margin: 0;
            font-family: 'Cinzel Decorative', serif;
            font-size: 3rem;
            color: #d05ce3;
            text-shadow: 2px 2px 10px #42006f;
            letter-spacing: 2px;
        }

        h1, h2, h3 {
            text-shadow: 1px 1px 6px rgba(0,0,0,0.8);
        }

        p, small {
            margin: 0.5rem 0 0;
            font-style: italic;
            color: #c5a3ff;
            text-shadow: 1px 1px 4px rgba(0,0,0,0.7);
        }

        nav {
            margin-top: 1rem;
        }

        .nav-boton {
            display: inline-block;
            margin: 0 0.5rem;
            padding: 0.7rem 1.4rem;
            background: linear-gradient(45deg, #8e24aa, #ab47bc);
            color: white;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 700;
            box-shadow: 0 5px 15px rgba(156, 39, 176, 0.7);
            transition: background 0.5s ease, transform 0.3s ease;
            user-select: none;
        }

        .nav-boton:hover {
            background: linear-gradient(45deg, #ba68c8, #ce93d8);
            box-shadow: 0 8px 25px rgba(186, 104, 200, 0.9);
            transform: translateY(-3px);
        }

        .contenido {
            padding: 3rem 2rem 4rem;
            max-width: 900px;
            margin: 2rem auto 3rem;
            background: linear-gradient(180deg, rgba(32,0,48,0.95), rgba(64,0,96,0.95));
            border-radius: 14px;
            box-shadow: 0 0 30px #7b1fa2;
            flex-grow: 1;
        }

        .historia {
            background-color: rgba(32, 0, 48, 0.95);
            border-left: 6px solid #ce93d8;
            margin-bottom: 2.5rem;
            padding: 1.6rem 1.8rem;
            border-radius: 12px;
            box-shadow: 0 0 18px #ba68c8;
            animation: fadeInUp 0.7s ease forwards;
            opacity: 0;
        }

        @keyframes fadeInUp {
          0% {
            opacity: 0;
            transform: translateY(15px);
          }
          100% {
            opacity: 1;
            transform: translateY(0);
          }
        }

        .historia h3 {
            color: #e1bee7;
            margin-bottom: 0.3rem;
            font-weight: 700;
            letter-spacing: 0.6px;
        }

        .separator {
          border: none;
          border-top: 2px solid #8e24aa;
          margin: 3rem 0;
          position: relative;
        }
        .separator::after {
          content: '🔮';
          position: absolute;
          top: -17px;
          left: 50%;
          transform: translateX(-50%);
          background-color: rgba(10, 0, 20, 0.9);
          padding: 0 14px;
          font-size: 1.7rem;
          color: #ce93d8;
          filter: drop-shadow(0 0 2px #7b1fa2);
        }
       form input, form textarea {
         width: 100%;
         padding: 0.75rem 1rem;
         background-color: rgba(55, 0, 90, 0.9);
         color: #eee;
         border: 1.5px solid #ba68c8;
         margin-bottom: 1.3rem;
         border-radius: 6px;
         font-size: 1rem;
         font-weight: 500;
         transition: border-color 0.3s ease, background-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;
        }

       form input:focus, form textarea:focus {
          outline: none;
          border-color: #d3a4ff;
          box-shadow: 0 0 8px #d3a4ff;
          background-color: rgba(70, 0, 110, 0.95);
        }

       form input[type="text"]:hover,
       form textarea:hover {
         box-shadow: 0 0 12px #ce93d8;
         transform: scale(1.03);
         background-color: rgba(80, 0, 120, 0.95);
        }

    
        .custom-file-wrapper {
            position: relative;
            margin-bottom: 1.3rem;
        }

        .custom-file-label {
            display: block;
            padding: 0.75rem 1rem;
            background: linear-gradient(45deg, #6a1b9a, #8e24aa);
            color: #eee;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            text-align: center;
            transition: background 0.4s ease;
            box-shadow: 0 0 12px #7b1fa2;
        }

        .custom-file-label:hover {
            background: linear-gradient(45deg, #8e24aa, #ba68c8);
        }

        .custom-file-label i {
            margin-right: 8px;
        }

        .custom-file-wrapper input[type="file"] {
            display: none;
        }

        form button {
            background: linear-gradient(45deg, #9c27b0, #ce93d8);
            color: white;
            padding: 0.9rem 2rem;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            box-shadow: 0 0 16px #ba68c8;
            font-weight: 700;
            font-size: 1.1rem;
            transition: background 0.4s ease, transform 0.3s ease;
            user-select: none;
        }

        form button:hover {
            background: linear-gradient(45deg, #ce93d8, #ba68c8);
            transform: translateY(-3px);
            box-shadow: 0 0 26px #d1a1ff;
        }

        form button i {
          margin-right: 10px;
          font-size: 1.2rem;
        }

        img {
            max-width: 100%;
            border-radius: 12px;
            margin-top: 0.6rem;
            box-shadow: 0 0 20px #7b1fa2;
            transition: transform 0.4s ease, filter 0.4s ease;
            cursor: pointer;
            filter: drop-shadow(0 0 6px #ab47bc);
        }

        img:hover {
            transform: scale(1.07);
            filter: brightness(0.85) drop-shadow(0 0 10px #ba68c8);
        }

        .alert {
            padding: 1rem 1.4rem;
            margin-bottom: 2rem;
            border-radius: 8px;
            animation: fadeIn 0.9s ease forwards;
            opacity: 0;
            font-weight: 600;
            font-size: 1rem;
        }

        .alert-success {
            background-color: #4caf50cc;
            color: #f0f9f0;
            box-shadow: 0 0 12px #4caf50cc;
        }

        .alert-danger {
            background-color: #e53935cc;
            color: #fff0f0;
            box-shadow: 0 0 12px #e53935cc;
        }

        @keyframes fadeIn {
          to {
            opacity: 1;
          }
        }

        @media (max-width: 600px) {
            .contenido {
                padding: 2rem 1rem 3rem;
                margin: 1rem;
            }
            h1 {
                font-size: 2.4rem;
            }
            form button {
                width: 100%;
                padding: 1rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Historias Paranormales</h1>
        <p>OVNIs, fantasmas, encuentros extraños y más...</p>
        <nav>
            <a class="nav-boton" href="{{ route('historias') }}">Historias de la Comunidad</a>
            <a class="nav-boton" href="{{ route('historiasfamosas') }}">Historias Famosas</a>
        </nav>
    </header>

    <div class="contenido">
        <h2>Comparte tu historia</h2>

        @if(session('success'))
            <div class="alert alert-success"><i class="fas fa-check-circle"></i> {{ session('success') }}</div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul style="margin: 0; padding-left: 1rem;">
                    @foreach ($errors->all() as $error)
                        <li><i class="fas fa-exclamation-circle"></i> {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('historias.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="titulo" placeholder="Título de la historia" required>
            <textarea name="contenido" rows="5" placeholder="Tu historia paranormal..." required></textarea>

            <div class="custom-file-wrapper">
                <label for="imagen" class="custom-file-label">
                    <i class="fas fa-upload"></i> <span id="file-name">Seleccionar imagen</span>
                </label>
                <input type="file" name="imagen" id="imagen" accept="image/*" onchange="updateFileName(this)">
            </div>

            <button type="submit"><i class="fas fa-ghost"></i> Enviar Historia</button>
        </form>

        <h2>Últimas historias</h2>

        @foreach($historias as $index => $historia)
            <div class="historia" style="animation-delay: {{ $index * 0.15 }}s;">
                <h3>{{ $historia->titulo }}</h3>
                <p>{{ $historia->contenido }}</p>
                @if($historia->imagen)
                    <img src="{{ asset('images/' . $historia->imagen) }}" alt="Imagen de la historia" style="width: 300px; height: auto;">
                @endif
                <small>{{ $historia->created_at->diffForHumans() }}</small>
                <form action="{{ route('historias.destroy', $historia->id) }}" method="POST" style="margin-top: 1rem;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="
                       background-color: #c62828;
                       color: white;
                       padding: 0.4rem 1rem;
                       border: none;
                       border-radius: 6px;
                       cursor: pointer;
                       font-weight: bold;
                       box-shadow: 0 0 6px #880e4f;
                      " onclick="return confirm('¿Estás seguro de que deseas eliminar esta historia?')"><i class="fas fa-trash"></i> Eliminar</button>
                </form>
            </div>
            @if(!$loop->last)
                <hr class="separator" />
            @endif
        @endforeach

        <div style="text-align: center; margin-top: 1rem;">
            {{ $historias->links() }}
        </div>
    </div>

    
    <script>
        function updateFileName(input) {
            const fileNameSpan = document.getElementById('file-name');
            if (input.files.length > 0) {
                fileNameSpan.textContent = input.files[0].name;
            } else {
                fileNameSpan.textContent = 'Seleccionar imagen';
            }
        }
    </script>
    
        </div>

    <footer style="background-color: rgba(20, 0, 40, 0.85); padding: 2rem 1rem; text-align: center; box-shadow: 0 -4px 20px #7b1fa2; border-top: 2px solid #9c27b0; margin-top: 3rem;">
        <p style="color: #d1a1ff; font-size: 1.2rem; margin-bottom: 0.8rem; text-shadow: 1px 1px 5px #000;">Gracias por compartir lo inexplicable...</p>
        <div style="margin-top: 1rem;">
            <a href="#" style="color: #ba68c8; margin: 0 10px; font-size: 1.5rem;" title="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" style="color: #ce93d8; margin: 0 10px; font-size: 1.5rem;" title="TikTok"><i class="fab fa-tiktok"></i></a>
            <a href="#" style="color: #ab47bc; margin: 0 10px; font-size: 1.5rem;" title="YouTube"><i class="fab fa-youtube"></i></a>
        </div>
        <small style="display: block; color: #aaa; margin-top: 1rem;">&copy; 2025 Historias Paranormales. Todos los derechos reservados.</small>
    </footer>
</body>
</html>
