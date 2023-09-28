<?php

/** @var yii\web\View $this */

$this->title = 'Atendimento';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container-fluid bg-cinza ">
    <div class="container">
        <div class="row flex-column-reverse flex-md-row">
            <!-- Coluna de Texto (à esquerda em telas maiores) -->
            <div class="col-md-6 d-flex align-items-center">
                <div class="w-75 mx-auto">
                    <div class="text-azul h1">Atendimento para você</div>
                    <p class="text-disable h5">
                        Acesse nossos canais de atendimento online, encontre o endereço do Ipasem mais
                        próximo ou consulte nossa área de Perguntas Frequentes.
                    </p>
                </div>
            </div>
            <div class="col-md-6  d-flex align-items-center">
                <img class="w-75 mx-auto"
                    src="https://sebrae.com.br/Sebrae/Portal Sebrae/Fale Conosco/img_topofale.png">
            </div>
        </div>
    </div>
</div>

<button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top"
    data-bs-custom-class="custom-tooltip" data-bs-title="This top tooltip is themed via CSS variables.">
    Custom tooltip
</button>
<div class="container">
    <div class="row position-relative">
        <div class="col-12 col-lg-9 col-md-6 order-2 order-md-1">
            <div class="row">
                <div class="row">
                    <div id="contatos">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <div class="h2 mt-5 text-azul">Contatos</div>
                                <hr class="mt-2 col-6" style="background-color: rgb(208, 67, 71);">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
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
                    <div class="col-12 col-md-6 col-lg-4">
                        <a href="pagina2.html" class="card-link text-decoration-none">
                            <div class="card mb-3 shadow hover-grow">
                                <img src="<?= Yii::getAlias('@web') ?>/images/email.png" a lt="Logo" class="w-100">
                                <div class="card-body">
                                    <h5 class="card-title">E-mail</h5>
                                    <p class="card-text">ipasemnh@gmail.com</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
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
                <div class="row" id="#localizacao">
                    <div class="col-12 mb-3">
                        <div class="h2 text-azul mt-5">Localização</div>
                        <hr class="mt-2 col-6" style="background-color: rgb(208, 67, 71);">
                    </div>
                    <div class="col-12 col-md-6 col-lg-9 shadow mb-5 ">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3466.131932292883!2d-51.13747112421412!3d-29.686954414791508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951943a8f7a32339%3A0x4929904d0d68df2b!2sInstituto%20de%20Previd%C3%AAncia%20e%20Assist%C3%AAncia%20dos%20Servidores%20Municipais%20de%20Novo%20Hamburgo!5e0!3m2!1spt-BR!2sbr!4v1695306894687!5m2!1spt-BR!2sbr"
                            width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 order-md-1">
            <div class="card shadow mb-3">
                <div class="card-body">
                    <h1 class="ms-3 mt-2" style="font-size: clamp(16px, 1.2vw, 20px); color: rgb(0, 35, 125);">Nesta
                        página</h1>
                    <hr>
                    <div id="contatos">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-chevron-right text-primary-emphasis me-3"></i>
                            <a class="text-decoration-none" href="#contatos">Contato</a>
                        </div>
                    </div>
                    <hr class="my-auto mt-3">
                    <div class="col-12 mt-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-chevron-right text-primary-emphasis me-3"></i>
                            <a class="text-decoration-none" href="#localizacao">Localização</a>
                        </div>
                    </div>
                    <hr class="my-auto mt-3">
                    <div class="col-12 mt-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-chevron-right text-primary-emphasis me-3"></i>
                            <a class="text-decoration-none"
                                href="<?= \yii\helpers\Url::to(['/site/index']) ?>">Ramais</a>
                        </div>
                        <hr class="my-auto mt-3">
                        <div class="col-12 mt-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-chevron-right text-primary-emphasis me-3"></i>
                                <a class="text-decoration-none"
                                    href="<?= \yii\helpers\Url::to(['/site/index']) ?>">Perguntas
                                    frequentes</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-cinza">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9 col-md-6">
                <div class="row">
                    <div class="col-12 mb-3 mt-5">
                        <div class="h2 text-azul">Suporte ao Usúario </div>
                        <hr class="mt-2 col-6" style="background-color: rgb(208, 67, 71);">
                        <div class="h4 text-azul mt-4 mb-4">Suporte a problemas de acesso </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <a class="card-link text-decoration-none">
                            <div class="card mb-3 shadow hover-grow ">
                                <img src="<?= Yii::getAlias('@web') ?>/images/email.png" alt="Logo" class="w-100">
                                <div class="card-body">
                                    <h5 class="card-title">Abrir um chamado</h5>
                                    <p class="card-text custom-text-truncate">
                                        Problemas relacionado aos Portais da Assistência
                                        a Saúde e Previdência</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <a href="pagina2.html" class="card-link text-decoration-none">
                            <div class="card mb-3 shadow hover-grow">
                                <img src="<?= Yii::getAlias('@web') ?>/images/email.png" a lt="Logo" class="w-100">
                                <div class="card-body">
                                    <h5 class="card-title">Ouvidoria</h5>
                                    <p class="card-text custom-text-truncate">Sugestões, denúncias, elogios ou
                                        reclamações,
                                        entre em contato com a nossa ouvidoria.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 mb-3 mt-5">
                        <div class="h2 text-azul">Dúvidas frequentes sobre acesso aos Portais </div>
                        <hr class="mt-2 col-6 mb-5" style="background-color: rgb(208, 67, 71);">
                        <div class="accordion col-md-9 mb-5" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Primeiro acesso ao portal Assistência a Sáude
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default,
                                        until the collapse plugin adds the appropriate classes that we use to
                                        style
                                        each
                                        element. These classes control the overall appearance, as well as the
                                        showing and
                                        hiding via CSS transitions. You can modify any of this with custom CSS
                                        or
                                        overriding our default variables. It's also worth noting that just about
                                        any
                                        HTML can go within the <code>.accordion-body</code>, though the
                                        transition
                                        does
                                        limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Não recbi o email para alterar a senha do portal Assitência a Saúde
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the second item's accordion body.</strong> It is hidden
                                        by
                                        default,
                                        until the collapse plugin adds the appropriate classes that we use to
                                        style
                                        each
                                        element. These classes control the overall appearance, as well as the
                                        showing and
                                        hiding via CSS transitions. You can modify any of this with custom CSS
                                        or
                                        overriding
                                        our default variables. It's also worth noting that just about any HTML
                                        can
                                        go within
                                        the <code>.accordion-body</code>, though the transition does limit
                                        overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Período de carência
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden
                                        by
                                        default,
                                        until
                                        the
                                        collapse plugin adds the appropriate classes that we use to style each
                                        element.
                                        These
                                        classes
                                        control the overall appearance, as well as the showing and hiding via
                                        CSS
                                        transitions.
                                        You
                                        can
                                        modify any of this with custom CSS or overriding our default variables.
                                        It's
                                        also
                                        worth
                                        noting
                                        that
                                        just about any HTML can go within the <code>.accordion-body</code>,
                                        though
                                        the
                                        transition
                                        does
                                        limit
                                        overflow.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-9 col-md-6">
            <div class="row" id="#localizacao">
                <div class="col-12 mb-3">
                    <div class="h2 text-azul mt-5">Perguntas frequentes</div>
                    <hr class="mt-2 col-6" style="background-color: rgb(208, 67, 71);">
                    <div class="accordion col-md-9 mb-5" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Meu RPPS
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                    default, until the
                                    collapse
                                    plugin adds the appropriate classes that we use to style each element.
                                    These
                                    classes control
                                    the
                                    overall appearance, as well as the showing and hiding via CSS
                                    transitions.
                                    You
                                    can modify
                                    any of
                                    this with custom CSS or overriding our default variables. It's also
                                    worth
                                    noting
                                    that just
                                    about
                                    any
                                    HTML can go within the <code>.accordion-body</code>, though the
                                    transition
                                    does
                                    limit
                                    overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Portal da Assistência
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden
                                    by
                                    default, until
                                    the
                                    collapse plugin adds the appropriate classes that we use to style each
                                    element.
                                    These
                                    classes
                                    control the overall appearance, as well as the showing and hiding via
                                    CSS
                                    transitions. You
                                    can
                                    modify any of this with custom CSS or overriding our default variables.
                                    It's
                                    also worth
                                    noting
                                    that
                                    just about any HTML can go within the <code>.accordion-body</code>,
                                    though
                                    the
                                    transition
                                    does
                                    limit
                                    overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Portal da Previdência
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden
                                    by
                                    default, until the
                                    collapse plugin adds the appropriate classes that we use to style each
                                    element.
                                    These
                                    classes
                                    control the overall appearance, as well as the showing and hiding via
                                    CSS
                                    transitions. You
                                    can
                                    modify any of this with custom CSS or overriding our default variables.
                                    It's
                                    also worth
                                    noting
                                    that
                                    just about any HTML can go within the <code>.accordion-body</code>,
                                    though
                                    the
                                    transition
                                    does
                                    limit
                                    overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

</script>

<style></style>