<?php
session_start();
include("conexao.php");

if (!isset($_SESSION['admin'])) {
    header("Location:index.php");
    exit;
}

$id = $_GET['id'];
$conn->query("UPDATE agendametos SET status = 'cancelado' WHERE id = $id");

header("Location:lista_agendamentos.php");
?>