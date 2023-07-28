<?php
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;

?>

<header class="sticky-top">
    <div class="bg-azul py-1">
        <div class="container">
            <div class="row d-none d-md-block">
                <div class="col-md d-flex justify-content-evenly">
                    <?= Html::a('<i class="opacity-07 fa fa-search-plus"></i> Transparência', ['/site/transparencia'], ['class' => 'header-button text-decoration-none text-white']) ?>
                    <?= Html::a('<i class="opacity-07 fa fa-headphones"></i> Ouvidoria', ['/site/button2'], ['class' => 'header-button text-decoration-none text-white']) ?>
                    <?= Html::a('<i class="opacity-07 fa fa-wheelchair"></i> Acessibilidade', ['/site/button3'], ['class' => 'header-button text-decoration-none text-white']) ?>
                    <?= Html::a('<i class="opacity-07 fa fa-sitemap"></i> Mapa site', ['/site/button4'], ['class' => 'header-button text-decoration-none text-white']) ?>
                    <?= Html::a('<i class="opacity-07 fa fa-phone"></i> Contato', ['/site/button4'], ['class' => 'header-button text-decoration-none text-white']) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-azul-subtle">
        <nav class="navbar navbar-expand-lg py-0">
            <div class="container">
                <a class="navbar-brand p-0 m-0" href="#"><img src="<?= Yii::getAlias('@web') ?>/images/logo.png"
                        alt="Logo" style='max-width: 115px; height: auto;'></a>                
                <div class="offcanvas offcanvas-end w-50 flex-lg-row" tabindex="-1" id="navbarOffcanvasLg"
                    aria-labelledby="navbarOffcanvasLgLabel">
                    <?php
                    echo Nav::widget([
                        'items' => [
                            ['label' => 'Início', 'url' => ['/site/index']],
                            [
                                'label' => 'O Ipasem',
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
                                'label' => 'Conceitos',
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
                            [
                                'label' => 'Editais',
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
                        'options' => ['class' => 'navbar-nav mx-lg-auto mx-2 column-gap-3 text-uppercase fw-bold'],
                        'encodeLabels' => false, // Para não codificar os rótulos HTML
                    ]);
                    ?>
                    <div class="col-lg-2 ms-lg-auto ms-auto me-lg-4 me-2 mb-2 my-lg-auto">
                        <div class="input-group">
                            <?= \yii\helpers\Html::input('text', 'search', '', ['class' => 'form-control search-field border-end-0', 'placeholder' => 'Pesquisar', 'id' => 'search-field']) ?>
                            <span class="input-group-text bg-white" onclick="handleSearch()" style="cursor: pointer;">
                                <?= \yii\helpers\Html::a('<i class="fa fa-search"></i>', 'javascript:void(0)', ['class' => 'text-decoration-none', 'id' => 'search-icon']) ?>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="ms-auto me-2">
                    <?php if (Yii::$app->user->isGuest): ?>
                        <div class="d-flex justify-content-end">
                            <?= Html::a('Portais', ['/site/login'], ['class' => ['btn btn-primary login text-decoration-none']]) ?>
                        </div>
                    <?php else: ?>
                        <div class="d-flex justify-content-end">
                            <?= Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex']) ?>
                            <?= Html::submitButton(
                                'Logout (' . Yii::$app->user->identity->username . ')',
                                ['class' => 'btn btn-primary-subtle logout text-decoration-none']
                            ) ?>
                            <?= Html::endForm() ?>
                        </div>
                    <?php endif; ?>
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