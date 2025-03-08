document.getElementById('busca').addEventListener('input', function () {
    const nif = this.value.trim(); // Obtém o NIF digitado
    const funcionarioSelect = document.getElementById('ID_funcionario');

    if (nif.length >= 5) { // Busca após 5 caracteres
        fetch('../Procedimento/buscarFuncionario.php?nif=' + encodeURIComponent(nif))
            .then((response) => {
                if (!response.ok) {
                    throw new Error('Erro na resposta do servidor.');
                }
                return response.json();
            })
            .then((data) => {
                // Limpar as opções atuais
                funcionarioSelect.innerHTML = '<option value="">Selecione Funcionário</option>';
                if (data.length > 0) {
                    data.forEach((funcionario) => {
                        const option = document.createElement('option');
                        option.value = funcionario.id;
                        option.textContent = `${funcionario.nome} (${funcionario.cargo})`;
                        funcionarioSelect.appendChild(option);
                    });
                } else {
                    alert('Nenhum funcionário encontrado com este NIF.');
                }
            })
            .catch((error) => {
                console.error('Erro ao buscar funcionário:', error);
            });
    } else {
        // Limpar o campo funcionário se o NIF for apagado ou incompleto
        funcionarioSelect.innerHTML = '<option value="">Selecione Funcionário</option>';
    }
    console.log('URL sendo chamada:', '/GESTAO_CLINICA/Procedimento/buscarFuncionario.php?nif=' + encodeURIComponent(nif));

});
