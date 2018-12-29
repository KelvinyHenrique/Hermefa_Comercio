<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hermefa Logistica</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="assets/css/main.css" />
  <script src="assets/js/main.js"></script>
</head>

<body onload="showSlides()">

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
          <div class="loginlink"><a href="login/">Olá, faça seu login<br /> ou cadastre-se</a></div>
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
  <!-- Slideshow-->
  <div class="conteiner">
    <div class="slidersconteiners">

      <div class="sliders fade">
        <img src="assets/images/slider1.png">
      </div>

      <div class="sliders fade">
        <img src="assets/images/slider2.png">
      </div>

      <div class="sliders fade">
        <img src="assets/images/slider3.png">
      </div>

      <div class="sliders fade">
        <img src="assets/images/slider4.png">
      </div>

    </div>
  </div>

  <!-- Imagens deslizantes em baixo do slider -->

  <div class="conteiner">
    <div class="slider2"><img src="assets/images/2card.jpg" alt="">
    </div>
  </div>


  <div class="conteiner">
    <div class="bannerbody">
      <div><a href=""><img src="assets/images/banner1.jpg" alt=""></a></div>
      <div><a href=""><img src="assets/images/banner2.jpg" alt=""></a></div>
      <div><a href=""><img src="assets/images/banner3.jpg" alt=""></a></div>
    </div>
  </div>

  <div class="conteiner">
    <div class="produtosDestaquetitulo">
      <div>
        <h1><span>Produtos em Destaque</span></h1>
      </div>
      <div class="linhahorizontal"></div>

    </div>
  </div>
  <div class="conteiner">
    <div class="conteudosprodutos">

      <?php 
      require "assets/php/config.php";
      $sql = "SELECT * FROM produtos ORDER BY id DESC"; 
      $sql = $conexao->query($sql);
      if($sql->rowCount() > 0) {
        foreach($sql->fetchAll() as $produto):
      ?>
      <div class="produto">
        <img src="<?php echo $produto['imagem'];?>">
        <p>
          <?php echo $produto['nome'];?>
        </p>
        <p>
          <?php echo $produto['codigo'];?>
        </p>
      </div>
      <?php endforeach;
      } else {
        echo "Nenhum produto cadastrado";
      } ?>

    </div>
  </div>

<div class="conteiner">
      <div class="bannercloseup"></div>
  </div>
      <div class="conteiner">
      
          <div class="bannerdove">
      <div class="banner1direita"><img src="assets/images/Dove656.png" alt=""></div>
      <div class="bannerdir">
        <img src="assets/images/Colgate.png" alt="">
        <img src="assets/images/Mundial33.png" alt="">
      </div>
     
        </div>
     
      </div>

      <div class="conteiner">
    <div class="produtosDestaquetitulo">
      <div>
        <h1><span>Outros Destaques</span></h1>
      </div>
      <div class="linhahorizontal"></div>
    </div>
  </div>

  <div class="conteiner">
    <div class="conteudosprodutos">

      <?php 
      require "assets/php/config.php";
      $sql = "SELECT * FROM produtos ORDER BY id DESC"; 
      $sql = $conexao->query($sql);
      if($sql->rowCount() > 0) {
        foreach($sql->fetchAll() as $produto):
      ?>
      <div class="produto">
        <img src="<?php echo $produto['imagem'];?>">
        <p>
          <?php echo $produto['nome'];?>
        </p>
        <p>
          <?php echo $produto['codigo'];?>
        </p>
      </div>
      <?php endforeach;
      } else {
        echo "Nenhum produto cadastrado";
      } ?>

    </div>
  </div>


  <div class="conteiner">
  <div class="rodape">
  <div class="contentrodape">
        <div class="item1rodape">
          <img src="assets/images/logo.png" alt="">
          <h5>A Hermefa Distribuidor Atacadista S/A é uma empresa especializada em cosmético e higiene pessoal.</h5>
          <button>Saiba Mais</button>
        </div>
        <div class="contentfooterdir">
        <div class="item2rodape">
          <h4>Call Center</h4>
          <a href="">0800-123-4567</a><br/>
          <a href="">0800-123-4567</a><br/>
          <a href="">0800-123-4567</a><br/>

        </div>

        <div class="item3rodape">
          <h4>Sac</h4>
          <a href="">0800-123-4567</a><br/>
          <a href="">0800-123-4567</a><br/>
          <p>Fale Conosco</p>
          <a href="">0800-123-4567</a>
        </div>

        <div class="item4rodape">
          <h4>Institucional</h4>
          <a href="">Fale Conosco</a><br/>
          <a href="">Trabalhe Conosco</a><br/>
          <a href="">Fale Conosco</a><br/>
           </div>

      <div class="item5rodape">
        <h4>Serviços</h4>
        <a href="">Extranet</a><br/>
          <a href="">Pedido Eletrônico</a><br/>
          <a href="">Webmail</a><br/>
      </div>
        </div>
       
          
     



      </div>
  </div>
</div>

</body>

</html>