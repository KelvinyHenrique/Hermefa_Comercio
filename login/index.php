<!DOCTYPE html>
<html lang="pt-BR" >


<?php

session_start();

if(isset($_SESSION['id']) && !empty($_SESSION['id'])) {
  header("Location: ../admin/index.php");
}

?>


<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Cadastrar</a></li>
        <li class="tab"><a href="#login">Logar</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Cadastre-se</h1>
          
          <form action="../assets/php/login.php" method="POST">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Nome<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Sobrenome<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Registre uma senha<span class="req">*</span>
            </label>
            <input type="password" name="senha" required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block"/>Cadastrar</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Bem Vindo de Volta</h1>
          
          <form method="POST" action="../assets/php/login.php">
          
            <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Senha<span class="req">*</span>
            </label>
            <input type="password" name="senha" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Esqueceu a senha?</a></p>
          
          <input type="submit" value="Enviar">
         <!-- <button class="button button-block"/>Login</button>
          -->
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
