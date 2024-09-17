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
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Solicitações</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
        }
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-lg p-4 w-100" style="max-width: 400px;">
            <h2 class="text-center mb-4">Escolha qual solicitação deseja visualizar</h2>
            <form action="ge_solicitacao.php" method="POST">
                <button type="submit" class="btn btn-primary w-100 mb-2">Visualizar Solicitações GE</button>
            </form>
            <form action="dsm_solicitacao.php" method="POST">
                <button type="submit" class="btn btn-primary w-100 mb-3">Visualizar Solicitações DSM</button>
            </form>
            <a href="index.php" class="btn btn-link w-100">Voltar ao Dashboard</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
