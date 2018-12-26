<?php

/*session_start();

if(isset($_SESSION['id']) && !empty($_SESSION['id'])) {
    header("Location:../../admin/index.php");
} else {
    header("Location: ../../login/index.php");
}*/


require '../../assets/php/config.php';
 
$email = addslashes($_POST['email']);
$senha = addslashes($_POST['senha']);  
$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' ";
$sql = $conexao->query($sql);

if($sql->rouCount() > 0) {
    $dado = $sql->fetch();
      $_SESSION['id'] = $dado['id'];
      header("Location: ../../admin/index.php" );
}

?>