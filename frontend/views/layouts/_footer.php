<?php
use yii\bootstrap5\Html;

?>

<footer class="text-center text-white bg-azul">
    <div class="container">
        <div class="d-md-none d-block">
            <section class="mt-5">
                <div class="row text-center d-flex justify-content-center pt-4">
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <?= Html::a('<i class="opacity-07 fa fa-search-plus"></i> Transparência', ['/site/transparencia'], ['class' => 'text-decoration-none link-light opacity-50-hover']) ?>
                        </h6>
                    </div>
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <?= Html::a('<i class="opacity-07 fa fa-headphones"></i> Ouvidoria', ['/site/ouvidoria'], ['class' => 'text-decoration-none link-light opacity-50-hover']) ?>
                        </h6>
                    </div>
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <?= Html::a('<i class="opacity-07 fa fa-wheelchair"></i> Acessibilidade', ['/site/acessibilidade'], ['class' => 'text-decoration-none link-light opacity-50-hover']) ?>
                        </h6>
                    </div>
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <?= Html::a('<i class="opacity-07 fa fa-sitemap"></i> Mapa site', ['/site/mapasite'], ['class' => 'text-decoration-none link-light opacity-50-hover']) ?>
                        </h6>
                    </div>
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <?= Html::a('<i class="opacity-07 fa fa-phone"></i> Fale Conosco', ['/site/faleconosco'], ['class' => 'text-decoration-none link-light opacity-50-hover']) ?>
                        </h6>
                    </div>
                </div>
            </section>
            <hr class="mb-md-5 mb-4" />
        </div>
        <section class="py-md-4">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8 mt-md-4">
                    <p class="mt-0 mt-md-4">
                        Rua 5 de Abril, 280 - Bairro Rio Branco, Novo Hamburgo/RS <br />
                        <strong>CEP:</strong> 93310-085 <br />
                        <strong>Fone:</strong> (51) 3594-9162 <br />
                        <strong>e-mail:</strong> contato@ipasemnh.com.br <br />
                    </p>
                </div>
            </div>
            <div class="row m-auto" style="max-width: 500px;">
                <div class="col d-flex align-items-center px-0">
                    <a class="mx-auto" href="https://apps.apple.com/br/app/meu-rpps/id1482263386" target="_blank">
                        <img src="<?= Yii::getAlias('@web') ?>/images/app_store.png" alt="Apple Store"
                            class="img-fluid p-1 p-md-2">
                    </a>
                </div>
                <div class="col d-flex align-items-center px-0">
                    <a class="mx-auto" href="https://play.google.com/store/apps/details?id=agendaassessoria.meurpps"
                        target="_blank">
                        <img src="<?= Yii::getAlias('@web') ?>/images/google_play.png" alt="Google Play"
                            class="img-fluid">
                    </a>
                </div>
            </div>
        </section>
        <section>
            <a class="text-white text-decoration-none" href="">Consulta - Lei nº154/92 <i
                    class="fas fa-external-link-square-alt ms-1"></i></a>
        </section>
        <section class="text-center mb-2 py-md-4">
            <a href="" class="text-white me-4 text-decoration-none">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="text-white me-4 text-decoration-none">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="text-white me-4 text-decoration-none">
                <i class="fab fa-google"></i>
            </a>
            <a href="" class="text-white me-4 text-decoration-none">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="text-white me-4 text-decoration-none">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="text-white me-4 text-decoration-none">
                <i class="fab fa-github"></i>
            </a>
        </section>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        <p class="text-end text-secondary fst-italic my-auto">© Copyright
            <?= date('Y') ?> - IPASEM Novo Hamburgo
        </p>
    </div>
</footer>