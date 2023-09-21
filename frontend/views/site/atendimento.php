<?php

/** @var yii\web\View $this */


$this->title = 'Atendimento';
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
</div>

<div class="container-fluid bg-cinza ">
    <div class="row flex-column-reverse flex-md-row">
        <!-- Coluna de Texto (à esquerda em telas maiores) -->
        <div class="col-md-6 order-md-1 d-flex align-items-center">
            <div class="-tex w-75 mx-auto">
                <h2 class="text-azul mt-3">Atendimento para você </h2>
                <p class="text-disable">
                    Acesse nossos canais de atendimento online, encontre o endereço do Ipasem mais próximo ou consulte
                    nossa área de Perguntas Frequentes
                </p>
            </div>
        </div>
        <div class="col-md-6 order-md-2 d-flex align-items-center">
            <img class="w-75 mx-auto" src="https://sebrae.com.br/Sebrae/Portal Sebrae/Fale Conosco/img_topofale.png">
        </div>
    </div>
</div>
<div id="contatos" class="container mt-5 ">
    <div class="row">
        <!-- nesta pagina -->
        <div class="col-12 col-md-6 col-lg-3 order-md-1">
            <a href="pagina4.html" class="card-link text-decoration-none">
                <div class="card shadow mb-3">
                    <div class="card-body">
                        <h1 class="ms-3 mt-2" style="font-size: clamp(16px, 1.2vw, 20px); color: rgb(0, 35, 125);">
                            Nesta página</h1>
                        <hr>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-chevron-right text-primary-emphasis me-3"></i>
                            <a class="text-decoration-none" href="#contatos">Contato</a>

                        </div>
                        <hr class="my-auto mt-3">
                        <div class="col-12 mt-3 ">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-chevron-right text-primary-emphasis me-3"></i>
                                <a class="text-decoration-none"
                                    href="<?= \yii\helpers\Url::to(['/site/index']) ?>">Localização</a>
                            </div>
                            <hr class="my-auto mt-3">
                            <div class="col-12 mt-3 ">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-chevron-right text-primary-emphasis me-3"></i>
                                    <a class="text-decoration-none"
                                        href="<?= \yii\helpers\Url::to(['/site/index']) ?>">Ramais</a>
                                </div>
                                <hr class="my-auto mt-3">
                                <div class="col-12 mt-3 ">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-chevron-right text-primary-emphasis me-3"></i>
                                        <a class="text-decoration-none"
                                            href="<?= \yii\helpers\Url::to(['/site/index']) ?>">Perguntas frequentes</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div href="#contatos" class="container mt-5">
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="h2 text-azul">Contatos</div>
                    <hr class="mt-2 col-6" style="background-color: rgb(208, 67, 71);">
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <a class="card-link text-decoration-none">
                <div class="card mb-3 shadow hover-grow ">
                    <img src="<?= Yii::getAlias('@web') ?>/images/email.png" alt="Logo" class="w-100">
                    <div class="card-body">
                        <h5 class="card-title">Telefone</h5>
                        <p class="card-text">(51) 3594-9162</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <a href="pagina2.html" class="card-link text-decoration-none">
                <div class="card mb-3 shadow hover-grow">
                    <img src="<?= Yii::getAlias('@web') ?>/images/email.png" alt="Logo" class="w-100">
                    <div class="card-body">
                        <h5 class="card-title">E-mail</h5>
                        <p class="card-text">ipasemnh@gmail.com</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <a href="pagina3.html" class="card-link text-decoration-none">
                <div class="card mb-3 shadow hover-grow ">
                    <img src="<?= Yii::getAlias('@web') ?>/images/email.png" alt="Logo" class="w-100">
                    <div class="card-body">
                        <h5 class="card-title">E-mail Médico</h5>
                        <p class="card-text">ipasemnh@gmail.com</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div href="#contatos" class="container mt-5">
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="h2 text-azul">Localização</div>
                    <hr class="mt-2 col-6" style="background-color: rgb(208, 67, 71);">
                </div>
            </div>
        </div>
        <div class="card">

  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>