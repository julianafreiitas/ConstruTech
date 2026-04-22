<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="./css/login.css">
    <script>
        function test(){
            const usuario = document.querySelector("#user").value;
            const senha = document.querySelector("#pass").value;

            if(usuario === "juliana" && senha ==="123") {
                window.location.href= "./produtos.php";
            }
            else if (usuario === "Juliana" && senha ==="123") {
                window.location.href= "./produtos.php";
            }
            else{
                alert("Acesso negado! Digite direito >:(");
            }
        }     
    </script>
</head>

<body>
    <div class="imagem"></div>
    <form class="formulario">
        <h1>Bem-vindo ao Sistema</h1>
        <div class="input_grup">
            <h2>Nome</h2>
            <input class="campo" type="text" id="user">
        </div>

        <div class="input_grup">
            <h2>Senha</h2>
            <input class="campo" type="password" id="pass">
        </div>

        <!-- href="produtos.php" -->

        <button class="botao" onclick="test()" type="button">Entrar</button>
</form>


</body>

</html>