<?php
require_once 'init.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $codigos = array_column($_SESSION['produtos'], 'codigo_produto');
    $novoCodigo = $codigos ? max($codigos) + 1 : 1;

    $_SESSION['produtos'][] = [
        'codigo_produto' => $novoCodigo,
        'nome' => $_POST['nome'],
        'preco' => (float) $_POST['preco'],
        'categoria' => $_POST['categoria'],
        'quantidade' => (int) $_POST['quantidade'],
        'qtd_minima' => 1,
        'qtd_maxima' => 100,
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
        <div class="linha_1">
            <h1>Cadastro de produtos</h1>
        </div>
        <div class="centro">
            <div class="quadrado">


                <form class="form" method="POST">


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




                    <div class="linha_2">

                        <div class="coluna">

                            <div>
                                <h2 class="titulo">Categoria</h2>

                                <select name="categoria" class="lista">
                                    <option value="bruto">Selecione a categotia...</option>
                                    <option value="bruto">Bruto</option>
                                    <option value="ferramentas">Ferramentas</option>
                                    <option value="acabamento">Acabamento</option>
                                </select>
                            </div>

                            <div>
                                <h2>Imagem</h2>
                                <input class="img_url" type="text" name="imagem" placeholder="URL da imagem">


                            </div>

                        </div>

                        <div>
                            <h2 class="titulo_descricao">Descrição</h2>
                            <textarea class="campo_descricao" name="descricao"></textarea>
                        </div>

                    </div>

                    <div class="linha">
                        <button type="submit" class="botao_cadastrar">Cadastrar</button>
                    </div>

                </form>


            </div>



        </div>
    </div>





</body>

</html>