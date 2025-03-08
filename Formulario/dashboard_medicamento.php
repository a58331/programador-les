<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard do Vendedor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .dashboard-container {
            max-width: 1000px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        .dashboard-container h2 {
            text-align: center;
        }
        .stats {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .stat-box {
            width: 30%;
            background-color: #007bff;
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 5px;
        }
        .stat-box h3 {
            margin: 0;
        }
        .stat-box p {
            font-size: 24px;
            margin: 10px 0 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <div class="dashboard-container">
        <h2>Dashboard do Vendedor</h2>

        <div class="stats">
            <div class="stat-box">
                <h3>Total de Vendas</h3>
                <p>100</p>
            </div>
            <div class="stat-box">
                <h3>Total de Medicamentos Vendidos</h3>
                <p>200</p>
            </div>
            <div class="stat-box">
                <h3>Total em €</h3>
                <p>5000 €</p>
            </div>
        </div>

        <h3>Histórico de Vendas</h3>
        <table>
            <thead>
                <tr>
                    <th>Paciente</th>
                    <th>Medicamento</th>
                    <th>Quantidade</th>
                    <th>Preço Unitário</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>José da Silva</td>
                    <td>Paracetamol</td>
                    <td>2</td>
                    <td>20 €</td>
                    <td>2024-10-24</td>
                </tr>
                <tr>
                    <td>Ana Maria</td>
                    <td>Ibuprofeno</td>
                    <td>1</td>
                    <td>50 €</td>
                    <td>2024-10-24</td>
                </tr>
                <!-- Outras vendas serão listadas aqui -->
            </tbody>
        </table>
    </div>

</body>
</html>
