<?php
require_once 'init.php';

$produtoEditando = null;

if (isset($_GET['codigo'])) {
    foreach ($_SESSION['produtos'] as $p) {
        if ($p['codigo_produto'] == $_GET['codigo']) {
            $produtoEditando = $p;
            break;
        }
    }
}
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    foreach ($_SESSION['produtos'] as &$produto) {
        if ($produto['codigo_produto'] == $_POST['codigo_produto']) {

            $produto['nome'] = $_POST['nome'];
            $produto['categoria'] = $_POST['categoria'];
            $produto['preco'] = $_POST['preco'];
            $produto['quantidade'] = $_POST['quantidade'];
            $produto['descricao'] = $_POST['descricao'];
            $produto['imagem'] = $_POST['imagem'];

            break;
        }
    }

    header("Location: produtos.php");
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
                            <input class="campo_Codigo" type="text" name="codigo_produto"
                                value="<?php echo $produtoEditando['codigo_produto'] ?? ''; ?>">
                        </div>

                        <div class="infor">
                            <h3 class="titulo">Nome</h3>
                            <input class="campo" type="text" name="nome"
                                value="<?php echo $produtoEditando['nome'] ?? ''; ?>">
                        </div>

                    </div>


                    <div class="coluna">
                        <div>
                            <h3 class="titulo_categoria">Categoria</h3>
                            <select name="categoria" class="lista">
                                <option value="bruto">Selecione a categoria...</option>
                                <option value="bruto" <?php if (($produtoEditando['categoria'] ?? '') == 'bruto')
                                    echo 'selected'; ?>> Bruto </option>
                                <option value="ferramentas" <?php if (($produtoEditando['categoria'] ?? '') == 'ferramentas')
                                    echo 'selected'; ?>>Ferramentas</option>
                                <option value="acabamento" <?php if (($produtoEditando['categoria'] ?? '') == 'acabamento')
                                    echo 'selected'; ?>> Acabamento</option>
                            </select>
                        </div>

                    </div>

                    <div class="linha">
                        <div class="codigo">
                            <h3 class="titulo">Preço</h3>
                            <input class="campo_p" type="text" name="preco"
                                value="<?php echo $produtoEditando['preco'] ?? ''; ?>">
                        </div>

                        <div class="infor">
                            <h3 class="titulo">QTD.</h3>
                            <input class="campo_quantidade" type="text" name="quantidade"
                                value="<?php echo $produtoEditando['quantidade'] ?? ''; ?>">
                        </div>

                    </div>


                    <div class="coluna">
                        <div>
                            <h3 class="titulo_descricao">Descrição</h3>
                            <textarea class="campo_descricao"
                                name="descricao"><?php echo $produtoEditando['descricao'] ?? ''; ?></textarea>
                        </div>
                        <div>
                            <input class="img" type="text" name="imagem"
                                value="<?php echo $produtoEditando['imagem'] ?? ''; ?>">
                        </div>
                    </div>

                    <div class="linha">
                        <button type="submit" class="botao_cadastrar">Salvar</button>
                        <button type="button" onclick="window.location.href='produtos.php'">
                            Cancelar
                        </button>
                    </div>

                </form>


            </div>



        </div>
    </div>





</body>

</html>