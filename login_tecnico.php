<?php
session_start();
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($_POST['username'] == 'tecnicos' && $_POST['password'] == 'tecnicos') {
            $_SESSION['loggedin'] = TRUE;
            $_SESSION["username"] = 'Tecnicos';
            header("Location: tela_tecnicos.php");
            exit();
        } else {
            $_SESSION['loggedin'] = FALSE;
            echo "<p class='text-danger text-center'>Login ou senha incorretos!</p>";
        }
    }
}
?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Login Técnicos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .wrapper {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .btn-group {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login Técnicos</h2>
        <p>Favor inserir login e senha.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Usuário</label>
                <input type="text" name="username" class="form-control">
            </div>    
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group btn-group">
                <input type="submit" class="btn btn-primary" value="Acessar">
                <a href="index.php" class="btn btn-danger">Sair</a>
            </div>
        </form>
    </div>    
</body>
</html>
