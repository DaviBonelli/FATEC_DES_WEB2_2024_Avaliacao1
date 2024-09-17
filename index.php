<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitações Laboratoriais</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
        }
        .btn-group {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Bem-vindo à página de Solicitações Laboratoriais</h2>
        <div class="btn-group d-flex flex-column">
            <a href="login_coordenacao.php" class="btn btn-primary btn-lg mb-3" role="button" aria-pressed="true">Área da Coordenação</a>
            <a href="login_tecnico.php" class="btn btn-primary btn-lg mb-3" role="button" aria-pressed="true">Área do Técnico</a>
            <a href="usuario_nao_logado.php" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Área do Aluno</a>
        </div>
    </div>
</body>
</html>
