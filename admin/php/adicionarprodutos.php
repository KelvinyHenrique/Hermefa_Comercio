<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hermefa | Administração</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../../assets/css/main.css" />
    <script src="../../assets/js/main.js"></script>
</head>

<body>
    <div class="conteiner">
        <div class="navbar">
            <div class="navbaralinhar">
                <div class="logo"><img src="../../assets/images/logo.png" alt=""></div>
                <div class="menuadmin">
                    <ul class="opcoesadmin">
                        <li> <a href="">Produtos</a> </li>
                        <li> <a href="">Email</a> </li>
                        <li> <a href="">Editar Site</a> </li>
                        <li> <a href="">Trocar Fotos</a> </li>
                    </ul>
                </div>

                <div class="login">
                    <div class="loginimagem"><img src="../../assets/images/imglogin.png" alt=""></div>
                    <div class="loginlink"><a href="">Olá, faça seu login<br /> ou cadastre-se</a></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <div class="conteiner">
        <form class="formprodutos" action="enviarprodutos.php" method="POST" enctype="multipart/form-data">

            <label for="nomeproduto">PRODUTO:</label><br />
            <input type="text" name="produto" placeholder="Digite o nome do Produto"/><br /><br />

            <label for="codigo">Código:</label><br />
            <input type="text" name="codigo" placeholder="Código"/><br /><br />

            <label for="descricao">Descrição:</label><br />
            <input type="text" name="descricao" placeholder="Descrição"/><br /><br />
            
            <label>Imagem:</label>
            <input type="file" name="foto" /><br/><br/>
            
            <label for="categoria">Categoria:</label> <br /> <br />
            <select>
                <option value="categria">ALIMENTO</option>
                <option value="categria">CUTELARIA</option>
                <option value="categria">PAPEL</option>
                <option value="categria">LIMPEZA</option>
            </select><br /><br />
            <input type="submit" name="enviar" value="Enviar">
        
        </form>
    </div>







</body>

</html>