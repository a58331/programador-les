<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestão de Clínica - Cadastro de Funcionário</title>
    <link rel="stylesheet" href="../Estilo/funcionario-styles.css">

</head>
<body>
    <form action="../Procedimento/inserirFuncionario.php" method="post" class="form-container form-funcionario"  autocomplete="off"> <!-- Adicionamos a classe 'form-funcionario' -->

    <div class="success-message">
            <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
                    <p style="color: green;">Funcionário Cadastrado com sucesso!</p>
                <?php endif; ?>

        </div>  

        <h2>CADASTRO DE FUNCIONÁRIO</h2> <!-- Título do formulário -->
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" class="nome" placeholder="Digite o Nome do Funcionário" required>
        </div>
        <div class="form-group">
            <label for="dataNascimento">Data de Nascimento:</label>
            <input type="date" id="dataNascimento" name="dataNascimento" class="dataNascimento" required>
        </div>
        <div class="form-group">
            <label for="nif">NIF:</label>
            <input type="text" id="nif" name="nif" class="nif" placeholder="Digite o NIF" required>
        </div>
        <div class="form-group">
            <label for="cidade_bairro">Bairro/Cidade:</label>
            <input type="text" id="cidade_bairro" name="cidade_bairro" class="cidade_bairro" placeholder="Digite o Bairro/Cidade" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="email" placeholder="Digite o Email" required>
        </div>
        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" class="telefone" placeholder="Digite o Telefone" required>
        </div>
        <div class="form-group">
            <label for="cargo">Cargo:</label>
            <select name="cargo" id="cargo" required>
                <option value="">Selecione o Cargo</option>
                <option value="Médico">Médico</option>
                <option value="Enfermeiro">Enfermeiro</option>
                <option value="Administrador">Administrador</option>
                <option value="Financeiro">Financeiro</option>
                <option value="Recepcionista">Recepcionista</option>
                <option value="Servente">Servente</option>
                <option value="Assistente Social">Assistente Social</option>
                <option value="Formaceutico">Formaceutico</option>
                <option value="Segurança">Segurança</option>
                <option value="Secretario">Secretario</option>
                <option value="Egenheiro Informático">Egenheiro Informático</option>
                <option value="Técnico Informatico">Técnico Informatico</option>
            </select>
        </div>
        <div class="form-group">
            <label for="especialidade">Especialidade:</label>
            <select name="especialidade" id="especialidade" required>
                <option value="">Selecione a Especialidade</option>
                <option value="Cardiologia">Cardiologia</option>
                <option value="Pediatria">Pediatria</option>
                <option value="Oftalmologia">Oftalmologia</option>
                <option value="Enfermagem Geral">Dermatologia</option>
                <option value="Dermatologia">Enfermagem Geral</option>
                <option value="Médico de Clinica Geral">Médico de Clinica Geral</option>
                <option value="Outros">Outros</option>
            </select>
        </div>
        <div class="form-group">
            <label for="departamento">Departamento:</label>
            <select name="departamento" id="departamento" required>
                <option value="">Selecione o Departamento</option>
                <option value="Cardiologia">Cardiologia</option>
                <option value="Pediatria">Pediatria</option>
                <option value="Oftalmologia">Oftalmologia</option>
                <option value="Administração">Administração</option>
                <option value="Pesoais Menores">Pesoais Menores</option>
                <option value="Informatica">Informatica</option>
            </select>
        </div>
        <div class="form-group">
            <label for="dataContratacao">Data de Contratação:</label>
            <input type="date" id="dataContratacao" name="dataContratacao" class="dataContratacao" required>
        </div>
        <div class="form-group">
            <label for="salario">Salário:</label>
            <input type="text" id="salario" name="salario" class="salario" placeholder="Digite o Salário">
        </div>
        <div class="form-group">
            <label for="horarioTrabalho">Horário de Trabalho:</label>
            <select name="horarioTrabalho" id="horarioTrabalho" required>
                <option value="">Selecione o Horário</option>
                <option value="Período Integral">Período Integral</option>
                <option value="Meio Período">Meio Período</option>
                <option value="Rotativo">Rotativo</option>
            </select>
        </div>
        <div class="form-group">
            <label for="numeroRegisto">Número de Registro:</label>
            <input type="text" id="numeroRegisto" name="numeroRegisto" class="numeroRegisto" placeholder="Digite o Número de Registro">
        </div>
        <div class="form-group">
            <label for="estado">Estado:</label>
            <input type="text" id="estado" name="estado" class="obsestado" placeholder="Digite uma estado">
        </div>
        <div class="button-group">
            <button type="submit" class="btn-submit">Enviar</button>
            <button type="button" class="btn-cancel">Cancelar</button>
        </div>

        
    </form>
</body>
</html>
