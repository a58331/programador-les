<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilo/styles.css">
    <title>Document</title>
</head>
<body>
    <form id="consultaForm"class="form-container form-funcionario">
        <h2>FORMULÁRIO DE CONSULTA</h2>
        <div>
            <label for="nome">Nome do Paciente:</label>
            <input type="text" id="nome" name="nome" readonly>
        </div>
        
        <div>
            <label for="idade">Idade:</label>
            <input type="number" id="idade" name="idade" readonly>
        </div>
    
        <div>
            <label for="sintomas">Sintomas:</label>
            <textarea id="sintomas" name="sintomas" readonly></textarea>
        </div>
    
        <div>
            <label for="sinaisVitais">Sinais Vitais:</label>
            <input type="text" id="sinaisVitais" name="sinaisVitais" readonly>
        </div>
    
        <div>
            <label for="diagnostico">Diagnóstico:</label>
            <textarea id="diagnostico" name="diagnostico"></textarea>
        </div>
    
        <div>
            <label for="prescricao">Data de Consulta:</label>
            <input type="date" value="dataconsulta">
        </div>
    
        <div>
            <button type="submit">Salvar Consulta</button>
        </div>
    </form>
    
</body>
</html>