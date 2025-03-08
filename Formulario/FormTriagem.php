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
        <h2>FORMULÁRIO DE TRIAGEM</h2>

        <div class="form-group">
            <label for="paciente">Paciente:</label>
            <select name="paciente" id="paciente" required>
                <option value="">Selecione Paciente</option>
                <option value="Jose">Jose</option>
                <option value="Orlando">Orlando</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="pressaoarterial">Pressão Arterial:</label>
            <input type="text" id="pressaoarterial" name="pressaoarterial" class="pressaoarterial" placeholder="Pressão Arterial" required></textarea>
        </div>

        <div class="form-group">
            <label for="temperatura">Temperatura:</label>
            <input type="text" id="temperatura" name="temperatura" class="temperatura" placeholder="Introduza o Valor de Temperatura" required>
        </div>

        
        <div class="form-group">
            <label for="frequenciacardiaca">Frequência Cardáca:</label>
            <input type="text" id="frequenciacardiaca" name="frequenciacardiaca" class="frequenciacardiaca" placeholder="Introduza Valor de Frequência Cardíaca" required>
        </div>

        <div class="form-group">
            <label for="frequenciarespiratoria">Frequência Respiratória:</label>
            <input type="text" id="frequenciarespiratoria" name="frequenciarespiratoria" class="frequenciarespiratoria" placeholder="Introduza Frequência Respiratória" required>
        </div>

        <div class="form-group">
            <label for="peso">Peso:</label>
            <input type="text" id="Peso" name="Peso" class="Peso" placeholder="Introduza o Peso" required></textarea>
        </div>

        <div class="form-group">
            <label for="motivoconsulta">Motivo de Consulta:</label>
            <textarea id="motivoconsulta" name="motivoconsulta" class="motivoconsulta" placeholder="Descreve Motivo de Consulta" required></textarea>
        </div>

        
        <div class="form-group">
            <label for="historicobreve">Histórico Breve(Medicamentos em uso, Alergias):</label>
            <input type="text" id="historicobreve" name="historicobreve" class="historicobreve" placeholder="Histórico breve" required>
        </div>

        <div class="form-group">
            <label for="doencapreexistente">Doença Preexistente:</label>
            <select name="doencapreexistente" id="doencapreexistente" required>
                <option value="">Selecione Doença Preexistente</option>
                <option value="Diabete">Diabete</option>
                <option value="Hiperteçãon">Hipertenção</option>
            </select>
        </div>

        <div class="form-group">
            <label for="status">Especialidade:</label>
            <select name="status" id="status" required>
                <option value="">Selecione Especialidade</option>
                <option value="Consulta Geral">Clinico Geral</option>
                <option value="Oftamologia">Oftamologista</option>
                <option value="Ecografia">Ecografia</option>
                <option value="Pediateria">Pediateria</option>
                <option value="Pequena Círurgia">Pequena Círurgia</option>
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
            <label for="data">Data e Hora de Consulta:</label>
            <input type="datetime-local" id="data" name="data" class="datetime-local" required>
        </div>
       


        <div class="form-group">
            <label for="status">Status:</label>
            <select name="status" id="status" required>
                <option value="">Selecione o status</option>
                <option value="Agendada">Agendada</option>
                <option value="Cancelada">Cancelada</option>
                <option value="Realizada">Realizada</option>
                <option value="Não Atendido">Não Atendido</option>
                <option value="Pendente">Pendente</option>
            </select>
        </div>
       

        <div class="button-group">
            <button type="submit" class="btn-submit">Enviar</button>
            <button type="button" class="btn-cancel" onclick="document.querySelector('.form-container').reset();">Cancelar</button>
        </div>
    </form>
</body>
</html>
