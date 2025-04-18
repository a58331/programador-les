<?php
        // Incluir a classe de conexão com o banco
        include(__DIR__ . '/../Conexao/conn.php');
; 

        // Criar a instância da classe Database e testar a conexão
        $database = new Database();
        $database->testConnection();
        ?>
<!DOCTYPE html> 
<html lang="pt-PT">
<head>
  <meta charset="UTF-8">
  <title>www.borasite.com.gw</title>
  <link rel="stylesheet" href="../formatacao_Css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
  <header>
    
    <nav>
        <ul class="menu">
            <li><a href="FormUsuario.php"> Usuários</a></li>
            <li><a href="FormFuncionario.php"> Funcionários</a></li>
            <li><a href="FormPaciente.php"> Pacientes</a></li>
            <li><a href="FormTriagem.php"> Consultas</a></li>
            <li><a href="FormFaturas.php">Faturas</a></li>
            <li><a href="adimin_dashboard.php">Controle</a></li>
            <li><a href="FormServico.php">Serviços</a></li>
            <li><a href="FormLogin.php">Logout</a></li>
        </ul>
    </nav>
</header>

  <!-- CONTEÚDO DIVIDIDO EM DUAS COLUNAS -->
  <main class="conteudo">
    <div class="coluna-esquerda">
    <h1>Bem-vindo à Clínica Bessie!</h1>
      <p class="info-link">
        <a href="#">Informação Sobre Clínica.</a><br><br>
        <a href="#">Horário de Funcionamento.</a>
      </p>

      <!-- Calendário em tempo real -->
      <div class="calendario" id="calendario"></div>
      <div class="hora" id="hora"></div>
    </div>

    <div class="coluna-direita">
      <img src="../imagem/medico.png" alt="Imagem de médico">
    </div>
  </main>

  <!-- RODAPÉ COM REDES SOCIAIS -->
  <footer>
    <div class="contato">
      <p><i class="fas fa-phone"></i> Telefone: 351 920575367</p>
      <p><i class="fas fa-envelope"></i> Email: joselesindami@gmail.com</p>
      <p><i class="fab fa-whatsapp"></i> WhatsApp: 920575367</p>
    </div>

    <div class="social">
      <a href="https://www.facebook.com" target="_blank">
        <img src="../imagem/facebook.png" alt="Facebook">
      </a>
      <a href="https://www.instagram.com" target="_blank">
        <img src="../imagem/instagram.jpg" alt="Instagram">
      </a>
      <a href="https://www.whatsapp.com" target="_blank">
        <img src="../imagem/whatsapp.jpg" alt="Whatsapp">
      </a>
      <a href="https://www.twitter.com" target="_blank">
        <img src="../imagem/twitter.png" alt="Twitter">
      </a>
      <a href="https://www.tiktok.com" target="_blank">
        <img src="../imagem/tiktok.png" alt="Tiktok">
      </a>
    </div>

    <div class="direitos">
      <p>&copy; 2025 Todos os direitos reservados</p>
    </div>

    <script>
      function atualizarDataHora() {
        const calendario = document.getElementById("calendario");
        const horaDiv = document.getElementById("hora");
        const agora = new Date();
    
        const opcoesData = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        const dataFormatada = agora.toLocaleDateString('pt-PT', opcoesData);
        const horaFormatada = agora.toLocaleTimeString('pt-PT');
    
        calendario.textContent = `📅 Hoje é ${dataFormatada}`;
        horaDiv.textContent = `🕒 Agora são ${horaFormatada}`;
      }
    
      setInterval(atualizarDataHora, 1000);
      atualizarDataHora();
    </script>
    
  </footer>

</body>
</html>
