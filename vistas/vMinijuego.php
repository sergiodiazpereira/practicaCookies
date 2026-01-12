<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Minijuego</title>
    <style>
        body {
            margin: 0;
            font-family: "Segoe UI", Arial, sans-serif;
            background: linear-gradient(135deg, #000428, #004e92);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }

        .panel {
            width: 90%;
            max-width: 420px;
            background: rgba(0,0,0,0.45);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 20px 45px rgba(0,0,0,0.6);
            text-align: center;
            animation: aparecer 0.8s ease-out;
        }

        h1 {
            margin-bottom: 30px;
            letter-spacing: 2px;
        }

        .botones {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        a {
            display: block;
            padding: 14px;
            border-radius: 14px;
            font-size: 18px;
            font-weight: bold;
            text-decoration: none;
            color: white;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .jugar {
            background: linear-gradient(135deg, #00c6ff, #0072ff);
        }

        .volver {
            background: linear-gradient(135deg, #ff512f, #dd2476);
        }

        a:hover {
            transform: translateY(-4px) scale(1.03);
            box-shadow: 0 10px 25px rgba(0,0,0,0.5);
        }

        @keyframes aparecer {
            from {
                opacity: 0;
                transform: translateY(20px);
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
    <h1>Minijuego</h1>
    <div class="botones">
        <a href="index.php?c=Minijuego&m=registrarAccion&id=<?php echo $_GET['id'] ?>" class="jugar">▶ Jugar</a>
        <a href="index.php" class="volver">Volver</a>
    </div>
</div>

<script>
    const botones = document.querySelectorAll(".botones a");
    botones.forEach((btn, i) => {
        btn.style.opacity = "0";
        btn.style.animation = "aparecer 0.5s ease forwards";
        btn.style.animationDelay = `${i * 0.15}s`;
    });
</script>

</body>
</html>