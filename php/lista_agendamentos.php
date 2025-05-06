<?php
session_start();
include("conexao.php");

// if (!isset($_SESSION['admin'])) {
//     header("Location: index.php");
//     exit;
// }

$result = $conn->query("SELECT * FROM agendamentos ORDER BY data_agendada ASC");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de agendamentos</title>
    <link rel="stylesheet" href="css/styleList.css">
</head>

<body>
    <h1>Lista de agendamentos</h1>
    <br><br>

    <table>
        <tr>
            <th><img src="img/log/user2.png" alt="icon clent" title="clente"></th>
            <th><img src="img/log/passeio2.png" alt="icon clent" title="passeio"></th>
            <th><img src="img/log/data.png" alt="icon clent" title="data"></th>
            <th><img src="img/log/hora1.png" alt="icon clent" title="hora"></th>
            <th><img src="img/log/pendente.png" alt="icon clent" title="status"></th>
            <th><img src="img/log/config2.png" alt="icon clent" title="configuração"></th>
        </tr>

        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['nome_cliente'] ?></td>
                <td>
                    <?= $row['passeio'] ?>
                </td>
                <td>
                    <?= $row['data_agendada'] ?>
                </td>
                <td><?= $row['hora'] ?></td>
                <td><?= $row['status'] ?></td>
                <td>
                    <a href="editar_agendamento.php?id=<?= $row['id'] ?>" id="edit"><img src="img/log/edit.png"
                            alt="edit logo" title="editar"></a>
                    <a href="cancelar_agendamento.php?id=<? $row['id'] ?>"
                        onclick="return confirm('tens certeza que deseja cancelar?')"><img src="img/log/cancel2.png"
                            alt="cancel logo" title="cancelar"></a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>

    <br><br>
    <button><a href="dashboard.php">Voltar</a></button> 
</body>

</html>