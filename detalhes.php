<?php require_once 'init.php';
$id_url = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$codigos = array_column($_SESSION['produtos'], 'codigo_produto');
$index = array_search($id_url, $codigos);

if ($index !== false) {
    $produto = $_SESSION['produtos'][$index];
} else {
    header('Location: produtos.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes</title>
    <link rel="stylesheet" href="./css/produto.css">
    <link rel="stylesheet" href="./css/detalhes.css">

</head>

<body>
    <?php
    require_once 'partials/header.php';
    ?>

    <div class="conteudo">
        <div class="linha">
            <div class="box_detalhes">
                <div class="formatacao">
                    <h1>Nome do Produto: <?php echo $produto['nome']; ?></h1>
                    <h2>Valor:R$ <?php echo $produto['preco'] ?></h2>
                    <p>Código do produto:<?php echo $produto['codigo_produto'] ?></p>
                    <p>Categoria: <?php echo $produto['categoria'] ?>
                    <p>Estoque:<?php echo $produto['quantidade'] ?></p>
                    <h2>Descrição:</h2>
                    <p><?php echo $produto['descricao'] ?></p>

                    <div class="linha">
                        <button class="botao" onclick="document.getElementById('modalExcluir').showModal()">
                            Excluir
                        </button>
                       
                        <a class="botao_Editar"
                            href="atualizacao.php?codigo=<?php echo $produto['codigo_produto']; ?>">Editar</a>
                    </div>

                </div>

            </div>

            <div class="imagem">
                <img class="img" src="<?php echo $produto['imagem']; ?>" alt="">
            </div>
        </div>

         <dialog id="modalExcluir">
                            <h3>Tem certeza?</h3>
                            <p>Você está prestes a excluir o produto <strong><?php echo $produto['nome']; ?></strong>.
                            </p>

                            <div class="linha">
                             
                                <form method="dialog">
                                    <button class="cancelar" type="submit">Cancelar</button>
                                </form>

                                
                                <form method="GET" action="produtos.php">
                                    <input type="hidden" name="excluir"
                                        value="<?php echo $produto['codigo_produto']; ?>">
                                    <button class="confirmar" type="submit" class="botao">Confirmar</button>
                                </form>
                            </div>
                        </dialog>


        <div>

        </div>

        <!-- <a href='./atualizacao.php?codigo=<?php echo $produto['codigo_produto']; ?>'>
            Editar produto
        </a> -->


    </div>




</body>

</html>