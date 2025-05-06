<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/conexaoAgt.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login administrativo</title>
    <style>
        form {
            background-color: #122322;
            color: white;
        }

        form p {
            color: white;
        }

        form button {
            background-color: darkgreen;
        }

        form .voltar {
            background-color: darkred;
        }
    </style>
</head>

<body>
    <h2>Login do Adminstrador</h2>

    <form action="verificar_login.php" method="post">
        <img src="userLock.png" alt="">
        <br><br>
        <p>Bem vindo sr(a) inicie sessão para acessar ao seu painel</p>
        <br><br>
        <input type="text" name="usuario" placeholder="nome do administrador" required>
        <br>
        <input type="password" name="senha" placeholder="senha do administrador" required>
        <br>
        <button type="submit" class="acessar">Entrar</button>
        <br>
        <button type="button" class="voltar"><a href="http://localhost/EndProject/">Voltar</a></button>
    </form>
</body>
</ht ml>