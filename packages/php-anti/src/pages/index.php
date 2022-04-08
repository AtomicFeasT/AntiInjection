<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <!-- CSS Link -->
    <link rel="stylesheet" href="../styles/style.css">
    <!-- Font imporI -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
</head>
<body>
    <main class="main-content">
        <h1 class="welcoming-header">Preencha O Formulário Para Acessar Nossa Página!</h1>
        <form action="loginValidation.php" method="POST" class="access-form">

            <div class="email-wrapper">
                <label for="mail" class="email-label">Email</label>
                <input class="email-input" type="email" name="mail" required>
            </div>

            <div class="pass-wrapper">
                <label for="pass" class="pass-label">Senha</label>
                <input class="pass-input" type="password" name="pass" required>
            </div>

            <input class="submit-input" type="submit" value="Enviar">
        </form>
    </main>
</body>
</html>