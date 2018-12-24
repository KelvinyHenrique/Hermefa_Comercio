<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Catálogo | Hermefa Logistica</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="assets/css/main.css" />
  <script src="assets/js/main.js"></script>
</head>

<body>

  <div class="conteiner">
    <div class="barracontato">

      <div class="barracontatoconteudo">
        <div class="numerocontato">
          <a href=""> Call Center: 0800-123-4567 | SAC: 0800-123-4567</a>
        </div>

        <div class="faq">
          <div class="faqconeudo">
            <a href="">FAQ</a>
          </div>
          <div class="faleconosco"><a href="">Fale Conosco</a></div>
        </div>

      </div>
    </div>
  </div>


  <div class="conteiner">
    <div class="navbar">
      <div class="navbaralinhar">
        <div class="logo"><img src="assets/images/logo.png" alt=""></div>
        <div class="pesquisa">
          <input type="text" placeholder="O que você deseja buscar?">
        </div>

        <div class="login">
          <div class="loginimagem"><img src="assets/images/imglogin.png" alt=""></div>
          <div class="loginlink"><a href="">Olá, faça seu login<br /> ou cadastre-se</a></div>
        </div>
      </div>
    </div>
  </div>


  <div class="conteiner">

    <div class="menuhorizontalprodutos">
      <ul class="listamenu">
        <li>
          <div class="menuvertical">
            <img src="assets/images/menu_options.png" alt="">
            <p>Veja as Categorias</p>
          </div>
        </li>
        <li><a href="">Alimento</a></li>
        <li><a href="">Bazar</a></li>
        <li><a href="">Cosmeticos</a></li>
        <li><a href="">Cutelaria</a></li>
        <li><a href="">Farmaceutico</a></li>
        <li><a href="">Higiene Oral</a></li>
        <li><a href="">Higiene Pessoal</a></li>
        <li><a href="">Infantil</a></li>
      </ul>

    </div>
  </div>



  <!-- Teste de conexão -->
  <?php require'assets/php/config.php'?>



  
    <div class="conteiner">
        <div class="categorianome"><h1>Alimento</h1></div>
    </div>

    <div class="widgetstopo">
    </div>

<div class="conteiner">
          <div class="conteudosprodutos">
         
        <?php 
        $sql = "SELECT * FROM produtos ORDER BY id DESC"; 
        $sql = $conexao->query($sql);
        if($sql->rowCount() > 0) {
          foreach($sql->fetchAll() as $produto):
        ?>
        <div class="produto">
                <img src="assets/images/produtos/produto.png" alt="">
                <p><?php echo $produto['nome'];?></p>
                <p><?php echo $produto['codigo'];?></p>
        </div>
          <?php endforeach;
        } else {
          echo "Nenhum produto cadastrado";
        } ?>

      </div>

    </div>

</body>
</html>