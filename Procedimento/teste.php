<?php



include(__DIR__ . '/../Conexao/conn.php'); // Caminho correto para a conexão

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Captura os dados enviados
    $nome = $_POST['nome'] ?? 'Nome não enviado';
    $email = $_POST['email'] ?? 'Email não enviado';
    $sexo = $_POST['sexo'] ?? 'Sexo não enviado';
    $telefone = $_POST['telefone'] ?? 'Telefone não enviado';
    $idade = $_POST['idade'] ?? 'Idade não enviada';
    $cidade_bairro = $_POST['cidade_bairro'] ?? 'Cidade/Bairro não enviado';
    $historico = $_POST['historico'] ?? 'Histórico não enviado';
    $foto = $_POST['foto'] ?? 'Foto não enviado';

    // Exibe os dados recebidos
    echo "<h2>Dados Recebidos:</h2>";
    echo "Nome: $nome<br>";
    echo "Email: $email<br>";
    echo "Sexo: $sexo<br>";
    echo "Telefone: $telefone<br>";
    echo "Idade: $idade<br>";
    echo "Cidade/Bairro: $cidade_bairro<br>";
    echo "Histórico Médico: $historico<br>";
    echo "Foto: $foto<br>";
} else {
    echo "Nenhum dado enviado.";
}
?>
