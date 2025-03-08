<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilo/styles.css">
    <title>Prescrição Médica</title>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
</head>
<body>
    <form id="prescricaoForm" class="form-container">
        <h2>PRESCRIÇÃO MÉDICA</h2>
        <div class="form-group">
            <label for="medico">Médico:</label>
            <input type="text" id="medico" required>
        </div>
        <div class="form-group">
            <label for="paciente">Paciente:</label>
            <input type="text" id="paciente" required>
        </div>
        
        <!-- Área para adicionar medicamentos dinamicamente -->
        <div id="medicamentosContainer">
            <div class="form-group medicamento-dosagem">
                <label for="medicamento">Medicamento:</label>
                <input type="text" class="medicamento" required>
                <label for="dosagem">Dosagem:</label>
                <input type="text" class="dosagem" required>
            </div>
        </div>

        <!-- Botão para adicionar mais medicamentos -->
        <button type="button" id="addMedicamentoBtn">Adicionar Medicamento</button>
        
        <div class="form-group">
            <label for="orientacoes">Orientações:</label>
            <textarea id="orientacoes" required></textarea>
        </div>
        
        <div class="button-group">
            <button type="submit" class="btn-submit">Gerar Prescrição</button>
            <button type="reset" class="btn-cancel">Cancelar</button>
        </div>
        <script src="../JS/prescricaomedica.js"></script>
    </form>

</body>
</html>
