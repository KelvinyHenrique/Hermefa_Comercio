<!DOCTYPE html>

<?php

session_start();

if(isset($_SESSION['id']) && !empty($_SESSION['id'])) {
    header("Location: ../index.php");
} else {
    header("Location: ../login/index.php");
}


?>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hermefa | Administração</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../assets/css/main.css" />
    <script src="../assets/js/main.js"></script>
</head>
<body>
    <div class="alinhamento">
            <div class="navbar">
            <div class="navbaralinhar">
        <div class="logo"><img src="../assets/images/logo.png" alt=""></div>
        <div class="menuadmin">
        <ul class="opcoesadmin">
                <li> <a href="">Produtos</a> </li>
                <li> <a href="">Email</a> </li>
                <li> <a href="">Editar Site</a> </li>
                <li> <a href="">Trocar Fotos</a> </li>
                </ul>
        </div>

        <div class="login">
          <div class="loginimagem"><img src="../assets/images/imglogin.png" alt=""></div>
          <div class="loginlink"><a href="">Olá, faça seu login<br /> ou cadastre-se</a></div>
        </div>
      </div>
    </div>
  </div>
            </div>
    </div>
        
</body>
</html>