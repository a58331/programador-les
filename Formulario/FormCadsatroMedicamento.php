<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Medicamento</title>
    <link rel="stylesheet" href="../Estilo/styles.css">
    
</head>
<body>

    <div class="form-container">
        <h2>CADASTRO DE MEDICAMENTOS</h2>
        <form action="/cadastro-medicamento" method="POST">
            
            <div class="form-group">
                <label for="nome-medicamento">Nome do Medicamento:</label>
                <input type="text" id="nome-medicamento" name="nome_medicamento" required>
            </div>
            
            <div class="form-group">
                <label for="dataproducao">Data de Produção:</label>
                <input type="date" id="dataproducao" name="dataproducso" required>
            </div>
            
            <div class="form-group">
                <label for="datavalidade">Data de Validade:</label>
                <input type="date" id="datavalidade" name="datavalidade" required>
            </div>

            <div class="form-group">
                <label for="quantidade">Quantidade Recebida:</label>
                <input type="number" id="quantidade" name="quantidade" min="1" required>
            </div>

            <div class="form-group">
                <label for="preco">Preço Unitário (MZN):</label>
                <input type="number" id="preco" name="preco" min="0" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="data">Data de Chegada:</label>
                <input type="date" id="data" name="data_chegada" required>
            </div>

            <button type="submit">Cadastrar Medicamento</button>
        </form>
    </div>

</body>
</html>
