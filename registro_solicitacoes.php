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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $laboratorio = $_POST['laboratorio'];
    $data_limite = $_POST['data_limite'];
    $demanda = trim($_POST['demanda']);
    $curso = $_POST['curso'];

    if ($laboratorio && $data_limite && $demanda && $curso) {
        $registro = "$laboratorio | $data_limite | $demanda\n";

        if ($curso == 'DSM') {
            $arquivo = 'dsm.txt';
        } else {
            $arquivo = 'ge.txt';
        }

        $file = fopen($arquivo, 'a');
        fwrite($file, $registro);
        fclose($file);

        $message = "<div class='alert alert-success' role='alert'>Solicitação cadastrada com sucesso!</div>";
    } else {
        $message = "<div class='alert alert-danger' role='alert'>Todos os campos são obrigatórios.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Solicitações</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-lg p-4">
            <h2 class="text-center mb-4">Cadastro de Solicitações Laboratoriais</h2>
            <?php if (isset($message)) echo $message; ?>
            <form method="POST">
                <div class="mb-3">
                    <label for="laboratorio" class="form-label">Laboratório:</label>
                    <select name="laboratorio" id="laboratorio" class="form-select" required>
                        <option value="" disabled selected>Escolha o laboratório</option>
                        <option value="Laboratorio1">Laboratório 1</option>
                        <option value="Laboratorio2">Laboratório 2</option>
                        <option value="Laboratorio3">Laboratório 3</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="data_limite" class="form-label">Data Limite:</label>
                    <input type="date" name="data_limite" id="data_limite" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="demanda" class="form-label">Demanda:</label>
                    <textarea name="demanda" id="demanda" class="form-control" rows="4" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="curso" class="form-label">Curso Atendido:</label>
                    <select name="curso" id="curso" class="form-select" required>
                        <option value="" disabled selected>Escolha o curso</option>
                        <option value="DSM">Desenvolvimento em Software Multiplataforma (DSM)</option>
                        <option value="GE">Gestão Empresarial (GE)</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
            <a href="tela_coordenacao.php" class="btn btn-link mt-3 d-block text-center">Voltar</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
