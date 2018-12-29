<?php    

    require '../../assets/php/config.php';
    $produto = $_POST['produto'];
    $descricao = $_POST['descricao'];
    $codigo = $_POST['codigo'];
    $imagem = $_FILES['foto'];
    foreach ($_POST['categoria'] as $select);
    
    if(isset($imagem['tmp_name']) && !empty($imagem['tmp_name'])) {
         $nomearquivo = md5(time().rand(0,1000)).'.png';
         move_uploaded_file($imagem['tmp_name'], 'assets/images/produtos/'.$nomearquivo);
         
         $destino = "../../assets/images/produtos/".$nomearquivo;
         $sql = "INSERT INTO `produtos`( `nome`, `descricao`, `codigo`, `categoria`, `imagem`) VALUES ('$produto', '$descricao', '$codigo', '$select', '$destino')";
         $sql = $conexao->query($sql);
         echo "Arquivo enviado com sucesso";
      } 
      else {
        echo "Falha no envio do do arquivo";
  }

   
        



?>