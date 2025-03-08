<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestão de Clínica</title>
    <link rel="stylesheet" href="../Estilo/styles.css">
</head>
<body>
    <form id="formUsuario" action="" method="post" class="form-container">
        <h2>CADASTRO DE USUÁRIO</h2>

        <div class="form-column">
            <div class="form-group">
                <label for="busca">Buscar por NIF:</label>
                <input type="text" id="busca" name="busca" class="busca" placeholder="Digite o NIF" required>
                <div class="form-group">
                <label for="ID_funcionario">Funcionário:</label>
                <select name="ID_funcionario" id="ID_funcionario" required>
                    <option value="">Selecione Funcionário</option>
                </select>
            </div>


        </div>

        <div class="form-group">
            <label for="nome">Nome de Usuário:</label>
            <input type="text" id="nome" class="nome" placeholder="Digite Usuário" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" class="email" placeholder="Digite email" required>
        </div>
        <div class="form-group">
            <label for="password">Senha:</label>
            <div class="password-container">
                <input type="password" id="password" class="password" placeholder="Digite a senha" required>
                <span id="togglePassword" class="toggle-password">👁️</span>
            </div>
        </div>
        <div class="form-group">
            <label for="confirPassword">Confirma Senha:</label>
            <div class="password-container">
                <input type="password" id="confirPassword" class="confirPassword" placeholder="Confirme a senha" required>
                <span id="toggleConfirPassword" class="toggle-password">👁️</span>
            </div>
        </div>
        <div class="form-group">
            <label for="perfil">Perfil:</label>
            <select name="perfil" id="perfil" required>
                <option value="">Selecione um perfil</option>
                <option value="admin">Admin</option>
                <option value="medico">Médico</option>
                <option value="enfermeiro">Enfermeiro</option>
                <option value="financeiro">Financeiro</option>
                <option value="recepcionista">Recepcionista</option>
            </select>
        </div>
        <div class="form-group">
            <label for="dataCadastro">Data de Cadastro:</label>
            <input type="date" id="dataCadastro" class="data_cadastro" required>
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <select name="status" id="status" required>
                <option value="">Selecione o status</option>
                <option value="ativo">Ativo</option>
                <option value="inativo">Inativo</option>
            </select>
        </div>

        <div class="button-group">
            <button type="submit" class="btn-submit">Enviar</button>
            <button type="reset" class="btn-cancel">Cancelar</button>
        </div>

        <script src="../JS/buscarFuncionario.js"></script>


      <script src="../JS/validarUsuario.js"></script>
    </form>
</body>
</html>


  
