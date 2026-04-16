<?php
require_once 'init.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $codigos = array_column($_SESSION['produtos'], 'codigo_produto');
    $novoCodigo = $codigos ? max($codigos) + 1 : 1;

    $_SESSION['produtos'][] = [
        'codigo_produto' => $novoCodigo,
        'nome' => $_POST['nome'],
        'preco' => $_POST['preco'],
        'categoria' => $_POST['categoria'],
        'quantidade' => $_POST['quantidade'],
        'qtd_minima' => $_POST['qtd_minima'],
        'qtd_maxima' => $_POST['qtd_maxima'],
        'descricao' => $_POST['descricao'],
        'imagem' => $_POST['imagem']
    ];
    header('Location: produtos.php?produtoadd=1');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - <?php echo $nomeConstrutora; ?></title>
    <link rel="stylesheet" href="./css/cadastro.css">
    <link rel="stylesheet" href="./css/produto.css">
</head>

<body>
    <?php
    require_once 'partials/header.php';
    ?>

    <div class="conteudo">
        <div class="quadrado">
            <h1>Cadastro de produtos</h1>

            <form method="POST">


                <div class="linha">
                    <div class="infor">
                        <h2 class="titulo">Nome</h2>
                        <input class="campo" type="text" name="nome">
                    </div>

                    <div class="infor">
                        <h2 class="titulo_p">Preço</h2>
                        <input class="campo_p" type="text" name="preco">
                    </div>

                    <div class="infor">
                        <h2 class="titulo">Qtd.</h2>
                        <input class="campo_quantidade" type="text" name="quantidade">
                    </div>
                </div>




                <div class="linha">

                    <div>

                        <div>
                            <h2 class="titulo">Categoria</h2>
                            <input class="lista" list="categorias" name="categoria" placeholder="Selecionar categoria">

                            <datalist id="categorias">
                                <option value="Acabamento">
                                <option value="Bruto">
                                <option value="Ferramentas">
                            </datalist>
                        </div>

                        <div>

                            <label for="file-upload" class="custom-file-upload">
                                <img class="img" src="./imagens/uplaod.png" alt="">
                                <i class="fa fa-cloud-upload"></i> Selecionar Imagem
                            </label>
                            <input type="text" name="imagem" placeholder="URL da imagem">
                        </div>

                    </div>

                    <div>
                        <h2 class="titulo_descricao">Descrição</h2>
                        <textarea class="campo_descricao" name="text"></textarea>
                    </div>

                </div>

                <div class="linha">
                    <button type="submit" class="botao_cadastrar">Cadastrar</button>
                </div>

            </form>


        </div>



    </div>





</body>

</html>