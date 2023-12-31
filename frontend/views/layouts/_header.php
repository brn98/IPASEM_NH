<?php
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;

?>

<header class="sticky-top">
    <div class="bg-azul py-1">
        <div class="container">
            <div class="row d-none d-md-block">
                <div class="col-md d-flex justify-content-evenly">
                    <?= Html::a('<i class="opacity-07 fa fa-search-plus"></i> Transparência', ['/site/transparencia'], ['class' => 'text-decoration-none link-light opacity-50-hover']) ?>
                    <?= Html::a('<i class="opacity-07 fa fa-headphones"></i> Ouvidoria', ['/site/ouvidoria'], ['class' => 'text-decoration-none link-light opacity-50-hover']) ?>
                    <?= Html::a('<i class="opacity-07 fa fa-wheelchair"></i> Acessibilidade', ['/site/acessibilidade'], ['class' => 'text-decoration-none link-light opacity-50-hover']) ?>
                    <?= Html::a('<i class="opacity-07 fa fa-sitemap"></i> Mapa site', ['/site/mapasite'], ['class' => 'text-decoration-none link-light opacity-50-hover']) ?>
                    <?= Html::a('<i class="opacity-07 fa fa-phone"></i> Atendimento', ['/site/atendimento'], ['class' => 'text-decoration-none link-light opacity-50-hover']) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-azul-subtle">
        <nav class="navbar navbar-expand-lg py-0">
            <div class="container">
                <a class="navbar-brand p-0 m-0" href="<?= \yii\helpers\Url::to(['/site/index']) ?>"><img
                        src="<?= Yii::getAlias('@web') ?>/images/logo.png" alt="Logo"
                        style='max-width: 115px; height: auto;'></a>
                <div class="offcanvas offcanvas-end w-50 flex-lg-row" tabindex="-1" id="navbarOffcanvasLg"
                    aria-labelledby="navbarOffcanvasLgLabel">
                    <?php
                    echo Nav::widget([
                        'items' => [
                            [
                                'label' => 'Início',
                                'options' => ['class' => 'dropdown'],
                                'url' => ['/site/index']
                            ],
                            [
                                'label' => 'O Ipasem',
                                'items' => [
                                    ['label' => 'Conceitos', 'url' => '/'],
                                    ['label' => 'Section 2', 'url' => '#'],
                                    [
                                        'label' => 'Section 3',
                                        'items' => [
                                            ['label' => 'Section 3.1', 'url' => '/'],
                                            ['label' => 'Section 3.2', 'url' => '#'],
                                            [
                                                'label' => 'Section 3.3',
                                                'items' => [
                                                    ['label' => 'Section 3.3.1', 'url' => '/'],
                                                    ['label' => 'Section 3.3.2', 'url' => '#'],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label' => 'Previdência',
                                'items' => [
                                    ['label' => 'Section 1', 'url' => '/'],
                                    ['label' => 'Section 2', 'url' => '#'],
                                    [
                                        'label' => 'Section 3',
                                        'items' => [
                                            ['label' => 'Section 3.1', 'url' => '/'],
                                            ['label' => 'Section 3.2', 'url' => '#'],
                                            [
                                                'label' => 'Section 3.3',
                                                'items' => [
                                                    ['label' => 'Section 3.3.1', 'url' => '/'],
                                                    ['label' => 'Section 3.3.2', 'url' => '#'],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label' => 'Assistência',
                                'items' => [
                                    ['label' => 'Section 1', 'url' => '/'],
                                    ['label' => 'Section 2', 'url' => '#'],
                                    [
                                        'label' => 'Section 3',
                                        'items' => [
                                            ['label' => 'Section 3.1', 'url' => '/'],
                                            ['label' => 'Section 3.2', 'url' => '#'],
                                            [
                                                'label' => 'Section 3.3',
                                                'items' => [
                                                    ['label' => 'Section 3.3.1', 'url' => '/'],
                                                    ['label' => 'Section 3.3.2', 'url' => '#'],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'options' => ['class' => 'navbar-nav ms-lg-5 mx-2 column-gap-3 text-uppercase fw-bold'],
                        'encodeLabels' => false,
                    ]);
                    ?>
                    <div class="col-lg-3 ms-lg-auto ms-auto me-lg-4 me-2 mb-2 my-lg-auto">
                        <div class="input-group">
                            <?= \yii\helpers\Html::input('text', 'search', '', ['class' => 'form-control search-field border-end-0', 'placeholder' => 'Pesquisar', 'id' => 'search-field']) ?>
                            <span class="input-group-text bg-white" onclick="handleSearch()" style="cursor: pointer;">
                                <?= \yii\helpers\Html::a('<i class="fa fa-search"></i>', 'javascript:void(0)', ['class' => 'text-decoration-none', 'id' => 'search-icon']) ?>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="ms-auto me-2 me-lg-0">
                    <?= Html::a('Portais', ['/site/portais'], ['class' => ['btn btn-lg btn-warning text-decoration-none']]) ?>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </div>
    <div class="bg-azul py-1"></div>
</header>