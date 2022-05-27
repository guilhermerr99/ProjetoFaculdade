<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Login</title>
</head>

<body>
    <div class="cont">
        <div class="logo">
            <img src="resources/logo.jfif">
        </div>
        <div class="login">
            <form action="main.php" method="POST">
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="E-mail" id="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Nunca compartilhe seu email com ninguém.</div>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" placeholder="Senha" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Lembrar de mim</label>
                </div>
                <a href="#">Esqueci minha senha</a>
                <br>
                <a href="cadastro.php">Cadastrar-se</a>
                <br><br>
                <button type="submit" class="btn btn-primary">Entrar</button>
            </form>
        </div>
    </div>
</body>

</html>