<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/stylish/rodape.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,700,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="https://m.media-amazon.com/images/I/81ncT+-1D1L.png" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/stylish/stilo.css">
    <link rel="stylesheet" href="../../assets/stylish/win-lose.css">
    <title>Parabéns!!</title>
    <style>
        /* Estilos para o botão "Não" */
        #nao {
            position: absolute;
        }
    </style>
    <script>
        // Função para mover o botão "Não" para uma posição aleatória
        function moverNao() {
            var naoButton = document.getElementById("nao");
            var screenWidth = window.innerWidth;
            var screenHeight = window.innerHeight;

            var randomX = Math.floor(Math.random() * (screenWidth - 100)); // Gera coordenada X aleatória
            var randomY = Math.floor(Math.random() * (screenHeight - 100)); // Gera coordenada Y aleatória

            naoButton.style.left = randomX + "px";
            naoButton.style.top = randomY + "px";
        }
    </script>
</head>
<body>
    <div class="content-container">
        <div class="container">
            <h1 style="letter-spacing: 0px; font-family: Calibri; font-size: 33px">João Eduardo Montandom Araujo Filho (jemaf), você aceita ser nosso paraninfo?</h1>
            <form action="" method="post">
                <input type="submit" name="sim" value="Sim" style="margin-right:10px; height: 40px; width: 80px; border: none; color: white; background-color: purple; border-radius: 4px; font-weight: 600">
                <input type="submit" id="nao" name="nao" value="Não" onmouseover="moverNao()" style="margin-left:10px; height: 40px; width: 80px; border: none; color: white; background-color: purple; border-radius: 4px; font-weight: 600">
            </form>
            <br>
            <img src="../../assets/macaco-casacmg.png" height="260">
            <!-- <img src="https://uniquebox.vteximg.com.br/arquivos/ids/157669/pedido-de-casamento_left.png?v=636925076344930000" alt="aceita?" height="210"> -->
        </div>
    </div>
    <?php
    if(isset($_POST['sim'])) {
    }
    ?>
</body>
</html>