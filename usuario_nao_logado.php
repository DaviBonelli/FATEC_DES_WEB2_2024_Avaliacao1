<?php
session_start();
?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Usuários</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Olá, Usuário
        <br>
        </b>Escolha uma opção</h1>
    </div>
    <p>
        <a href="verificar_solicitacoes.php" class="btn btn-primary">Verificar Solicitaçoes</a>
        <br><br>
        <a href="logout.php" class="btn btn-danger">Sair</a>
    </p>
</body>
</html>