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
            <th>Códico</th>
          </tr>
        </thead>
        <tbody id="listaPacientes">
          <!-- Os pacientes serão inseridos dinamicamente aqui -->
          <!-- Exemplo de linha com link para o formulário -->
          <tr>
            <td><a href="FomConsulta.php">João da Silva</a></td>
            <td>001</td>
          </tr>
          <tr>
            <td><a href="FomConsulta.php">Inacio Lona</a></td>
            <td>001</td>
          </tr>
          <tr>
            <td><a href="FomConsulta.php">Marinho da Costa</a></td>
            <td>002</td>
        </tr>
            <tr>
                <td><a href="FomConsulta.php">Abel Fernandes</a></td>
            <td>003</td>
        </tr>
    </tr>
            <td><a href="FomConsulta.php">Miguel dos Santos</a></td>
            <td>004</td>
          </tr>
            
        </tbody>
      </table>
      
</body>
</html>s