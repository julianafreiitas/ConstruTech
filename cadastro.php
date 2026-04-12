<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="./css/cadastro.css">
</head>

<body>
    <aside class="menu">
        <img class="logo" src="./imagens/logo.png" alt="">
        <h2>Produtos</h2>
        <h2>cadastro</h2>
    </aside>


    <div class="conteudo">
        <div class="quadrado">
            <h1>Cadastro de produtos</h1>


            <div class="linha">
                <div class="infor">
                    <h2 class="titulo">Nome</h2>
                    <input class="campo" type="text">
                </div>

                <div class="infor">
                    <h2 class="titulo_p">Preço</h2>
                    <input class="campo_p" type="text">
                </div>

                <div class="infor">
                    <h2 class="titulo">Qtd.</h2>
                    <input class="campo_quantidade" type="text">
                </div>
            </div>




            <div class="linha">

                <div>

                    <div>
                        <h2 class="titulo">Categoria</h2>
                        <input class="lista" list="categorias" name="#" placeholder="Selecionar categoria">

                        <datalist id="categorias">
                            <option value="Acabamento">
                            <option value=" Bruto">
                            <option value=" Ferramentas">
                        </datalist>
                    </div>

                    <div>

                        <label for="file-upload" class="custom-file-upload"> 
                            <img class="img" src="./imagens/uplaod.png" alt="">
                            <i class="fa fa-cloud-upload"></i> Selecionar Imagem
                        </label>
                        <input id="file-upload" type="file" accept="image/*" style="display:none;" />
                    </div>

                </div>

                <div>
                    <h2 class="titulo_descricao">Descrição</h2>
                    <textarea class="campo_descricao" type="text"></textarea>
                </div>

            </div>

            <div class="linha">
                <button class="botao_cadastrar">Cadastrar</button>
            </div>


        </div>



    </div>





</body>

</html>