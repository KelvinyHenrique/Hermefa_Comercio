<?php 

session_start();

if(isset($_POST['email']) && empty($_POST['email'] == false)) {
 $email = addslashes($_POST['email']);
 $senha = addslashes($_POST['senha']);
 
 $dsn = "mysql:dbname=u804468449_dados;host=sql171.main-hosting.eu";
 $dbuser = "u804468449_root";
 $dbpass = "43yEJJgAVZDn";

    try {
        $db = new PDO($dsn, $dbuser, $dbpass);
        $sql = $db->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");
        if($sql->rowCount() > 0) {

            $dado = $sql->fetch();

        $_SESSION['id'] = $dado['id'];
            
            header("Location: ../../admin/index.php");

        }
        

    } catch (PDOException $e) {
       echo "Falhou: ".$e->getMessage();
    }

}

?>