<?php
include(__DIR__ . '/../Conexao/conn.php');

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

header('Content-Type: application/json');

if (isset($_GET['nif']) && !empty($_GET['nif'])) {
    $nif = $_GET['nif'];

    


    try {
        $database = new Database();
        $conn = $database->conn;

        // Busca pelo NIF exato
        $sql = "SELECT ID_funcionario, nome FROM tb_funcionario WHERE nif = ? LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $nif);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $funcionarios = $result->fetch_all(MYSQLI_ASSOC);
            echo json_encode($funcionarios);
        } else {
            echo json_encode([]); // Nenhum funcionário encontrado
        }
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['error' => 'Erro ao buscar funcionário: ' . $e->getMessage()]);
    }
} else {
    http_response_code(400);
    echo json_encode(['error' => 'Parâmetro NIF não informado']);
}
?>
