document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById('formUsuario');

    // Função para alternar visibilidade da senha
    function togglePasswordVisibility(inputId, toggleId) {
        const passwordInput = document.getElementById(inputId);
        const toggleButton = document.getElementById(toggleId);

        toggleButton.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            toggleButton.textContent = type === 'password' ? '👁️' : '🙈'; // Muda o ícone
        });
    }

    togglePasswordVisibility('password', 'togglePassword');
    togglePasswordVisibility('confirPassword', 'toggleConfirPassword');

    form.addEventListener('submit', function(event) {
        // Obtém os valores dos campos de senha
        const password = document.getElementById('password').value;
        const confirPassword = document.getElementById('confirPassword').value;

        // Verifica se as senhas correspondem
        if (password !== confirPassword) {
            alert("As senhas não correspondem. Por favor, tente novamente.");
            event.preventDefault(); // Impede o envio do formulário
            return;
        }

        // Validação adicional (opcional)
        const nome = document.getElementById('nome').value;
        const email = document.getElementById('email').value;

        if (!nome || !email) {
            alert("Por favor, preencha todos os campos obrigatórios.");
            event.preventDefault(); // Impede o envio do formulário
            return;
        }

        // Regex para validar o formato de email
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert("Por favor, insira um email válido.");
            event.preventDefault();
            return;
        }
    });

    // Função para limpar o formulário
    document.querySelector('.btn-cancel').addEventListener('click', function() {
        form.reset(); // Limpa todos os campos do formulário
    });
});
