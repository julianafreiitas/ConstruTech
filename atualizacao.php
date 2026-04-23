<?php
require_once 'init.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - <?php echo $nomeConstrutora; ?></title>
    <link rel="stylesheet" href="./css/cadastro.css">
    <link rel="stylesheet" href="./css/produto.css">
    <link rel="stylesheet" href="./css/atualizar.css">
</head>

<body>
    <?php
    require_once 'partials/header.php';
    ?>

    <div class="conteudo">
        <div class="linha_1">
            <h1>Editar</h1>
        </div>
        <div class="centro">
            <div class="quadrado">
                <form class="form" method="POST">


                    <div class="linha">
                        <div class="codigo">
                            <h3 class="titulo">Código</h3>
                            <input class="campo_Codigo" type="text" name="nome">
                        </div>

                        <div class="infor">
                            <h3 class="titulo">Nome</h3>
                            <input class="campo" type="text" name="nome">
                        </div>

                    </div>


                    <div class="coluna">
                        <div>
                            <h3 class="titulo_categoria">Categoria</h3>
                            <select name="categoria" class="lista">
                                <option value="bruto">Selecione a categotia...</option>
                                <option value="bruto">Bruto</option>
                                <option value="ferramentas">Ferramentas</option>
                                <option value="acabamento">Acabamento</option>
                            </select>
                        </div>

                    </div>

                    <div class="linha">
                        <div class="codigo">
                            <h3 class="titulo">Preço</h3>
                            <input class="campo_p" type="text" name="nome">
                        </div>

                        <div class="infor">
                            <h3 class="titulo">QTD.</h3>
                            <input class="campo_quantidade" type="text" name="nome">
                        </div>

                    </div>


                    <div class="coluna">
                        <div>
                            <h3 class="titulo_descricao">Descrição</h3>
                            <textarea class="campo_descricao" name="descricao"></textarea>
                        </div>
                        <div>
                            <input class="img" type="text" name="imagem" placeholder="URL da imagem">

                        </div>
                    </div>

                    <div class="linha">
                        <button type="submit" class="botao_cadastrar">Salvar</button>
                        <button type="submit" class="botao_cadastrar">Cancelar</button>
                    </div>

                </form>


            </div>



        </div>
    </div>





</body>

</html>