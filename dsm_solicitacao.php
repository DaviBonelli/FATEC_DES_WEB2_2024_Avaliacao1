<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login_coordenacao.php");
    exit;
}
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login_tecnicos.php");
    exit;
}

$dsm_solicitacoes = file('dsm.txt');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Solicitações de Desenvolvimento de Software Multiplataforma (DSM)</title>
</head>
<body>
    <h2>Solicitações de Desenvolvimento de Software Multiplataforma (DSM)</h2>
    <ul>
        <?php if (!empty($dsm_solicitacoes)): ?>
            <?php foreach ($dsm_solicitacoes as $solicitacao): ?>
                <li><?php echo htmlspecialchars($solicitacao); ?></li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>Nenhuma solicitação cadastrada.</li>
        <?php endif; ?>
    </ul>
    <a href="verificacao_curso.php">Voltar</a>
</body>
</html>
