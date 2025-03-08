<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestão de Clínica</title>
    <link rel="stylesheet" href="../Estilo/styles.css">
</head>
<body>
    <form action="" method="post" class="form-container">
        <h1>LOGIN</h1>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" class="email" name="email" placeholder="Digite seu Email" required>
        </div>
       
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="password" name="password" id="password" placeholder="Digite sua Senha" required>
        </div>

        <!-- Link para a página de cadastro de usuário -->
        <div class="form-group-full">
            <a href="FormUsuario.php" class="signup-link">Não tem uma conta? Cadastre-se aqui</a>
        </div>

        </div>

        <div class="button-group">
            <button type="submit" class="btn-submit">Login</button>
        </div>
    </form>
</body>
</html>
