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
                        <i class="fas fa-chevron-right text-primary-emphasis me-3 fa-sm rotate-icon"></i>Institucional
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
                    <a class="link-hover" data-bs-toggle="collapse" href="#collapseServicos" role="button"
                        aria-expanded="false" aria-controls="collapseServicos">
                        <i class="fas fa-chevron-right text-primary-emphasis me-3 fa-sm rotate-icon"></i>Institucional
                    </a>
                    <hr class="mb-1 my-2 w-50 text-primary">
                    <div class="collapse ms-4" id="collapseServicos">
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
                    <a class="link-hover" data-bs-toggle="collapse" href="#collapseAssistencia" role="button"
                        aria-expanded="false" aria-controls="collapseAssistencia">
                        <i <i
                            class="fas fa-chevron-right text-primary-emphasis me-3 fa-sm rotate-icon"></i>Institucional
                    </a>
                    <hr class="mb-1 my-2 w-50 text-primary">
                    <div class="collapse ms-4" id="collapseAssistencia">
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
                    <a class="link-hover" data-bs-toggle="collapse" href="#collapsePrevidencia" role="button"
                        aria-expanded="false" aria-controls="collapsePrevidencia">
                        <i class="fas fa-chevron-right text-primary-emphasis me-3 fa-sm rotate-icon"></i>Institucional
                    </a>
                    <hr class="mb-1 my-2 w-50 text-primary">
                    <div class="collapse ms-4" id="collapsePrevidencia">
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
                    <a class="link-hover" data-bs-toggle="collapse" href="#collapseTransparencia" role="button"
                        aria-expanded="false" aria-controls="collapseTransparencia">
                        <i class="fas fa-chevron-right text-primary-emphasis me-3 fa-sm rotate-icon"></i>Institucional
                    </a>
                    <hr class="mb-1 my-2 w-50 text-primary">
                    <div class="collapse ms-4" id="collapseTransparencia">
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
                    <a class="link-hover" data-bs-toggle="collapse" href="#collapseEditais" role="button"
                        aria-expanded="false" aria-controls="collapseEditais">
                        <i class="fas fa-chevron-right text-primary-emphasis me-3 fa-sm rotate-icon"></i>Institucional
                    </a>
                    <hr class="mb-1 my-2 w-50 text-primary">
                    <div class="collapse ms-4" id="collapseEditais">
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
            <a class="text-primary text-decoration-none">Atendimento</a>
            <hr class="mb-1 my-2 w-75 text-primary">
            <div class="row-cols">
                <div class="col ms-4">
                    <a class="link-hover" data-bs-toggle="collapse" href="#collapseAtendimento" role="button"
                        aria-expanded="false" aria-controls="collapseAtendimento">
                        <i class="fas fa-chevron-right text-primary-emphasis me-3 fa-sm rotate-icon"></i>Institucional
                    </a>
                    <hr class="mb-1 my-2 w-50 text-primary">
                    <div class="collapse ms-4" id="collapseAtendimento">
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