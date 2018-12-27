<?php
session_start();
if(isset($_POST['email']) && empty($_POST['email']) == false)
{
    $email = addslashes($_POST['email']);
    $password = addslashes($_POST['password']);


    define( 'MYSQL_HOST', 'sql171.main-hosting.eu' );
    define( 'MYSQL_USER', 'u804468449_root' );
    define( 'MYSQL_PASSWORD', '46BsMXudARKt' );
    define( 'MYSQL_DB_NAME', 'u804468449_dados' );
     
try
    {
    $db = new PDO('mysql:host='.MYSQL_HOST.';dbname='.MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);
    

    $sql = $db->query("SELECT * FROM user WHERE email= '$email'  AND senha = '$password'");
    if($sql->rowCount() > 0)
    {
        $dado = $sql->fetch();
        $_SESSION['id'] = $dado['id'];
        header("Location: index.php");
    }
}
catch ( PDOException $e )
{
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}

$db->exec("set names utf8");


}


?>


<h1>LOGIN</h1>



<form method="POST">

E-mail:<br/>
<input type="email" name="email" /><br/><br/>

Senha:<br/>
<input type="password" name="password" /><br/><br/>


<input type="submit" value="Entrar" />

</form>