<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Recepcionista</title>
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
        <h1>Dashboard da Recepcionista</h1>
    </div>

    <div class="container">
        <!-- Cartões de Estatísticas -->
        <div class="card">
            <h3>Consultas Agendadas</h3>
            <p>15</p>
        </div>
        <div class="card">
            <h3>Pacientes na Recepção</h3>
            <p>8</p>
        </div>
        <div class="card">
            <h3>Consultas Concluídas</h3>
            <p>20</p>
        </div>
    </div>

    <div class="container">
        <!-- Cartões de Tarefas Administrativas -->
        <div class="card">
            <h3>Consultas Canceladas</h3>
            <p>2</p>
        </div>
        <div class="card">
            <h3>Consultas Pendentes</h3>
            <p>3</p>
        </div>
        <div class="card">
            <h3>Pacientes Esperando</h3>
            <p>5</p>
        </div>
    </div>

    <!-- Tabela de Consultas Agendadas -->
    <div class="table-container">
        <h2>Consultas Agendadas</h2>
        <table>
            <thead>
                <tr>
                    <th>Paciente</th>
                    <th>Data</th>
                    <th>Hora</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>João da Silva</td>
                    <td>20/10/2024</td>
                    <td>08:30</td>
                    <td>Agendada</td>
                </tr>
                <tr>
                    <td>Maria Oliveira</td>
                    <td>20/10/2024</td>
                    <td>09:00</td>
                    <td>Agendada</td>
                </tr>
                <tr>
                    <td>Pedro Santos</td>
                    <td>20/10/2024</td>
                    <td>10:00</td>
                    <td>Agendada</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Tabela de Pacientes na Recepção -->
    <div class="table-container">
        <h2>Pacientes na Recepção</h2>
        <table>
            <thead>
                <tr>
                    <th>Paciente</th>
                    <th>Hora de Chegada</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Ana Souza</td>
                    <td>08:15</td>
                    <td>Esperando</td>
                </tr>
                <tr>
                    <td>Roberto Lima</td>
                    <td>08:45</td>
                    <td>Esperando</td>
                </tr>
                <tr>
                    <td>Clara Martins</td>
                    <td>09:00</td>
                    <td>Esperando</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Tabela de Consultas Canceladas -->
    <div class="table-container">
        <h2>Consultas Canceladas</h2>
        <table>
            <thead>
                <tr>
                    <th>Paciente</th>
                    <th>Data</th>
                    <th>Hora</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Carla Silva</td>
                    <td>19/10/2024</td>
                    <td>14:00</td>
                </tr>
                <tr>
                    <td>Luís Costa</td>
                    <td>18/10/2024</td>
                    <td>16:30</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="footer">
        <p>Clínica Bessy - Todos os direitos reservados © 2024</p>
    </div>

</body>
</html>
