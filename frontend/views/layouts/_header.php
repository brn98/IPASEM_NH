<?php

use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;

?>

<header class="sticky-top">
    <div class="py-2 bg-azul"></div>
    <div class="bg-azul-subtle">
        <nav class="navbar navbar-expand-lg py-0">
            <div class="container">
                <a class="navbar-brand p-0" href="#"><img src="<?= Yii::getAlias('@web') ?>/images/logo.png" alt="Logo"
                        style='max-width: 115px; height: auto;'></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse my-2 rounded" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mx-auto mb-lg-0 gap-2 column-gap-3 text-uppercase fw-bold">
                        <li class="nav-item">
                            <?= Html::a('<i class="opacity-07 fa fa-search-plus"></i> Transparência', ['/site/transparencia'], ['class' => 'header-button text-decoration-none']) ?>
                        </li>
                        <li class="nav-item">
                            <?= Html::a('<i class="opacity-07 fa fa-headphones"></i> Ouvidoria', ['/site/button2'], ['class' => 'header-button text-decoration-none']) ?>
                        </li>
                        <li class="nav-item">
                            <?= Html::a('<i class="opacity-07 fa fa-wheelchair"></i> Acessibilidade', ['/site/button3'], ['class' => 'header-button text-decoration-none']) ?>
                        </li>
                        <li class="nav-item">
                            <?= Html::a('<i class="opacity-07 fa fa-sitemap"></i> Mapa site', ['/site/button4'], ['class' => 'header-button text-decoration-none']) ?>
                        </li>
                        <li class="nav-item">
                            <?= Html::a('<i class="opacity-07 fa fa-phone"></i> Contato', ['/site/button4'], ['class' => 'header-button text-decoration-none']) ?>
                        </li>
                    </ul>
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
            </div>
        </nav>
    </div>
    <div class="bg-azul">
        <nav class="navbar navbar-expand-lg navbar-dark justify-content-end">
            <div class="container">
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse rounded" id="navbarSupportedContent">
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
                        'options' => ['class' => 'navbar-nav me-auto column-gap-3 fs-3 text-uppercase'],
                        'encodeLabels' => false, // Para não codificar os rótulos HTML
                    ]);
                    ?>
                    <div class="col-md-2 col-sm-5 col-5 ms-auto">
                        <div class="input-group">
                            <?= \yii\helpers\Html::input('text', 'search', '', ['class' => 'form-control search-field border-end-0', 'placeholder' => 'Pesquisar', 'id' => 'search-field']) ?>
                            <span class="input-group-text bg-white" onclick="handleSearch()" style="cursor: pointer;">
                                <?= \yii\helpers\Html::a('<i class="fa fa-search"></i>', 'javascript:void(0)', ['class' => 'text-decoration-none', 'id' => 'search-icon']) ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>