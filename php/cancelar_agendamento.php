<?php
session_start();
include("conexao.php");

if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
    exit;
}

// Verifica se o parâmetro id foi passado e é um número inteiro
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']); // Converte para inteiro para evitar injeção de SQL

    // Prepara a consulta SQL para atualizar o status
    $sql = " SELECT agendamentos SET status = 'cancelado' WHERE id = $id";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Executa a consulta
        $stmt->bind_param("i", $id); // "i" indica que o parâmetro é inteiro
        if ($stmt->execute()) {
            // Se a execução foi bem-sucedida, redireciona para a lista de agendamentos
            header("Location: lista_agendamentos.php?success=1");
        } else {
            // Se falhar na execução
            header("Location: lista_agendamentos.php?error=1");
        }
    } else {
        // Se a consulta falhar ao preparar
        header("Location: lista_agendamentos.php?error=2");
    }

    $stmt->close(); // Fecha a declaração
} else {
    // Se o id não foi passado ou não é válido
    header("Location: lista_agendamentos.php?error=3");
}
?>
