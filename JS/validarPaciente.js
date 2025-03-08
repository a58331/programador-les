document.addEventListener("DOMContentLoaded", function() {
    // Validação do telefone
    const telefoneInput = document.getElementById('telefone');

    // Remover caracteres não numéricos ao digitar
    telefoneInput.addEventListener('input', function() {
        this.value = this.value.replace(/\D/g, ''); // Remove todos os caracteres não numéricos
    });

    // Função para validar o formulário
    document.getElementById('formPaciente').addEventListener('submit', function(event) {
        const nome = document.getElementById('nome').value;
        const email = document.getElementById('email').value;
        const telefone = telefoneInput.value;

        // Verifica se todos os campos obrigatórios foram preenchidos
        if (!nome || !email || !telefone) {
            alert("Por favor, preencha todos os campos obrigatórios.");
            event.preventDefault(); // Impede o envio do formulário
            return;
        }

        // Validação do email
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert("Por favor, insira um email válido.");
            event.preventDefault();
            return;
        }

        // Validação do telefone
        const telefoneRegex = /^[0-9]{10,15}$/;
        if (!telefoneRegex.test(telefone)) {
            alert("Por favor, insira um número de telefone válido (10 a 15 dígitos).");
            event.preventDefault();
            return;
        }
    });

    // Função para limpar o formulário
    function limparFormulario() {
        document.getElementById('formPaciente').reset(); // Limpa todos os campos do formulário
        gerarCodigo(); // Gera um novo código ao limpar (caso tenha a função de gerar código)
    }

    // Chame a função limparFormulario no evento de reset
    document.querySelector('.btn-cancel').addEventListener('click', function(event) {
        event.preventDefault(); // Impede o comportamento padrão do botão reset
        limparFormulario(); // Limpa o formulário
    });

    
});
