<?php
require_once 'init.php';
$categoria_get = isset($_GET['categoria']) ? trim($_GET['categoria']) : '';

if (isset($_GET['excluir'])){
    $id = $_GET['excluir'];
    if (isset($_SESSION['produtos'])){
        foreach ($_SESSION['produtos'] as $posicao => $produto ){
        if ( $produto['codigo_produto'] == $id){
            unset($_SESSION['produtos'][$posicao]);
            break;
        }
    }
    $_SESSION['produtos'] = array_values($_SESSION['produtos']);

    header("Location: produtos.php");
    exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/produto.css">
    <title>Produtos - <?php echo $nomeConstrutora; ?></title>
</head>

<body>
   <?php
   require_once 'partials/header.php';


   ?>
    <main>
        <div class="topo">
            <div class="catalogos">
                <h1>Produtos</h1>
                <?php
                    echo '<ul class="catalogo">';
                    echo'<li><img src="./imagens/filtro.png" alt="filtro"></li>';
                    foreach ($categorias as $kcat => $nome) {
                    echo'<li><a href="produtos.php?categoria='.$kcat.'">'.$nome.'</a></li>';
                    }
                echo'</ul>';
                ?>
            </div>
            <div class="tb_estoque">
                <div class="caixinha">
                    <img src="./estado/verde.png" width="25x25">
                    <p>Estoque abastecido</p>
                </div>
                <div class="caixinha">
                    <img src="./estado/amarelo.png" width="25x25">
                    <p>Estoque intermediário</p>
                </div>
                <div class="caixinha">
                    <img src="./estado/vermelho.png" width="25x25">
                    <p>Zona crítica</p>
                </div>
            </div>
        </div>
        <table>
            <tr>
                <th>Produtos</th>
                <th>Catálogo</th>
                <th>Valor investido</th>
                <th>Status</th>
                <th>Detalhes</th>
            </tr>

            <?php foreach ($_SESSION['produtos'] as $produto): ?>

                 <?php if ($categoria_get == '' || $produto['categoria'] === $categoria_get): ?>
                <tr>
                    <td>
                        <div>
                           
                            <img src="<?php echo $produto['imagem']; ?>">
                            <p><?php echo $produto['nome']; ?></p>
                        </div>
                    </td>
                    <td><?php echo $produto['categoria']; ?></td>
                    <td>R$ <?php echo $produto['preco']; ?></td>
                    <td>
                        <?php 
                        if ($produto['quantidade'] >= 100){
                            echo "<img src='./estado/verde.png'";
                        }
                        elseif ($produto['quantidade'] <= 99 && $produto['quantidade'] >= 50){
                            echo "<img src='./estado/amarelo.png'";
                        }

                        else {
                            echo "<img src='./estado/vermelho.png'";
                        }
                        ?>
                    </td>
                    <td>
                        <a href='detalhes.php?id=<?php echo $produto['codigo_produto']; ?>' class='btn'>Ver mais</a>
                    </td>
                </tr>
                <?php endif; ?>
            <?php endforeach; ?>
            <!-- <td>Bruto</td>
            <td>R$95.00</td>
            <td>Disponível</td>
            <td><button href="#" class="btn">Ver mais</button></td>
            </tr> -->
        </table>
    </main>

</body>

</html>