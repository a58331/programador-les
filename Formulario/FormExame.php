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
        <h2>AGENDAMENTO DE EXAMES</h2>

        <div class="form-group">
            <label for="paciente">Paciente:</label>
            <select name="paciente" id="paciente" required>
                <option value="">Selecione Paciente</option>
                <option value="Jose">Jose</option>
                <option value="Orlando">Orlando</option>
            </select>
        </div>

        <div class="form-group">
            <label for="medico">Médico:</label>
            <select name="medico" id="medico" required>
                <option value="">Selecione Médico</option>
                <option value="Jose">Jose</option>
                <option value="Orlando">Orlando</option>
            </select>
        </div>

        <div class="form-group">
            <label for="exame">Descriação de Exames:</label>
            <input type="text" id="exame" name="exame" class="exame" placeholder="Descreve Exames" required>
        </div>
        <div class="form-group">
            <label for="data">Data de Exames:</label>
            <input type="date" id="data" name="data" class="data" required>
        </div>
        <div class="form-group">
            <label for="resultado">Resultado de Exames:</label>
            <textarea id="resultado" name="resultado" class="resultado" placeholder="Descreve Resultado de Exames" required></textarea>
        </div>
        <div class="form-group">
            <label for="observacao">Observação:</label>
            <textarea id="observacao" name="observacao" class="observacao" placeholder="Observação sobre Exames" required></textarea>
        </div>

        <div class="button-group">
            <button type="submit" class="btn-submit">Enviar</button>
            <button type="button" class="btn-cancel" onclick="document.querySelector('.form-container').reset();">Cancelar</button>
        </div>
    </form>
</body>
</html>
