<?php require_once 'init.php';?>
 <header class="left">
        <img src="./imagens/logo.png" alt="logo">
        <nav class="leftbtn">
            <a href="produtos.php">Produtos</a>
            <a href="cadastro.php">Cadastro</a>
            <?php if (isset($produto['codigo_produto'])): ?>
            <a href="atualizacao.php?codigo=<?php echo $produto['codigo_produto']; ?>"> Atualizar</a>
            <?php else: ?>
            <a href="atualizacao.php">Atualizar</a><?php endif; ?>
        </nav>
        <div class="sair">
            <a href="index.php">Sair</a>
        </div>
    </header>