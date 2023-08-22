<!-- $this->render('/layouts/_modal')  -->

<?= $this->render('/layouts/_carousel') ?>

<!-- acesso rápido -->
<div class="container text-center d-flex justify-content-center position-relative">
    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3 mt-n5 mx-auto">
        <div class="col">
            <a href="#" class="text-decoration-none">
                <div class="p-3 border bg-light rounded d-flex justify-content-evenly align-items-center"><i
                        class="fas fa-calendar-check fa-2x text-warning"></i>Row
                    column</div>
            </a>
        </div>
        <div class="col">
            <a href="#" class="text-decoration-none">
                <div class="p-3 border bg-light rounded d-flex justify-content-evenly align-items-center"><i
                        class="fas fa-calendar-check fa-2x text-warning"></i>Row
                    column</div>
            </a>
        </div>
        <div class="col">
            <a href="#" class="text-decoration-none">
                <div class="p-3 border bg-light rounded d-flex justify-content-evenly align-items-center"><i
                        class="fas fa-calendar-check fa-2x text-warning"></i>Row
                    column</div>
            </a>
        </div>
        <div class="col">
            <a href="#" class="text-decoration-none">
                <div class="p-3 border bg-light rounded d-flex justify-content-evenly align-items-center"><i
                        class="fas fa-calendar-check fa-2x text-warning"></i>Row
                    column</div>
            </a>
        </div>
        <div class="col">
            <a href="#" class="text-decoration-none">
                <div class="p-3 border bg-light rounded d-flex justify-content-evenly align-items-center"><i
                        class="fas fa-calendar-check fa-2x text-warning"></i>Row
                    column</div>
            </a>
        </div>
        <div class="col">
            <a href="#" class="text-decoration-none">
                <div class="p-3 border bg-light rounded d-flex justify-content-evenly align-items-center"><i
                        class="fas fa-calendar-check fa-2x text-warning"></i>Row
                    column</div>
            </a>
        </div>
        <div class="col d-none d-md-block">
            <a href="#" class="text-decoration-none">
                <div class="p-3 border bg-light rounded d-flex justify-content-evenly align-items-center"><i
                        class="fas fa-calendar-check fa-2x text-warning"></i>Row
                    column</div>
            </a>
        </div>
        <div class="col d-none d-md-block">
            <a href="#" class="text-decoration-none">
                <div class="p-3 border bg-light rounded d-flex justify-content-evenly align-items-center"><i
                        class="fas fa-calendar-check fa-2x text-warning"></i>Row
                    column</div>
            </a>
        </div>
        <div class="col d-none d-md-block">
            <a href="#" class="text-decoration-none">
                <div class="p-3 border bg-light rounded d-flex justify-content-evenly align-items-center"><i
                        class="fas fa-calendar-check fa-2x text-warning"></i>Row
                    column</div>
            </a>
        </div>
        <div class="col d-none d-md-block">
            <a href="#" class="text-decoration-none">
                <div class="p-3 border bg-light rounded d-flex justify-content-evenly align-items-center"><i
                        class="fas fa-calendar-check fa-2x text-warning"></i>Row
                    column</div>
            </a>
        </div>
    </div>
</div>

<div class="container">
    <hr>
</div>
<!-- cards de noticias -->
<div class="container my-3">
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="<?= Yii::getAlias('@web') ?>/images/crp.jpg" alt="Apple Store" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Renovado CRP por mais 180 dias!</h5>
                    <p class="card-text">Novo Hamburgo, por meio do Ipasem-NH, renova CRP por mais 180 diasO município
                        de Novo Hamburgo, por meio do Ipas... </p>
                    <a href="#" class="btn btn-primary">Acesse</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- tabele de noticias -->
<div class="container my-3">
    <p class="d-flex justify-content-end m-0">
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
            aria-expanded="false" aria-controls="collapseExample">
            Nóticias antigas +
        </button>
    </p>
    <div class="collapse" id="collapseExample">
        <table class="table">
            <tbody>
                <tr>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="https://cadprev.previdencia.gov.br/Cadprev/pages/publico/extrato/extratoExterno.xhtml?cnpj=88254875000160"
                            target="_blank">
                            <img src="<?= Yii::getAlias('@web') ?>/images/comp_renda.jpg" alt="comp_renda" class="mx-4"
                                style="max-width: 115px; height: auto;">Disponíveis comprovantes de
                            renda e detalhamento
                            de
                            coparticipação para Imposto de Renda
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="https://cadprev.previdencia.gov.br/Cadprev/pages/publico/extrato/extratoExterno.xhtml?cnpj=88254875000160"
                            target="_blank">
                            <img src="<?= Yii::getAlias('@web') ?>/images/comp_renda.jpg" alt="comp_renda" class="mx-4"
                                style="max-width: 115px; height: auto;">Disponíveis comprovantes de
                            renda e detalhamento
                            de
                            coparticipação para Imposto de Renda
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="https://cadprev.previdencia.gov.br/Cadprev/pages/publico/extrato/extratoExterno.xhtml?cnpj=88254875000160"
                            target="_blank">
                            Veja mais
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <hr>
</div>