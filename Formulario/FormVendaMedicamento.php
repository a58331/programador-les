<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venda de Medicamentos</title>
    <link rel="stylesheet" href="../Estilo/styles.css">
</head>
<body>

    <div class="form-container">
        <h2>Venda de Medicamentos</h2>
        <form id="venda-medicamento-form" action="/venda-medicamento" method="POST">
            <label for="paciente">Nome do Paciente:</label>
            <input type="text" id="paciente" name="paciente" required>

            <div id="medicamentos-container">
                <div class="medicamento-group">
                    <label for="medicamento">Nome do Medicamento:</label>
                    <input type="text" name="medicamentos[0][nome]" required>
                    
                    <label for="quantidade">Quantidade:</label>
                    <input type="number" name="medicamentos[0][quantidade]" min="1" required class="quantidade" onchange="calcularTotal()">
                    
                    <label for="preco">Preço Unitário (€):</label>
                    <input type="number" name="medicamentos[0][preco]" min="0" step="0.01" required class="preco" onchange="calcularTotal()">
                    
                    <button type="button" class="remove-medicamento-btn" onclick="removeMedicamento(this)">Remover Medicamento</button>
                </div>
            </div>
            
            <!-- Adicionar novo medicamento -->
            <button type="button" id="add-medicamento-btn" class="add-medicamento-btn">Adicionar Medicamento</button>

            <!-- Campo para exibir o valor total -->
            <label for="valor-total">Valor Total (€):</label>
            <input type="number" id="valor-total" name="valor-total" readonly value="0">

            <button type="submit">Registrar Venda</button>
        </form>
    </div>

    <script>
        let medicamentoIndex = 1;

        // Função para adicionar novo medicamento
        document.getElementById('add-medicamento-btn').addEventListener('click', () => {
            const medicamentosContainer = document.getElementById('medicamentos-container');
            const newMedicamentoGroup = document.createElement('div');
            newMedicamentoGroup.classList.add('medicamento-group');
            newMedicamentoGroup.innerHTML = `
                <label for="medicamento">Nome do Medicamento:</label>
                <input type="text" name="medicamentos[${medicamentoIndex}][nome]" required>
                
                <label for="quantidade">Quantidade:</label>
                <input type="number" name="medicamentos[${medicamentoIndex}][quantidade]" min="1" required class="quantidade" onchange="calcularTotal()">
                
                <label for="preco">Preço Unitário (MZN):</label>
                <input type="number" name="medicamentos[${medicamentoIndex}][preco]" min="0" step="0.01" required class="preco" onchange="calcularTotal()">
                
                <button type="button" class="remove-medicamento-btn" onclick="removeMedicamento(this)">Remover Medicamento</button>
            `;
            medicamentosContainer.appendChild(newMedicamentoGroup);
            medicamentoIndex++;
        });

        // Função para remover medicamento
        function removeMedicamento(button) {
            const medicamentoGroup = button.parentElement;
            medicamentoGroup.remove();
            calcularTotal();  // Recalcular o valor total após remover o medicamento
        }

        // Função para calcular o valor total
        function calcularTotal() {
            let total = 0;
            const medicamentos = document.querySelectorAll('.medicamento-group');

            medicamentos.forEach(medicamento => {
                const quantidade = medicamento.querySelector('.quantidade').value;
                const preco = medicamento.querySelector('.preco').value;

                if (quantidade && preco) {
                    total += parseFloat(quantidade) * parseFloat(preco);
                }
            });

            document.getElementById('valor-total').value = total.toFixed(2);
        }
    </script>

</body>
</html>
