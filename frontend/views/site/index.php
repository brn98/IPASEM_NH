<?php $this->title = 'Ipasem-NH' ?>

<!-- $this->render('/layouts/_modal')  -->

<?= $this->render('/layouts/_carousel') ?>

<div class="container">
    <!-- <!-- acesso rápido -->
    <div class="text-center position-relative">
        <div class="row g-2 g-lg-3 mt-n5 mx-auto">
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="py-4 border bg-light rounded d-grid align-items-center shadow hover-grow fs-5">
                        <i class="fas fa-calendar-check fa-2x text-warning mb-2"></i>Row
                        column
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="py-4 border bg-light rounded d-grid align-items-center shadow hover-grow fs-5">
                        <i class="fas fa-calendar-check fa-2x text-warning mb-2"></i>Row
                        column
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="py-4 border bg-light rounded d-grid align-items-center shadow hover-grow fs-5">
                        <i class="fas fa-calendar-check fa-2x text-warning mb-2"></i>Row
                        column
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="py-4 border bg-light rounded d-grid align-items-center shadow hover-grow fs-5">
                        <i class="fas fa-calendar-check fa-2x text-warning mb-2"></i>Row
                        column
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="py-4 border bg-light rounded d-grid align-items-center shadow hover-grow fs-5">
                        <i class="fas fa-calendar-check fa-2x text-warning mb-2"></i>Row
                        column
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Menu Recomendados -->
    <div class="row gap-4 my-5">
        <div class="col">
            <div class="text-center mb-4">
                <div class="h3">Serviços</div>
                <hr class="my-2 mx-auto w-50 text-primary">
            </div>
            <div class="row align-items-center border rounded shadow p-3 py-2">
                <div class="col-12">
                    <small class="text-muted">TCE - RS</small>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-chevron-right text-primary-emphasis me-3"></i>
                        <a href="https://tcers.tc.br/fiscalizado/" target="_blank">Tribunal de
                            Contas do Estado do Rio Grande do Sul.</a>
                    </div>
                </div>
                <hr class="my-auto">
                <div class="col-12"><small class="text-muted">CADPREV</small>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-chevron-right text-primary-emphasis me-3"></i>
                        <a href="https://cadprev.previdencia.gov.br/Cadprev/pages/index.xhtml" target="_blank">Sistema
                            de
                            Informações dos Regimes Públicos de Previdência Social.</a>
                    </div>
                </div>
                <hr class="my-auto">
                <div class="col-12"><small class="text-muted">BANCO DO BRASIL</small>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-chevron-right text-primary-emphasis me-3"></i>
                        <a href="#">Boleto para taxa de exames admissionais - Pagável em qualquer banco.</a>
                    </div>
                </div>
                <hr class="my-auto">
                <div class="col-12">teste</div>
                <hr class="my-auto">
                <div class="col-12">teste</div>
                <hr class="my-auto">
                <div class="col-12">teste</div>
            </div>
        </div>
        <div class="col">
            <div class="text-center mb-4">
                <div class="h3">Editais</div>
                <hr class="my-2 mx-auto w-50 text-primary">
            </div>
            <div class="row align-items-center border rounded shadow py-3">
                <?= $this->render('editais') ?>
            </div>
        </div>
        <div class="col">
            <div class="text-center mb-4">
                <div class="h3">A fazer</div>
                <hr class="my-2 mx-auto w-50 text-primary">
            </div>
            <div class="row align-items-center border rounded shadow p-3 py-2">
                <div class="col-12">teste</div>
                <hr class="my-auto">
                <div class="col-12">teste</div>
                <hr class="my-auto">
                <div class="col-12">teste</div>
                <hr class="my-auto">
                <div class="col-12">teste</div>
                <hr class="my-auto">
                <div class="col-12">teste</div>
                <hr class="my-auto">
                <div class="col-12">teste</div>
            </div>
        </div>
    </div>
</div>