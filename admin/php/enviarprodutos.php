<?php    

    require '../../assets/php/config.php';
    $produto = $_POST['produto'];
    $descricao = $_POST['descricao'];
    $codigo = $_POST['codigo'];
   //$categoria = $_POST['categoria'];

    $sql = "INSERT INTO `produtos`( `nome`, `descricao`, `codigo`) VALUES ('$produto', '$descricao', ' $codigo')";
    $sql = $conexao->query($sql);




?>