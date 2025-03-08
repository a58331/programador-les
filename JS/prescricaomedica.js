// Função para adicionar um novo conjunto de campos de Medicamento e Dosagem
document.getElementById('addMedicamentoBtn').addEventListener('click', function() {
    const medicamentosContainer = document.getElementById('medicamentosContainer');

    // Criar um novo div com campos de medicamento e dosagem
    const newMedicamentoDosagem = document.createElement('div');
    newMedicamentoDosagem.classList.add('form-group', 'medicamento-dosagem');

    newMedicamentoDosagem.innerHTML = `
        <label for="medicamento">Medicamento:</label>
        <input type="text" class="medicamento" required>
        <label for="dosagem">Dosagem:</label>
        <input type="text" class="dosagem" required>
    `;

    // Adicionar o novo conjunto ao container
    medicamentosContainer.appendChild(newMedicamentoDosagem);
});

// Evento de envio do formulário para gerar o PDF
document.getElementById('prescricaoForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Impede o envio do formulário

    // Obtendo os dados do formulário
    const medico = document.getElementById('medico').value;
    const paciente = document.getElementById('paciente').value;
    const orientacoes = document.getElementById('orientacoes').value;

    // Obtendo os medicamentos e dosagens
    const medicamentos = Array.from(document.querySelectorAll('.medicamento')).map(input => input.value);
    const dosagens = Array.from(document.querySelectorAll('.dosagem')).map(input => input.value);

    // Gerar o PDF
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();

    // Adicionando o cabeçalho
    const nomeClinica = "Clínica Bessy";
    const localizacao = "Estrada de Graja Proximo de Pneucarro";
    const telefone = "(245) 95570-7375";
    const email = "bessycli@clinica.com";

    doc.setFontSize(12);
    doc.text(nomeClinica, 20, 10); // Nome da clínica
    doc.text(localizacao, 20, 15); // Localização
    doc.text(telefone, 20, 20);    // Telefone
    doc.text(email, 20, 25);       // Email

    // Adicionando uma linha horizontal
    doc.setLineWidth(0.5);
    doc.line(20, 30, 190, 30); // Linha horizontal

    // Adicionando conteúdo da prescrição
    doc.setFontSize(14);
    doc.text(`Prescrição Médica`, 20, 40);
    doc.setFontSize(12);

    // Espaço maior entre o nome do paciente e medicamentos
    doc.text(`Paciente: ${paciente}`, 20, 55);

    // Medicamentos e dosagens
    let currentY = 70; // Posição inicial para os medicamentos

    medicamentos.forEach((medicamento, index) => {
        doc.text(`Medicamento: ${medicamento}`, 20, currentY);
        doc.text(`Dosagem: ${dosagens[index]}`, 100, currentY);
        currentY += 10; // Incrementar a posição Y para o próximo item
    });

    // Adicionando orientações
    currentY += 10; // Dar mais espaço após a lista de medicamentos
    doc.text(`Orientações: ${orientacoes}`, 20, currentY);

    // Rodapé com o nome do médico e linha para assinatura
    currentY += 40; // Espaçamento antes do nome do médico
    doc.text(`Médico: ${medico}`, 20, currentY + 10);
    doc.line(20, currentY + 15, 80, currentY + 15); // Linha para assinatura

    // Linha para carimbo
    doc.text("Carimbo:", 100, currentY + 10);
    doc.line(100, currentY + 15, 160, currentY + 15); // Linha para o carimbo

    // Aumentando o espaçamento para adicionar a data e hora abaixo da linha do carimbo
    currentY += 40; // Dar mais espaço após a linha do carimbo

    // Obtendo a data e a hora atuais
    const dataAtual = new Date();
    const dataFormatada = dataAtual.toLocaleDateString();  // Exemplo: "20/10/2024"
    const horaFormatada = dataAtual.toLocaleTimeString();  // Exemplo: "14:30:00"

    // Adicionando data e hora abaixo da linha do carimbo
    doc.text(`Data: ${dataFormatada}  Hora: ${horaFormatada}`, 100, currentY);

    // Salvar o PDF
    doc.save('prescricao.pdf');
});
