<?php require_once 'init.php';
$id_url = isset($_GET['id']) ? (int) $_GET['id']: 0;
$codigos = array_column($_SESSION['produtos'], 'codigo_produto');
$index = array_search($id_url, $codigos);

if ($index !== false){
    $produto = $_SESSION['produtos'][$index];
}else{
    header('Location: produtos.php');
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
                    <h1><?php echo $produto['nome']; ?></h1>
                    <p><?php echo $produto['categoria']?>
                    <h2><?php echo $produto['preco'] ?></h2>
                    <p>Estoque:<?php echo $produto['quantidade']?></p>
                    <p>Código do produto:<?php echo $produto['codigo_produto']?></p>
                    <h2>Descrição:</h2>
                    <p><?php echo $produto['descricao']?></p>
                </div>

            </div>

            <div class="imagem">
                <img class="img" src="<?php echo $produto['imagem']; ?>" alt="">
            </div>
        </div>

        
        <div >
            <a class="botao" href='produtos.php?excluir=<?php echo $produto['codigo_produto']; ?>'><b>Excluir</b></a>
        </div>
        

    </div>




</body>

</html>