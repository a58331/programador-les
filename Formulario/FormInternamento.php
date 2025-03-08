<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestão de Clínica</title>
    <link rel="stylesheet" href="../Estilo/funcionario-styles.css">
    
</head>
<body>
    <form action="" method="post" class="form-container">
        <h2 class="form-group-full">FORMULÁRIO DE INTERNAMENTO</h2>

        <div class="form-group">
            <label for="paciente">Paciente:</label>
            <select name="paciente" id="paciente" required>
                <option value="">Selecione Paciente</option>
                <option value="Jose">Jose</option>
                <option value="Orlando">Orlando</option>
            </select>
        </div>

        <div class="form-group">
            <label for="datasaida">Data de Saída:</label>
            <input type="date" id="datasaida" name="datasaida" required>
        </div>
        <div class="form-group">
            <label for="dataentrada">Data de Entrada:</label>
            <input type="date" id="dataentrada" name="dataentrada" required>
        </div>

        <div class="form-group">
            <label for="motivointernamento">Motivo de Internamento:</label>
            <input type="text" id="motivointernamento" name="motivointernamento" placeholder="Descreva o motivo do internamento" required>
        </div>

        <div class="form-group">
            <label for="quarto">Quarto:</label>
            <input type="text" id="quarto" name="quarto" placeholder="Digite o número do quarto" required>
        </div>

        <div class="form-group">
            <label for="numecama">Número de Cama:</label>
            <input type="text" id="numecama" name="numecama" placeholder="Digite o número da cama" required>
        </div>

        <div class="form-group">
            <label for="medicoresponsavel">Médico Responsável:</label>
            <input type="text" id="medicoresponsavel" name="medicoresponsavel" placeholder="Digite o nome do médico responsável" required>
        </div>

        <div class="form-group-full">
            <label for="observacao">Observação:</label>
            <textarea id="observacao" name="observacao" placeholder="Observações sobre o internamento" required></textarea>
        </div>

        <div class="button-group">
            <button type="submit" class="btn-submit">Enviar</button>
            <button type="button" class="btn-cancel" onclick="document.querySelector('.form-container').reset();">Cancelar</button>
        </div>
    </form>
</body>
</html>
