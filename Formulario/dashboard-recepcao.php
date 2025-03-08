<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard do Recepcionista</title>
    <link rel="stylesheet" href="../Estilo/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .dashboard-container {
            max-width: 1200px;
            margin: 0 auto;
            
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #fff;
        }
        h3{
            color: #fff;
            text-align: center;
            font-size: 2pc;
        }
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }
        .stat-card {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .stat-card h3 {
            font-size: 18px;
            margin-bottom: 15px;
            
        }
        .stat-card p {
            font-size: 24px;
            font-weight: bold;
        }
        .service-table {
            width: 100%;
            margin-top: 40px;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
           
        }
        .service-table th, .service-table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .service-table th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>

    <div class="dashboard-container">
        <h2>PAINEL DE CONTROLE DE RECEPÇÃO</h2>

        <!-- Seção de estatísticas -->
        <div class="stats-grid">
            <div class="stat-card">
                <h3>Total de Pacientes Atendidos</h3>
                <p>150</p> <!-- Exemplo de número estático -->
            </div>
            <div class="stat-card">
                <h3>Faturas Pagas</h3>
                <p>120</p> <!-- Exemplo de número estático -->
            </div>
            <div class="stat-card">
                <h3>Faturas Não Pagas</h3>
                <p>30</p> <!-- Exemplo de número estático -->
            </div>
            <div class="stat-card">
                <h3>Total de Serviços</h3>
                <p>250</p> <!-- Exemplo de número estático -->
            </div>
        </div>

        <!-- Tabela de serviços -->
        <h3>Distribuição de Pacientes por Serviço</h3>
        <table class="service-table">
            <thead>
                <tr>
                    <th>Serviço</th>
                    <th>Quantidade de Pacientes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Consulta Geral</td>
                    <td>50</td> <!-- Exemplo de número estático -->
                </tr>
                <tr>
                    <td>Pequena Cirurgia</td>
                    <td>20</td> <!-- Exemplo de número estático -->
                </tr>
                <tr>
                    <td>Exame de Ecografia</td>
                    <td>30</td> <!-- Exemplo de número estático -->
                </tr>
                <tr>
                    <td>Análise Laboratorial</td>
                    <td>25</td> <!-- Exemplo de número estático -->
                </tr>
                <tr>
                    <td>Cirurgia Ocular</td>
                    <td>15</td> <!-- Exemplo de número estático -->
                </tr>
                <tr>
                    <td>Outro Serviço</td>
                    <td>10</td> <!-- Exemplo de número estático -->
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>
