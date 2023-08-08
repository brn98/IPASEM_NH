<?php
use yii\bootstrap5\Html;

?>

<footer class="bg-azul-subtle">
    <div class="bg-azul py-1"></div>
    <div class="container-fluid w-75 shadow">
        <div class="container text-center pt-3">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <a class="my-5 my-md-auto d-flex" href="#"><img
                                src="<?= Yii::getAlias('@web') ?>/images/logo.png" alt="Logo" class="img-fluid"></a>
                        <div class="col m-0 d-none d-md-block pt-4">
                            <p class="text-dark text-start">
                                Rua 5 de Abril, 280 - Bairro Rio Branco, Novo Hamburgo/RS <br />
                                <strong>CEP:</strong> 93310-085 <br />
                                <strong>Fone:</strong> (51) 3594-9162 <br />
                                <strong>e-mail:</strong> contato@ipasemnh.com.br <br />
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col text my-auto">
                    <div class="h4 fw-semibold">Navegação</div>
                    <ul class="list-unstyled text-dark py-2">
                        <li class="py-2">
                            <?= Html::a('<i class="opacity-07 fa fa-search-plus"></i> Transparência', ['/site/transparencia'], ['class' => 'text-decoration-none opacity-50-hover']) ?>
                        </li>
                        <li class="pb-2">
                            <?= Html::a('<i class="opacity-07 fa fa-headphones"></i> Ouvidoria', ['/site/button2'], ['class' => 'text-decoration-none opacity-50-hover']) ?>
                        </li>
                        <li class="pb-2">
                            <?= Html::a('<i class="opacity-07 fa fa-wheelchair"></i> Acessibilidade', ['/site/button3'], ['class' => 'text-decoration-none opacity-50-hover']) ?>
                        </li>
                        <li class="pb-2">
                            <?= Html::a('<i class="opacity-07 fa fa-sitemap"></i> Mapa site', ['/site/button4'], ['class' => 'text-decoration-none opacity-50-hover']) ?>
                        </li>
                        <li class="pb-2">
                            <?= Html::a('<i class="opacity-07 fa fa-phone"></i> Contato', ['/site/button4'], ['class' => 'text-decoration-none opacity-50-hover']) ?>
                        </l>
                    </ul>
                </div>
                <div class="col d-flex align-items-center px-0">
                    <div class="row-cols-2 d-md-grid">
                        <a class="ms-auto" href="https://apps.apple.com/br/app/meu-rpps/id1482263386" target="_blank">
                            <img src="<?= Yii::getAlias('@web') ?>/images/app_store.png" alt="Apple Store"
                                class="img-fluid p-1 p-md-2">
                        </a>
                        <a class="ms-auto" href="https://play.google.com/store/apps/details?id=agendaassessoria.meurpps"
                            target="_blank">
                            <img src="<?= Yii::getAlias('@web') ?>/images/google_play.png" alt="Google Play"
                                class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col m-0 d-flex align-items-end justify-content-end">
                <p class="text-end text-body-tertiary fst-italic">© Copyright
                    <?= date('Y') ?> - IPASEM Novo Hamburgo
                </p>
            </div>
        </div>
    </div>
</footer>