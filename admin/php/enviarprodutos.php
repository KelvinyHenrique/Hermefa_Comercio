<?php    

    require '../../assets/php/config.php';
    $produto = $_POST['produto'];
    $descricao = $_POST['descricao'];
    $codigo = $_POST['codigo'];
   //$categoria = $_POST['categoria'];
    $foto = $_FILES['foto'];
    print_r($_REQUEST);
    //Define o Caminho
    $destino = "../assets/images/produtos/";

    //  Define um nome para a imagem
    $nome = md5(uniqid(time())).".png";
     
    //Armazena na variavel o novo nome
    $arquivo = basename($nome);
    
    //concatena a variavel do caminho com o nome do arquivo 
    $destino = $destino.$arquivo; 
    
  //testa se a funçao de upload rodar
if(move_uploaded_file($nome['tmp_name'], $destino)) {
    $sql = "INSERT INTO `produtos`( `nome`, `descricao`, `codigo`, 'imagem') VALUES ('$produto', '$descricao', '$codigo', '$destino')";
    $sql = $conexao->query($sql);
    echo "O arquivo $arquivo foi enviado.";
} else{
    echo "Ocorreu um erro. Tente novamente";
}

  




?>