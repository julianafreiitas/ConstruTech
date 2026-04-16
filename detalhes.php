<?php require_once 'init.php';

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
    <title>Detalhes</title>
    <link rel="stylesheet" href="./css/produto.css">
    <link rel="stylesheet" href="./css/detalhes.css">

</head>

<body>
    <header class="left">
        <img src="./imagens/logo.png" alt="logo">
        <nav class="leftbtn">
            <a href="#">Produto</a>
            <a href="#">Cadastro</a>
        </nav>
    </header>

    <div class="conteudo">
        <div class="linha">
            <div class="box_detalhes">
                <div class="formatacao">
                    <h1>Areia</h1>
                    <p>Categoria</p>
                    <h2>Valor:450.90</h2>
                    <p>Estoque:25</p>
                    <p>Código do produto:25</p>
                    <h2>Descrição:</h2>
                    <p> A Areia Lavada Média de Pedra Moída em Saco 20kg é a escolha certa para quem busca qualidade,
                        versatilidade e resistência em sua obra.
                        Com granulometria entre 0,42 mm e 2 mm, ela une o equilíbrio perfeito entre a areia fina e a
                        grossa, proporcionando ótima trabalhabilidade e aderência, sem abrir mão da durabilidade.
                        É indicada para a fabricação de concretos estruturais (pilares, vigas e fundações), execução de
                        contrapisos, enchimento de colunas, regularização de piscinas e superfícies impermeabilizadas.
                        Também é perfeita para argamassas de assentamento de tijolos e blocos e para o chapisco, que
                        garante a fixação ideal do reboco.
                        Com embalagem prática de 20kg, a Areia Lavada Média é fácil de transportar, armazenar e usar em
                        diferentes etapas da construção civil, garantindo mais agilidade e produtividade no canteiro de
                        obras.
                        Invista na areia certa e tenha mais eficiência e acabamento de qualidade em sua obra. </p>
                </div>

            </div>

            <div class="imagem">
                <img class="img" src="./imagens/areia.jpg" alt="">
            </div>
        </div>

        
        <div >
            <a class="botao" href='produtos.php?excluir=<?php echo $produto['codigo_produto']; ?>'><b>Excluir</b></a>
        </div>
        

    </div>




</body>

</html>