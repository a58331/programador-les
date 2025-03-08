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
        <h2 class="form-group-full">CADASTRO DE CAMAS</h2>

        

        <div class="form-group">
            <label for="quarto">Quarto:</label>
            <input type="text" id="quarto" name="quarto" placeholder="Digite Quarto" required>
        </div>
        <div class="form-group">
            <label for="numcama">Número Cama:</label>
            <input type="text" id="numcama" name="numcama" placeholder="Digite Número de Cama" required>
        </div>

        <div class="form-group">
            <label for="status">Status:</label>
            <select name="status" id="status" required>
                <option value="">Selecione Status</option>
                <option value="Disponivel">Disponivel</option>
                <option value="Ocupado">Ocupado</option>
            </select>
        </div>

        <div class="form-group">
            <label for="pacienteasociado">Paciente Asociado a Cama</label>
            <input type="text" id="pacienteasociado" name="pacienteasociado" placeholder="Digite Paciente Asociado a Cama" required>
        </div>

        <div class="button-group">
            <button type="submit" class="btn-submit">Enviar</button>
            <button type="button" class="btn-cancel" onclick="document.querySelector('.form-container').reset();">Cancelar</button>
        </div>
    </form>
</body>
</html>
