<?php
         // Arquivo de conexão com o banco de dados orientado a objetos

class Database {
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'sgc_clinica';
    public $conn;

          // Construtor que cria a conexão
    public function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname, 3307);
             // Verificando a conexão
        if ($this->conn->connect_error) {
            die("Falha na conexão: " . $this->conn->connect_error);
        }
    }

           // Método para testar a conexão
    public function testConnection() {
        $sql = "SELECT VERSION()";
        $result = $this->conn->query($sql);

        if ($result) {
            $row = $result->fetch_assoc();
            echo "Conexão bem-sucedida! Versão do banco de dados: " . $row['VERSION()'];
        } else {
            echo "Erro na consulta: " . $this->conn->error;
        }
    }

            // Método para fechar a conexão
    public function close() {
        $this->conn->close();
    }
}
?>
