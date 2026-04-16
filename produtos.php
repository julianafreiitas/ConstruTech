<?php
require_once 'init.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/produto.css">
    <title>ConstruTech</title>
</head>

<body>
   <?php
   require_once 'partials/header.php';
   ?>
    <main>
        <div class="topo">
            <h1>Produtos</h1>
            <ul class="catalogo">
                <img src="./imagens/filtro.png" alt="filtro">
                <li><a href="#">Bruto</a></li>
                <li><a href="#">Ferramentas</a></li>
                <li><a href="#">Acabamento</a></li>
            </ul>
        </div>
        <table>
            <tr>
                <th>Produtos</th>
                <th>Catálogo</th>
                <th>Valor investido</th>
                <th>Estado</th>
                <th>Detalhes</th>
            </tr>

            <?php foreach ($_SESSION['produtos'] as $produto): ?>
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
                        <?php echo ($produto['quantidade'] > 0) ? 'Disponível' : 'Indisponível'; ?>
                    </td>
                    <td>
                        <a href='detalhes.php?id=<?php echo $produto['codigo_produto']; ?>' class='btn'>Ver mais</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            <td>Bruto</td>
            <td>R$95.00</td>
            <td>Disponível</td>
            <td><button href="#" class="btn">Ver mais</button></td>
            </tr>
        </table>
    </main>

</body>

</html>