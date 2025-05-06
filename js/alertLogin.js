document.getElementById('meuBotao').addEventListener('click', function() {
    // Exibe a caixa de confirmação
    const confirmacao = window.confirm('Você tem certeza que deseja continuar?');

    if (confirmacao) {
        // Se o usuário clicar em "OK"
        alert('Você clicou em OK! A execução foi realizada.');
    } else {
        // Se o usuário clicar em "Cancelar"
        alert('Você clicou em Cancelar! A execução foi parada.');
    }
});