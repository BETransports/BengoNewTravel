<?php
session_start();

include("conexao.php");

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM admin WHERE usuario = '$usuario' AND senha = '$senha'";

$result = $conn->query($sql);

if ($result->num_rows === 1) {
    $_SESSION['admin'] = $usuario;
    header("Location: dashboard.php");
} else {
    echo "login inválido!";
}
?>