<?php
include_once("conexao.php");
if (!empty($_POST['id'])) {
    $id = $_POST['id'];
    $sqlSetect = "SELECT * FROM agendametos WHERE id = $id";
    $resultado = $conn->$sqlDelete;
    //print_r($resultado);        
    if ($resultado->num_rows > 1) {
        $sqlDelete = "DELETE FROM agendametos WHERE id = $id";
        $resultado = $conn->$sqlDelete;
        header("Location:lista_agendamentos.php");
    }
}
?>