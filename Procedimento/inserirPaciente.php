<?php
include(__DIR__ . '/../Conexao/conn.php');

    // Instanciando a classe Database
    $database = new Database();
    $conn = $database->conn; // Acesso à conexão


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Verificar se todos os campos foram enviados
    if (!isset($_POST['nome'], $_POST['email'], $_POST['sexo'], $_POST['telefone'], $_POST['cidade_bairro'],  $_POST['idade'], $_POST['historico'])) {
        die("Erro: Campos obrigatórios ausentes.");
    }

    // Recuperar valores do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];
    $telefone = $_POST['telefone'];
    $cidade_bairro = $_POST['cidade_bairro'];
    $idade = $_POST['idade'];
    $historico = $_POST['historico'];

    // Processar upload de foto
    $foto = '';
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = __DIR__ . '/../uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        $fotoName = uniqid() . '_' . basename($_FILES['foto']['name']);
        $uploadPath = $uploadDir . $fotoName;

        if (move_uploaded_file($_FILES['foto']['tmp_name'], $uploadPath)) {
            $foto = $fotoName;
        } else {
            echo "Erro ao fazer upload da foto.";
            exit;
        }
    }

    // Inserir no banco de dados
    $sql = "INSERT INTO tb_paciente (nome, email, sexo, telefone, foto, cidade_bairro, idade, historico)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssssssis', $nome, $email, $sexo, $telefone, $foto, $cidade_bairro, $idade, $historico);

    if ($stmt->execute()) {
        // Redirecionar de volta ao formulário com sucesso
        header("Location: ../Formulario/Formpaciente.php?success=1");
        exit;
    } else {
        echo "Erro ao inserir os dados: " . $conn->error;
    }
}
?>
