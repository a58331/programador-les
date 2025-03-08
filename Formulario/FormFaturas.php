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
        <h2 class="form-group-full">GESTÃO DE FATURAS</h2>

        <div class="form-group">
            <label for="paciente">Paciente:</label>
            <select name="paciente" id="paciente" required>
                <option value="">Selecione Paciente</option>
                <option value="Alexandre">Alexandre</option>
                <option value="Fabian">Fabian</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="Serico">Serviço:</label>
            <select name="Servico" id="servico" required>
                <option value="">Selecione Serviço</option>
                <option value="Consulta">Consulta</option>
                <option value="Exame">Exame</option>
            </select>
        </div>

        

        <div class="form-group">
            <label for="valor">Valor:</label>
            <input type="text" id="valor" name="valor" placeholder="Digite valor" required>
        </div>
        <div class="form-group">
            <label for="datavencimento">Data de Vencimento:</label>
            <input type="date" id="datavencimento" name="datavencimento" required>
        </div>

        
        <div class="form-group">
            <label for="Status">Status:</label>
            <select name="Status" id="Status" required>
                <option value="">Selecione Status</option>
                <option value="Pago">Pago</option>
                <option value="Não Pago">Não Pago</option>
            </select>
        </div>

        <div class="button-group">
            <button type="submit" class="btn-submit">Enviar</button>
            <button type="button" class="btn-cancel" onclick="document.querySelector('.form-container').reset();">Cancelar</button>
        </div>
    </form>
</body>
</html>
