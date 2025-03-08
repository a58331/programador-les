
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilo/funcionario-styles.css">
    <title>Sistema de Gestão de Clínica</title>
</head>
<body>

    

    <form action="../Procedimento/inserirPaciente.php" method="POST" class="form-container form-funcionario">

        <div class="success-message">
            <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
                    <p style="color: green;">Paciente cadastrado com sucesso!</p>
                <?php endif; ?>

        </div>    
    

        <h2>CADASTRO DE PACIENTES</h2>

       

        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" class="nome" placeholder="Digite o Nome do Paciente" required title="Por favor, Preencha campo Nome">
        </div>

       

        <div class="form-group">
            <label for="idade">Idade:</label>
            <input type="text" id="idade" name="idade" class="idade" required>


        </div>
        <div class="form-group">
            <label for="idade">Data de Nascimento:</label>
            <input type="date" id="datanascimento" name="datanascimento" class="datanascimento" required>


        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="email" placeholder="Digite o Email" required>
        </div>

    

        <div class="form-group">
            <label for="sexo">Sexo:</label>
            <select name="sexo" id="sexo" required>
                <option value="">Selecione o Sexo</option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
            </select>
        </div>

        <div class="form-group">
            <label for="bairro">Cidade/Bairro:</label>
            <input type="text" id="cidade_bairro" name="cidade_bairro" class="cidade_bairro" placeholder="Digite a Cidade/Bairro" required>
        </div>

        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone" class="telefone" placeholder="Digite o Telefone" required pattern="\d*" title="Somente números são permitidos.">
            <small>Digite um número de telefone válido (10 a 15 dígitos).</small>
        </div>

        <div class="form-group">
            <label for="gruposaguineo">Grupo Sanguíneo:</label>
            <select name="gruposaguineo" id="gruposaguineo" required>
                <option value="">Selecione Grupo</option>
                <option value="A Positivot">A+</option>
                <option value="A Negativo">A-</option>
                <option value="B Positivot">B+</option>
                <option value="B Negativo">B-</option>
                <option value="AB Positivot">AB+</option>
                <option value="AB Negativo">AB-</option>
                <option value="O Positivot">O+</option>
                <option value="O Negativo">O-</option>
            </select>
        </div>

        <div class="form-group">
            <label for="naturalidade">Naturalidade:</label>
            <input type="text" id="naturalidade" name="naturalidade" class="naturalidade" placeholder ="Introduza Naturalidade"  require>
        </div>

        <div class="form-group">
            <label for="estadocivil">Estado Civil:</label>
            <select name="estadocivil" id="estadocivil" required>
                <option value="">Selecione Estado Civil</option>
                <option value="Solteiro">Solteiro</option>
                <option value="Casado">Casado</option>
                <option value="Divorciado">Divorciado</option>
                <option value="Outro">Outro</option>
                
            </select>
        </div>
        
        <div class="form-group">
            <label for="tiposervico">Tipo de Serviço:</label>
            <select name="tiposervico" id="tiposervico" required>
                <option value="">Selecione Grupo</option>
                <option value="Consulta Geral">Consulta Geral</option>
                <option value="Oftalmologia">Oftalmologia</option>
                <option value="Pequena Cirurgia">Pequena Cirurgia</option>
                <option value="Ecografia">Ecografia</option>
                <option value="Raio X">Raio X</option>
                <option value="Emograma Completo">Emograma Completo</option>
                <option value="Gota Especie">Gota Especie</option>
                <option value="VIH">VIH</option>
            </select>
        </div>

        <div class="form-group">
            <label for="valordoservicos">Valor do Serviço:</label>
            <input type="text" id="valordoservicos" name="valordoservicos" class="valordoservicos" placeholder ="Introduza valor do Servicos"  require>
        </div>

        <div class="form-group">
            <label for="formapagamento">Forma de Pagamento:</label>
            <select name="tiposervico" id="tiposervico" required>
                <option value="">Selecione Forma de Pagamento</option>
                <option value="Dinheiro">Dinheiro</option>
                <option value="Por Cartão">Por Cartão</option>
                <option value="Convênio">Convênio</option>
                
            </select>
        </div>

        <div class="form-group">
            <label for="estadopagamento">Estado de Pagamento:</label>
            <select name="estadopagamento" id="estadopagamento" required>
                <option value="">Selecione Estado de Pagamento</option>
                <option value="Pago">Pago</option>
                <option value="Pendente">Pendênte</option>
               
                
            </select>
        </div>

        <div class="form-group">
            <label for="contatoemergencia">Contato de Emergência:</label>
            <input type="text" id="contatoemergencia" name="contatoemergencia" class="contatoemergencia" placeholder ="Introduza Telefone de Emergência"  require>
        </div>

        <div class="form-group">
            <label for="nomeemergencia">Pessoa de Emergência:</label>
            <input type="text" id="nomeemergencia" name="nomeemergencia" class="nomeemergencia" placeholder ="Introduza Nome da pessao"  require>
        </div>
      



        <div class="button-group">
            <button type="submit" class="btn-submit">Enviar</button>
            <button type="reset" class="btn-cancel">Cancelar</button>
        </div>

     

    </form>
</body>
</html>
