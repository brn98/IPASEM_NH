<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Portais';
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
    <div class="row">
        <div class="col h3">Portal da Assistência</div>
        <div class="col d-flex justify-content-end">
            <a href="https://assistweb.ipasemnh.com.br/site/login" target="_blank">
                <div class="btn btn-success me-5">Acessar</div>
            </a>
        </div>
        <div class="col h3">Portal da Previdência</div>
        <div class="col d-flex justify-content-end">
            <a href="https://nuvem.agendadatacenter.com.br/novohamburgo/portal/Login/Login.aspx" target="_blank">
                <div class="btn btn-secondary me-5">Acessar</div>
            </a>
        </div>
        <div class="row mt-5">
            <div class="col">
                <p>
                    <strong>O Portal de Assistência IPASEM é a sua plataforma online, desenvolvida para tornar mais
                        acessíveis e práticos os serviços relacionados à sua assistência à saúde.</strong> Através deste
                    portal, você poderá realizar uma série de tarefas de forma simples e eficiente, mantendo o controle
                    das suas necessidades médicas e odontológicas.
                </p>
                <p>
                    Aqui, apresentamos algumas das principais utilidades do portal, projetadas para facilitar a sua
                    experiência e fornecer um acesso transparente aos serviços prestados pelo IPASEM. Confira abaixo
                    como essas funcionalidades podem beneficiar você e sua família.
                </p>
                <ul>
                    <li><strong>Emissão de Ordem Médica e Odontológica:</strong> O Portal oferece a comodidade de emitir
                        ordens médicas e odontológicas, simplificando o agendamento de consultas e exames de forma
                        eficiente.</li>
                    <li><strong>Histórico de Consultas:</strong> Tenha acesso ao seu histórico completo de consultas
                        médicas, possibilitando o acompanhamento de tratamentos e procedimentos realizados
                        anteriormente.</li>
                    <li><strong>Extrato de Coparticipação:</strong> Visualize um extrato detalhado dos valores
                        referentes à coparticipação em suas despesas médicas, auxiliando na compreensão dos custos
                        relacionados à assistência à saúde.</li>
                    <li><strong>Extrato de Coparticipação para Declaração de IRPF:</strong> Obtenha extratos específicos
                        para a declaração do Imposto de Renda, facilitando a comprovação de despesas médicas dedutíveis
                        junto à Receita Federal.</li>
                </ul>
                <p>
                    <strong>Orientações Importantes:</strong> Por vezes, determinadas situações requerem assistência
                    direta junto ao IPASEM. Esteja ciente de que nossos canais de atendimento estão disponíveis para
                    fornecer orientações personalizadas, garantindo a melhor assistência possível.
                </p>
                <p>
                    Estas ferramentas oferecem aos segurados a praticidade de gerenciar aspectos essenciais de sua
                    assistência médica de maneira online, de acordo com os princípios de eficiência e transparência que
                    orientam o IPASEM como um órgão público comprometido com o bem-estar de seus segurados.
                </p>
            </div>
            <div class="col">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis vestibulum turpis.
                Pellentesque gravida, ante nec molestie malesuada, odio nunc venenatis purus, at pulvinar mi elit eget
                ligula. Etiam blandit aliquet rhoncus. Aenean non urna mi. Sed nec libero non justo vehicula lobortis
                quis quis dui. Mauris vel justo nec mi ultrices porta. Fusce id dignissim quam. Vestibulum ante ipsum
                primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin lobortis elementum dui et
                iaculis. Etiam molestie, ipsum non mattis pellentesque, ex massa finibus nisl, sed dictum justo quam non
                ex. Integer massa dui, tincidunt a est sed, eleifend semper lacus.</div>

        </div>
    </div>
    <div class="mt-3" id="faq" data-bs-spy="scroll" data-bs-target="#simple-list-example" data-bs-offset="0"
        data-bs-smooth-scroll="false" tabindex="0">
        <div id="simple-list-item-1" class="row">
            <div class="col">
                <button class="btn btn-success btn-lg" type="button" data-bs-toggle="collapse"
                    data-bs-target="#multiCollapseExample1" aria-expanded="false"
                    aria-controls="multiCollapseExample1">Perguntas frequentes sobre o Portal da Assistência</button>

            </div>
            <div class="col">
                <button class="btn btn-secondary btn-lg" type="button" data-bs-toggle="collapse"
                    data-bs-target="#multiCollapseExample2" aria-expanded="false"
                    aria-controls="multiCollapseExample2">Perguntas frequentes sobre o Portal da Previdência</button>

            </div>
        </div>
        <div class="collapse multi-collapse" id="multiCollapseExample1" data-bs-parent="#faq">
            <div class="accordion mt-3" id="faqAssist">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Accordion Item #1
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAssist">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to
                            demonstrate the <code>.accordion-flush</code> class. This is the first item's
                            accordion body.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Accordion Item #2
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAssist">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to
                            demonstrate the <code>.accordion-flush</code> class. This is the second item's
                            accordion body. Let's imagine this being filled with some actual content.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                            Accordion Item #3
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAssist">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to
                            demonstrate the <code>.accordion-flush</code> class. This is the third item's
                            accordion body. Nothing more exciting happening here in terms of content, but just
                            filling up the space to make it look, at least at first glance, a bit more
                            representative of how this would look in a real-world application.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="collapse multi-collapse" id="multiCollapseExample2" data-bs-parent="#faq">
            <div class="accordion mt-3" id="faqAssist">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Accordion Item #1
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAssist">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to
                            demonstrate the <code>.accordion-flush</code> class. This is the first item's
                            accordion body.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Accordion Item #2
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAssist">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to
                            demonstrate the <code>.accordion-flush</code> class. This is the second item's
                            accordion body. Let's imagine this being filled with some actual content.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                            Accordion Item #3
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAssist">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to
                            demonstrate the <code>.accordion-flush</code> class. This is the third item's
                            accordion body. Nothing more exciting happening here in terms of content, but just
                            filling up the space to make it look, at least at first glance, a bit more
                            representative of how this would look in a real-world application.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>