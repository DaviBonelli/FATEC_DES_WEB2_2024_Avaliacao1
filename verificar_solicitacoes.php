<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Solicitações Públicas de GE e DSM</title>
</head>
<body>
    <h2>Todas as solicitações</h2>
    <ul>
        <?php
        $solicitacoes_ge = file('ge.txt');
        if (!empty($solicitacoes_ge)) {
            foreach ($solicitacoes_ge as $solicitacao) {
                echo "<li>" . htmlspecialchars($solicitacao) . "</li>";
            }
        }
        $solicitacoes_dsm = file('dsm.txt');
        if (!empty($solicitacoes_dsm)) {
            foreach ($solicitacoes_dsm as $solicitacao) {
                echo "<li>" . htmlspecialchars($solicitacao) . "</li>";
            }
        } else {
            echo "<li>Nenhuma solicitação cadastrada.</li>";
        }
        ?>
    </ul>

    <a href="index.php">Voltar ao Dashboard</a>
</body>
</html>
