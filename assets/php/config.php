<?php 

$nome = 'u804468449_root';
$senha = '43yEJJgAVZDn';

try {
$conexao = new PDO('mysql:host=sql171.main-hosting.eu;dbname=u804468449_dados', $nome, $senha);
$sql = $conexao->query("SELECT * FROM usuarios");
$dado = $sql->fetch();

} catch(PDOException $e) {
    echo "Erro na conexão".$e->getMessage();
}
?>