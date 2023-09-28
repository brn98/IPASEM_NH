<!--  linha de chamada do modal -->

<div class="modal fade" id="meuModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger fw-bold text-uppercase" id="modalLabel">Importante!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body text-center">
                <div class="h4 mb-3">Prezado inativo e pensionista!</div>

                <p>A Lei complementar nº 3.464/2023, integrando um conjunto de medidas
                    que visam manter a sustentabilidade do RPPS de Novo Hamburgo, ou seja,
                    a garantia do pagamento regular dos benefícios presentes e futuros,
                    aumentou a incidência da base de cálculo do salário-de-contribuição
                    das aposentadorias e pensões.</p>

                <p>Passando, assim a parcela desses proventos que supere um salário
                    mínimo, a sofrer a cobrança do percentual de 14% (quatorze por cento)
                    a título de Contribuição Previdenciário, com data de início partir da
                    folha de benefícios da competência de agosto de 2023.</p>

                <p class="fw-bold text-danger text-uppercase">Dessa forma, o início do desconto ocorrerá na folha de
                    benefícios a
                    ser paga em 30 de agosto de 2023.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Função para exibir o Modal automaticamente
    function exibirModal() {
        var modal = new bootstrap.Modal(document.getElementById('meuModal'));
        modal.show();
    }

    // Evento DOMContentLoaded para exibir o Modal ao carregar a página
    document.addEventListener('DOMContentLoaded', exibirModal);

    function ajustarModal() {
        var modal = document.getElementById('meuModal');
        var modalDialog = modal.querySelector('.modal-dialog');

        if (window.matchMedia("(max-width: 991px)").matches) {
            modalDialog.classList.add('modal-dialog-centered');
        } else {
            modalDialog.classList.remove('modal-dialog-centered');
        }
    }

    document.getElementById('meuModal').addEventListener('show.bs.modal', ajustarModal);
    window.addEventListener('resize', ajustarModal);
</script>