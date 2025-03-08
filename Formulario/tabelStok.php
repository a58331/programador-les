<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque de Medicamentos</title>
    <link rel="stylesheet" href="../Estilo/styles.css">
    <style>
        .table-container {
            max-width: 900px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .title {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="table-container">
        <h2 class="title">ESTOQUE DE MEDICAMENTOS</h2>
        
        <table>
            <thead>
                <tr>
                    <th>Nome do Medicamento</th>
                    <th>Data de Produção</th>
                    <th>Data de Validade</th>
                    <th>Quantidade em Estoque</th>
                    <th>Quantidade Vendida</th>
                    <th>Preço Unitário (€)</th>
                </tr>
            </thead>
            <tbody>
                <!-- Exemplo de dados fictícios. Os dados reais devem ser renderizados dinamicamente com back-end -->
                <tr>
                    <td>Paracetamol</td>
                    <td>2024-01-01</td>
                    <td>2025-01-01</td>
                    <td>150</td>
                    <td>50</td>
                    <td>50.00</td>
                </tr>
                <tr>
                    <td>Ibuprofeno</td>
                    <td>2024-02-15</td>
                    <td>2026-02-15</td>
                    <td>200</td>
                    <td>300</td>
                    <td>75.00</td>
                </tr>
                <tr>
                    <td>Amoxicilina</td>
                    <td>2024-03-10</td>
                    <td>2025-03-10</td>
                    <td>80</td>
                    <td>100</td>
                    <td>100.00</td>
                </tr>
                <tr>
                    <td>Omeprazol</td>
                    <td>2023-12-05</td>
                    <td>2025-12-05</td>
                    <td>120</td>
                    <td>500</td>
                    <td>85.00</td>
                </tr>
                <!-- Adicione mais linhas conforme necessário -->
            </tbody>
        </table>
    </div>

</body>
</html>
