<?php
include(__DIR__.'/../Conexao/conn.php');

$database = new Database();
$conn = $database->conn;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (!isset(
        $_POST['nome'], $_POST['nif'], $_POST['email'], $_POST['cargo'],
        $_POST['departamento'], $_POST['salario'], $_POST['numeroRegisto'],
        $_POST['dataNascimento'], $_POST['cidade_bairro'], $_POST['telefone'],
        $_POST['especialidade'], $_POST['dataContratacao'], $_POST['horarioTrabalho'],
        $_POST['estado']
    )) {
        die("Err: Campos Obrigatórios ausente.");
    }

    // Recuperar do Formulário
    $nome = $_POST['nome'];
    $nif = $_POST['nif'];
    $email = $_POST['email'];
    $cargo = $_POST['cargo'];
    $departamento = $_POST['departamento'];
    $salario = (float) $_POST['salario'];
    $numeroRegisto = (int) $_POST['numeroRegisto'];
    $dataNascimento = $_POST['dataNascimento'];
    $cidade_bairro = $_POST['cidade_bairro'];
    $telefone = $_POST['telefone'];
    $especialidade = $_POST['especialidade'];
    $dataContratacao = $_POST['dataContratacao'];
    $horatrabalha = $_POST['horarioTrabalho'];
    $estado = $_POST['estado'];

    // Inserir no banco de dados
    $sql = "INSERT INTO tb_funcionario (
        nome, nif, email, cargo, departamento, salario, numeroRegisto, dataNascimento,
        cidade_bairro, telefone, especialidade, dataContratacao, horarioTrabalho, estado
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Erro ao preparar a consulta: " . $conn->error);
    }

    $stmt->bind_param(
        'sssssdisssssss',
        $nome, $nif, $email, $cargo, $departamento, $salario, $numeroRegisto, $dataNascimento,
        $cidade_bairro, $telefone, $especialidade, $dataContratacao, $horatrabalha, $estado
    );

    if ($stmt->execute()) {
        // Redirecionar de volta ao formulário com sucesso
        header("Location: ../Formulario/FormFuncionario.php?success=1");
        exit;
    } else {
        echo "Erro ao Inserir dados: " . $stmt->error;
    }
}
?>
