<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
    <style>
        body {
            margin: 0;
            font-family: "Segoe UI", Arial, sans-serif;
            background: linear-gradient(135deg, #141e30, #243b55);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }

        .panel {
            width: 90%;
            max-width: 520px;
            background: rgba(0,0,0,0.4);
            padding: 25px;
            border-radius: 18px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.5);
            animation: aparecer 0.8s ease-out;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            letter-spacing: 2px;
        }

        h2 {
            margin-top: 25px;
            font-size: 18px;
            opacity: 0.9;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 15px 0 0 0;
        }

        li {
            margin-bottom: 10px;
        }

        a {
            display: block;
            padding: 12px;
            border-radius: 12px;
            background: linear-gradient(135deg, #ff8a00, #e52e71);
            color: white;
            text-decoration: none;
            text-align: center;
            font-weight: bold;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        a:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 8px 20px rgba(0,0,0,0.4);
        }

        .ultimos a {
            background: linear-gradient(135deg, #00c6ff, #0072ff);
            font-size: 14px;
            font-weight: normal;
        }

        @keyframes aparecer {
            from {
                opacity: 0;
                transform: translateY(15px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
<div class="panel">
    <h1>BIENVENIDO/A</h1>

    <h2>Minijuegos</h2>
    <ul>
        <?php
            foreach($datos["minijuegosTotales"] as $minijuego){
                echo '<li><a href="index.php?c=Minijuego&m=cargarPagina&id='.$minijuego["idMinijuego"].'">'.$minijuego["nombreMinijuego"].'</a></li>';
            }
        ?>
    </ul>

    <h2>Últimos jugados</h2>
    <ul class="ultimos">
        <?php
            foreach($datos["ultimosJugados"] as $minijuego){
                echo '<li><a href="index.php?c=Minijuego&m=cargarPagina&id='.$minijuego["idMinijuego"].'">'.$minijuego["nombreMinijuego"].'</a></li>';
            }
        ?>
    </ul>
</div>

<script>
    document.querySelectorAll("li").forEach((li, index) => {
        li.style.opacity = "0";
        li.style.animation = `aparecer 0.5s ease forwards`;
        li.style.animationDelay = `${index * 0.08}s`;
    });
</script>

</body>
</html>
