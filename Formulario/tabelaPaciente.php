<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #f5f5f5;
}

a {
  text-decoration: none;
  color: #007BFF;
}

a:hover {
  text-decoration: underline;
}

    </style>
    
</head>
<body>
    
    <table>
        
        <thead>
          <tr>
            <th>Nome do Paciente</th>
            <th>Horário Agendado</th>
          </tr>
        </thead>
        <tbody id="listaPacientes">
          <!-- Os pacientes serão inseridos dinamicamente aqui -->
          <!-- Exemplo de linha com link para o formulário -->
          <tr>
            <td><a href="consulta.php?idPaciente=123">João da Silva</a></td>
            <td>10:00</td>
          </tr>
          <tr>
            <td><a href="consulta.php?idPaciente=123">Marinho da Costa</a></td>
            <td>10:20</td>
        </tr>
            <tr>
                <td><a href="consulta.php?idPaciente=123">Abel Fernandes</a></td>
            <td>10:40</td>
        </tr>
    </tr>
            <td><a href="consulta.php?idPaciente=123">Miguel dos Santos</a></td>
            <td>11:00</td>
          </tr>
            
        </tbody>
      </table>
      
</body>
</html>