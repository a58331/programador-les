<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Funcionários</title>
    <link rel="stylesheet" href="../Estilo/estilotb.css">
</head>
<body>
    <form action="tbFuncionario.php" method="POST" class="form-container">
        <div class="search-container">
            <input 
                type="text" 
                id="nifPesquisa" 
                name="nif" 
                placeholder="Pesquisar por NIF" 
                value="<?php echo isset($_POST['nif']) ? htmlspecialchars($_POST['nif']) : ''; ?>"
            >
            <button type="submit" id="btnPesquisar" class="btn-pesquisar">Pesquisar</button>
        </div>

        <div>
            <table id="tabelaPacientes" >
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>NIF</th>
                        <th>Cargo</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Inclui o arquivo de conexão
                    include(__DIR__ . '/../Conexao/conn.php');

                    $database = new Database();
                    $conn = $database->conn;

                    // Verifica a conexão
                    if ($conn->connect_error) {
                        die("Erro na conexão: " . $conn->connect_error);
                    }

                    // Define a consulta SQL com ou sem filtro de NIF
                    $nif = isset($_POST['nif']) ? trim($conn->real_escape_string($_POST['nif'])) : '';
                    $query = "SELECT ID_funcionario, nome, nif, cargo FROM tb_funcionario";
                    if (!empty($nif)) {
                        $query .= " WHERE nif LIKE '%$nif%'";
                    }

                    // Executa a consulta
                    $result = $conn->query($query);

                    // Verifica o resultado
                    if (!$result) {
                        die("Erro na consulta: " . $conn->error);
                    }

                    // Exibe os resultados na tabela
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>" . htmlspecialchars($row['ID_funcionario']) . "</td>
                                    <td>" . htmlspecialchars($row['nome']) . "</td>
                                    <td>" . htmlspecialchars($row['nif']) . "</td>
                                    <td>" . htmlspecialchars($row['cargo']) . "</td>
                                    <td>
                                        <button class='selecionar' 
                                            data-id='{$row['ID_funcionario']}' 
                                            data-nome='{$row['nome']}' 
                                            data-nif='{$row['nif']}' 
                                            data-cargo='{$row['cargo']}' 
                                            onclick='selecionarFuncionario(this)'>
                                            Selecionar
                                        </button>
                                    </td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>Nenhum funcionário encontrado</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </form>

    <script>
        function selecionarFuncionario(button) {
            // Obter dados do funcionário
            const funcionario = {
                id: button.dataset.id,
                nome: button.dataset.nome,
                nif: button.dataset.nif,
                cargo: button.dataset.cargo,
            };

            // Salvar no localStorage
            localStorage.setItem('funcionarioSelecionado', JSON.stringify(funcionario));

            // Redirecionar para o formulário de destino
            window.location.href = 'FormUsuariio.php';
        }
    </script>
</body>
</html>
