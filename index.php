<?php require_once 'init.php';
if (isset($_POST['login'])) {

    $usuario = $_POST['user'];
    $senha = $_POST['pass'];

    if (
        ($usuario === "Vincent" && $senha === "123") ||
        ($usuario === "vincent" && $senha === "123")
    ) {
        header("Location: produtos.php");
        exit;
    } else {
        echo "<script>alert('Acesso negado!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>
    <div class="imagem"></div>
    <form class="formulario" method="POST">
        <h1>Bem-vindo ao Sistema</h1>
        <div class="input_grup">
            <h2>Nome</h2>
            <input class="campo" type="text" name="user">
        </div>
        <div class="input_grup">
            <h2>Senha</h2>
            <input class="campo" type="password" name="pass">
        </div>
        <button class="botao" name="login" type="submit">Entrar</button>
</form>


</body>

</html>