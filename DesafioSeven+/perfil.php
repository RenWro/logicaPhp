<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seven+ - Perfil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000000;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #ffffff;
            border: 1px solid #003049;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
        }
        .form-container label {
            display: block;
            margin-top: 10px;
            color: #003049;
        }
        .form-container input {
            width: calc(100% - 22px);
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #003049;
            border-radius: 5px;
        }
        .form-container button {
            margin-top: 20px;
            padding: 10px 20px;
            border: none;
            background-color: #003049;
            color: #fdf0d5;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-container button:hover {
            background-color: #d62828;
        }
        hr {
            border: none;
            border-top: 1px solid #003049;
            margin: 10px 0;
        }
        p {
            color: #003049;
            font-size: 1.2em;
            text-align: center;
            margin-top: 0;
        }
        img {
            max-width: 150px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<img src="img/seven.png" alt="Seven+">
    <div class="form-container">
        <form id="perfil" method="post" action="perfil_process.php">
            <h2>Perfil</h2>
            <label>Nome: <?php session_start(); echo $_SESSION['dados']['usuario']['nome']; ?></label>
            <label>E-mail: <?php echo $_SESSION['dados']['usuario']['email']; ?></label>
            <label>Plano: <?php echo $_SESSION['dados']['plano']['tipo_plano']; ?></label>
            <label>Gêneros Favoritos</label>
            <input type="checkbox" name="generos[]" value="Ação"> Ação
            <input type="checkbox" name="generos[]" value="Comédia"> Comédia
            <input type="checkbox" name="generos[]" value="Drama"> Drama
            <input type="checkbox" name="generos[]" value="Ficção Científica"> Ficção Científica
            <input type="checkbox" name="generos[]" value="Terror"> Terror
            <input type="checkbox" name="generos[]" value="Romance"> Romance
            <input type="checkbox" name="generos[]" value="Animação"> Animação
            <input type="checkbox" name="generos[]" value="Documentário"> Documentário
            <br>
            <button type="submit">Finalizar</button>
        </form>
    </div>
</body>
</html>
