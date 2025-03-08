<?php
        // Incluir a classe de conexão com o banco
        include(__DIR__ . '/../Conexao/conn.php');
; 

        // Criar a instância da classe Database e testar a conexão
        $database = new Database();
        $database->testConnection();
        ?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestão de Clínica</title>
    <link rel="stylesheet" href="../Estilo/styles.css">
</head>
<body>
    <header>
        <h1>SISTEMA DE GESTÃO DE CLÍNICA</h1>
        <nav>
            <ul class="menu">
                <li><a href="FormUsuario.php">Cadastro de Usuários</a></li>
                <li><a href="FormFuncionario.php">Gestão de Funcionários</a></li>
                <li><a href="FormPaciente.php">Cadastro de Pacientes</a></li>
                <li><a href="FormTriagem.php">Agendamento de Consultas</a></li>
                <li><a href="FormFaturas.php">Gestão de Faturas</a></li>
                <li><a href="adimin_dashboard.php">Painel de Controle</a></li>
                <li><a href="FormServico.php">Serviços</a></li>
                <li><a href="FormLogin.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="content">
            <h2>Bem-vindo ao Sistema de Gestão de Clínica</h2>
            <p>Utilize os menus acima para acessar as funcionalidades do sistema.</p>

            <!-- Exibindo a mensagem de conexão -->
            <div class="connection-message">
                <?php 
                    $database->testConnection(); 
                ?>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Sistema de Gestão de Clínica. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
