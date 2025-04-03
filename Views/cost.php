<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades de Xadrez</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header, footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
        nav {
            display: flex;
            justify-content: center;
            background-color: #444;
            padding: 10px 0;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .container {
            padding: 20px;
            text-align: center;
        }
        .activity {
            display: inline-block;
            margin: 20px;
            text-align: center;
        }
        .activity img {
            width: 300px;
            height: 200px;
            border-radius: 10px;
        }
        .activity button {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .activity button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bem-vindo às Atividades de Xadrez</h1>
    </header>
    <nav>
        <a href="../index.php">Início</a>
        <a href="#">Sobre</a>
        <a href="#">Atividades</a>
        <a href="#">Contato</a>
    </nav>
    <div class="container">
        <div class="activity">
            <img src="chess1.jpg" alt="Torneio de Xadrez">
            <h3>Torneio de Xadrez</h3>
            <button>Saiba Mais</button>
        </div>
        <div class="activity">
            <img src="chess2.jpg" alt="Aulas de Xadrez">
            <h3>Aulas de Xadrez</h3>
            <button>Saiba Mais</button>
        </div>
        <div class="activity">
            <img src="chess3.jpg" alt="Partidas Amistosas">
            <h3>Partidas Amistosas</h3>
            <button>Saiba Mais</button>
        </div>
    </div>
    <footer>
        <p>&copy; 2023 Clube de Xadrez. Todos os direitos reservados.</p>
    </footer>
</body>
</html>