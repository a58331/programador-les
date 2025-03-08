<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Administrador</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #191970;
            color: white;
            padding: 15px;
            text-align: center;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px;
        }

        .card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 10px;
            flex: 1;
            min-width: 200px;
            max-width: 30%;
        }

        .card h3 {
            margin-top: 0;
        }

        .card p {
            font-size: 18px;
            color: #555;
        }

        .table-container {
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        td {
            background-color: #f9f9f9;
        }

        .footer {
            background-color: #191970;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>Dashboard do Administrador</h1>
    </div>

    <div class="container">
        <!-- Cartões de Estatísticas -->
        <div class="card">
            <h3>Total de Consultas</h3>
            <p>120</p>
        </div>
        <div class="card">
            <h3>Total de Pacientes</h3>
            <p>450</p>
        </div>
        <div class="card">
            <h3>Receita Mensal</h3>
            <p> 75.000 €</p>
        </div>
    </div>

    <div class="container">
        <!-- Cartões de Outros Indicadores -->
        <div class="card">
            <h3>Consultas Hoje</h3>
            <p>25</p>
        </div>
        <div class="card">
            <h3>Médicos Ativos</h3>
            <p>10</p>
        </div>
        <div class="card">
            <h3>Novo Pacientes este mês</h3>
            <p>30</p>
        </div>
    </div>

    <!-- Tabela de Consultas Recentes -->
    <div class="table-container">
        <h2>Consultas Recentes</h2>
        <table>
            <thead>
                <tr>
                    <th>Paciente</th>
                    <th>Médico</th>
                    <th>Data</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Maria Silva</td>
                    <td>Dr. João</td>
                    <td>20/10/2024</td>
                    <td>Concluída</td>
                </tr>
                <tr>
                    <td>Pedro Santos</td>
                    <td>Dr. Clara</td>
                    <td>19/10/2024</td>
                    <td>Agendada</td>
                </tr>
                <tr>
                    <td>Ana Souza</td>
                    <td>Dr. Marcos</td>
                    <td>18/10/2024</td>
                    <td>Cancelada</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="footer">
        <p>Clínica Bessy - Todos os direitos reservados © 2024</p>
    </div>

</body>
</html>
