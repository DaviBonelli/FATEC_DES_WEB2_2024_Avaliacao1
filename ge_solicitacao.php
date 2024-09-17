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
$ge_solicitacoes = file('ge.txt');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Solicitações de Gestão Empresarial (GE)</title>
</head>
<body>
    <h2>Solicitações para Gestão Empresarial (GE)</h2>
    <ul>
        <?php if (!empty($ge_solicitacoes)): ?>
            <?php foreach ($ge_solicitacoes as $solicitacao): ?>
                <li><?php echo htmlspecialchars($solicitacao); ?></li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>Nenhuma solicitação cadastrada.</li>
        <?php endif; ?>
    </ul>
    <a href="verificacao_curso.php">Voltar</a>
</body>
</html>
