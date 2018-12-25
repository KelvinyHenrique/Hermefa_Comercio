<?php 

$nome = 'u804468449_root';
$senha = '46BsMXudARKt';

try {
$conexao = new PDO('mysql:host=sql171.main-hosting.eu;dbname=u804468449_dados', $nome, $senha);
echo "Conectado";

} catch(PDOException $e) {
    echo "Erro na conexão".$e->getMessage();
}
?>