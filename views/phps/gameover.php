<?php     
    session_start();
    if (!isset($_SESSION['isLogged']))
        header('location: login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/stylish/rodape.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,700,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="../../assets/macaco-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/stylish/stilo.css">
    <link rel="stylesheet" href="../../assets/stylish/win-lose.css">
    <title>You Lose.</title>
</head>
<body>

    <?php include "../incs/menu.inc"; ?>

    <div class="content-container">
        <div class="container">
            <h1>Você Perdeu...</h1>
            <h2>Tome um presente de consolação:</h2>
            <a href="https://youtu.be/dQw4w9WgXcQ"><img src="https://media.tenor.com/L9dvKsUpqjIAAAAi/cofidisxmas.gif" alt="kekw" style="margin-left: -80px; height:220px"></a>
            <br>
            <a href="perguntas.php">
                <button>Recomeçar</button>
            </a>
        </div>
    </div>
</body>
</html>