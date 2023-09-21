<?php

/** @var yii\web\View $this */


$this->title = 'Mapa site';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
    <div id="simple-list-example">
        <div class="row">
            <div class="col d-flex justify-content-end">
                <a class="p-1 rounded me-5" href="#simple-list-item-1">Precisa de ajuda?</a>
            </div>
        </div>
    </div>

    <div class="ms-5 col-5">
        <div class="h2 text-azul">Mapa do Site</div>
        <hr class="mt-2" style="background-color: rgb(208, 67, 71);">
    </div>

    <div class="row justify-content-md-around mt-4 px-5">
        <div class="col-md-4">
            <a class="text-primary text-decoration-none">O Ipasem</a>
            <hr class="mb-1 my-2 w-75 text-primary">
            <div class="row-cols">
                <div class="col ms-4">
                    <a class="link-hover text-decoration-none" data-bs-toggle="collapse" href="#collapseOipasem"
                        role="button " aria-expanded="false" aria-controls="collapseOipasem">
                        <i class="fas fa-chevron-right text-primary-emphasis me-3 fa-sm"></i>Institucional
                    </a>
                    <hr class="mb-1 my-2 w-50 text-primary">
                    <div class="collapse ms-4" id="collapseOipasem">
                        <a class="link-hover  " href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                            <i class="fas fa-minus text-primary-emphasis me-2 fa-sm"></i>O Instituto
                        </a>
                        <hr class="mb-1 my-2 w-50 text-primary">
                        <a class="link-hover " href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                            <i class="fas fa-minus text-primary-emphasis me-2 fa-sm"></i>Histórico
                        </a>
                        <hr class="my-2 w-50 text-primary">
                        <a class="link-hover " href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                            <i class="fas fa-minus text-primary-emphasis me-2 fa-sm"></i>Conselho
                        </a>
                        <hr class="my-2 w-50 text-primary">
                    </div>
                </div>
                <div class="col ms-4">
                    <a class="link-hover" href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                        <i class="fas fa-minus text-primary-emphasis me-2"></i>Plano de Integridade
                    </a>
                    <hr class="my-2 w-50 text-primary">
                </div>
                <div class="col ms-4">
                    <a class="link-hover" href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                        <i class="fas fa-minus text-primary-emphasis me-2"></i>Legislação
                    </a>
                    <hr class="my-2 w-50 text-primary">
                </div>
                <div class="col ms-4">
                    <a class="link-hover" href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                        <i class="fas fa-minus text-primary-emphasis me-2"></i>Mapa estratégico
                    </a>
                    <hr class="my-2 w-50 text-primary">
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-5 mt-md-0">
            <a class="text-primary text-decoration-none">Serviços</a>
            <hr class="mb-1 my-2 w-75 text-primary">
            <div class="row-cols">
                <div class="col ms-4">
                    <a class="link-hover" data-bs-toggle="collapse" href="#collapseExample" role="button"
                        aria-expanded="false" aria-controls="collapseExample">
                        <i class="fas fa-chevron-right text-primary-emphasis me-3 fa-sm"></i>Institucional
                    </a>
                    <hr class="mb-1 my-2 w-50 text-primary">
                    <div class="collapse ms-4" id="collapseExample">
                        <a class="link-hover" href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                            <i class="fas fa-minus text-primary-emphasis me-2 fa-sm"></i>O Instituto
                        </a>
                        <hr class="mb-1 my-2 w-50 text-primary">
                        <a class="link-hover" href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                            <i class="fas fa-minus text-primary-emphasis me-2 fa-sm"></i>Histórico
                        </a>
                        <hr class="my-2 w-50 text-primary">
                        <a class="link-hover" href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                            <i class="fas fa-minus text-primary-emphasis me-2 fa-sm"></i>Conselho
                        </a>
                        <hr class="my-2 w-50 text-primary">
                    </div>
                </div>
                <div class="col ms-4">
                    <a class="link-hover " href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                        <i class="fas fa-minus text-primary-emphasis me-2"></i>Plano de Integridade
                    </a>
                    <hr class="my-2 w-50 text-primary">
                </div>
                <div class="col ms-4">
                    <a class="link-hover" href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                        <i class="fas fa-minus text-primary-emphasis me-2"></i>Legislação
                    </a>
                    <hr class="my-2 w-50 text-primary">
                </div>
                <div class="col ms-4">
                    <a class="link-hover" href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                        <i class="fas fa-minus text-primary-emphasis me-2"></i>Mapa estratégico
                    </a>
                    <hr class="my-2 w-50 text-primary">
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-5 mt-md-0">
            <a class="text-primary text-decoration-none">Assistência</a>
            <hr class="mb-1 my-2 w-75 text-primary">
            <div class="row-cols">
                <div class="col ms-4">
                    <a class="link-hover" data-bs-toggle="collapse" href="#collapseExample" role="button"
                        aria-expanded="false" aria-controls="collapseExample">
                        <i
                            class="fas fa-chevron-right text-primary-emphasis text-primary-emphasis me-3 fa-sm"></i>Institucional
                    </a>
                    <hr class="mb-1 my-2 w-50 text-primary">
                    <div class="collapse ms-4" id="collapseExample">
                        <a class="link-hover" href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                            <i class="fas fa-minus text-primary-emphasis me-2 fa-sm"></i>O Instituto
                        </a>
                        <hr class="mb-1 my-2 w-50 text-primary">
                        <a class="link-hover" href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                            <i class="fas fa-minus text-primary-emphasis me-2 fa-sm"></i>Histórico
                        </a>
                        <hr class="my-2 w-50 text-primary">
                        <a class="link-hover" href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                            <i class="fas fa-minus text-primary-emphasis me-2 fa-sm"></i>Conselho
                        </a>
                        <hr class="my-2 w-50 text-primary">
                    </div>
                </div>
                <div class="col ms-4">
                    <a class="link-hover" href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                        <i class="fas fa-minus text-primary-emphasis me-2"></i>Plano de Integridade
                    </a>
                    <hr class="my-2 w-50 text-primary">
                </div>
                <div class="col ms-4">
                    <a class="link-hover" href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                        <i class="fas fa-minus text-primary-emphasis me-2"></i>Legislação
                    </a>
                    <hr class="my-2 w-50 text-primary">
                </div>
                <div class="col ms-4">
                    <a class="link-hover" href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                        <i class="fas fa-minus text-primary-emphasis me-2"></i>Mapa estratégico
                    </a>
                    <hr class="my-2 w-50 text-primary">
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-5">
            <a class="text-primary text-decoration-none">Previdência</a>
            <hr class="mb-1 my-2 w-75 text-primary">
            <div class="row-cols">
                <div class="col ms-4">
                    <a class="link-hover" data-bs-toggle="collapse" href="#collapseExample" role="button"
                        aria-expanded="false" aria-controls="collapseExample">
                        <i class="fas fa-chevron-right text-primary-emphasis me-3 fa-sm"></i>Institucional
                    </a>
                    <hr class="mb-1 my-2 w-50 text-primary">
                    <div class="collapse ms-4" id="collapseExample">
                        <a class="link-hover" href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                            <i class="fas fa-minus text-primary-emphasis me-2 fa-sm"></i>O Instituto
                        </a>
                        <hr class="mb-1 my-2 w-50 text-primary">
                        <a class="link-hover" href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                            <i class="fas fa-minus text-primary-emphasis me-2 fa-sm"></i>Histórico
                        </a>
                        <hr class="my-2 w-50 text-primary">
                        <a class="link-hover" href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                            <i class="fas fa-minus text-primary-emphasis me-2 fa-sm"></i>Conselho
                        </a>
                        <hr class="my-2 w-50 text-primary">
                    </div>
                </div>
                <div class="col ms-4">
                    <a class="link-hover" href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                        <i class="fas fa-minus text-primary-emphasis me-2"></i>Plano de Integridade
                    </a>
                    <hr class="my-2 w-50 text-primary">
                </div>
                <div class="col ms-4">
                    <a class="link-hover" href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                        <i class="fas fa-minus text-primary-emphasis me-2"></i>Legislação
                    </a>
                    <hr class="my-2 w-50 text-primary">
                </div>
                <div class="col ms-4">
                    <a class="link-hover" href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                        <i class="fas fa-minus text-primary-emphasis me-2"></i>Mapa estratégico
                    </a>
                    <hr class="my-2 w-50 text-primary">
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-5">
            <a class="text-primary text-decoration-none">Transparência</a>
            <hr class="mb-1 my-2 w-75 text-primary">
            <div class="row-cols">
                <div class="col ms-4">
                    <a class="link-hover" data-bs-toggle="collapse" href="#collapseExample" role="button"
                        aria-expanded="false" aria-controls="collapseExample">
                        <i class="fas fa-chevron-right text-primary-emphasis me-3 fa-sm"></i>Institucional
                    </a>
                    <hr class="mb-1 my-2 w-50 text-primary">
                    <div class="collapse ms-4" id="collapseExample">
                        <a class="link-hover " href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                            <i class="fas fa-minus text-primary-emphasis me-2 fa-sm"></i>O Instituto
                        </a>
                        <hr class="mb-1 my-2 w-50 text-primary">
                        <a class="link-hover" href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                            <i class="fas fa-minus text-primary-emphasis me-2 fa-sm"></i>Histórico
                        </a>
                        <hr class="my-2 w-50 text-primary">
                        <a class="link-hover" href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                            <i class="fas fa-minus text-primary-emphasis me-2 fa-sm"></i>Conselho
                        </a>
                        <hr class="my-2 w-50 text-primary">
                    </div>
                </div>
                <div class="col ms-4">
                    <a class="link-hover" href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                        <i class="fas fa-minus text-primary-emphasis me-2"></i>Plano de Integridade
                    </a>
                    <hr class="my-2 w-50 text-primary">
                </div>
                <div class="col ms-4">
                    <a class="link-hover" href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                        <i class="fas fa-minus text-primary-emphasis me-2"></i>Legislação
                    </a>
                    <hr class="my-2 w-50 text-primary">
                </div>
                <div class="col ms-4">
                    <a class="link-hover" href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                        <i class="fas fa-minus text-primary-emphasis me-2"></i>Mapa estratégico
                    </a>
                    <hr class="my-2 w-50 text-primary">
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-5">
            <a class="text-primary text-decoration-none">Editais</a>
            <hr class="mb-1 my-2 w-75 text-primary">
            <div class="row-cols">
                <div class="col ms-4">
                    <a class="link-hover" data-bs-toggle="collapse" href="#collapseExample" role="button"
                        aria-expanded="false" aria-controls="collapseExample">
                        <i class="fas fa-chevron-right text-primary-emphasis me-3 fa-sm"></i>Institucional
                    </a>
                    <hr class="mb-1 my-2 w-50 text-primary">
                    <div class="collapse ms-4" id="collapseExample">
                        <a class="link-hover " href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                            <i class="fas fa-minus text-primary-emphasis me-2 fa-sm"></i>O Instituto
                        </a>
                        <hr class="mb-1 my-2 w-50 text-primary">
                        <a class="link-hover" href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                            <i class="fas fa-minus text-primary-emphasis me-2 fa-sm"></i>Histórico
                        </a>
                        <hr class="my-2 w-50 text-primary">
                        <a class="link-hover" href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                            <i class="fas fa-minus text-primary-emphasis me-2 fa-sm"></i>Conselho
                        </a>
                        <hr class="my-2 w-50 text-primary">
                    </div>
                </div>
                <div class="col ms-4">
                    <a class="link-hover" href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                        <i class="fas fa-minus text-primary-emphasis me-2"></i>Plano de Integridade
                    </a>
                    <hr class="my-2 w-50 text-primary">
                </div>
                <div class="col ms-4">
                    <a class="link-hover" href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                        <i class="fas fa-minus text-primary-emphasis me-2"></i>Legislação
                    </a>
                    <hr class="my-2 w-50 text-primary">
                </div>
                <div class="col ms-4">
                    <a class="link-hover" href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                        <i class="fas fa-minus text-primary-emphasis me-2"></i>Mapa estratégico
                    </a>
                    <hr class="my-2 w-50 text-primary">
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-5">
            <a class="text-primary text-decoration-none">Fale Conosco</a>
            <hr class="mb-1 my-2 w-75 text-primary">
            <div class="row-cols">
                <div class="col ms-4">
                    <a class="link-hover" data-bs-toggle="collapse" href="#collapseExample" role="button"
                        aria-expanded="false" aria-controls="collapseExample">
                        <i class="fas fa-chevron-right text-primary-emphasis me-3 fa-sm"></i>Institucional
                    </a>
                    <hr class="mb-1 my-2 w-50 text-primary">
                    <div class="collapse ms-4" id="collapseExample">
                        <a class="link-hover" href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                            <i class="fas fa-minus text-primary-emphasis me-2 fa-sm"></i>O Instituto
                        </a>
                        <hr class="mb-1 my-2 w-50 text-primary">
                        <a class="link-hover" href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                            <i class="fas fa-minus text-primary-emphasis me-2 fa-sm"></i>Histórico
                        </a>
                        <hr class="my-2 w-50 text-primary">
                        <a class="link-hover" href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                            <i class="fas fa-minus text-primary-emphasis me-2 fa-sm"></i>Conselho
                        </a>
                        <hr class="my-2 w-50 text-primary">
                    </div>
                </div>
                <div class="col ms-4">
                    <a class="link-hover" href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                        <i class="fas fa-minus text-primary-emphasis me-2"></i>Plano de Integridade
                    </a>
                    <hr class="my-2 w-50 text-primary">
                </div>
                <div class="col ms-4">
                    <a class="link-hover" href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                        <i class="fas fa-minus text-primary-emphasis me-2"></i>Legislação
                    </a>
                    <hr class="my-2 w-50 text-primary">
                </div>
                <div class="col ms-4">
                    <a class="link-hover" href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
                        <i class="fas fa-minus text-primary-emphasis me-2"></i>Mapa estratégico
                    </a>
                    <hr class="my-2 w-50 text-primary">
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5">
    </div>
</div>