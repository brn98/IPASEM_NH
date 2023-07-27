<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

use yii\bootstrap5\Html;

$this->title = 'Transparência';
$this->params['breadcrumbs'][] = ['label' => 'Transparência'];
?>

<div class="container mt-4">
    <div class="row justify-content-between">
        <div class="col-lg-8 col-md-7 col-12">
            <div class="ms-5">
                <h1 class="mb-1" style="font-size: clamp(18px, 1.5vw, 24px); color: rgb(0, 35, 125);">Portal da Transparência</h1>
                <hr class="mt-2" style="background-color: rgb(208, 67, 71);">
            </div>
            <div class="mt-4">
                <div class="">
                    <p>O Portal da Transparência é um canal que disponibiliza de forma clara e organizada as informações da execução orçamentária do Município ao cidadão de Novo Hamburgo. Por meio do Portal, é possível acessar os dados de receita e despesa acumuladas por exercício e por entidade além de filtrar em vários níveis como órgão, função, tipo de gasto e favorecido. Também estão disponíveis informações detalhadas de empenhos, liquidações e pagamentos.</p>
                    <p>Utilizando a tecnologia da informação como forma de tornar pública a prestação de contas de Novo Hamburgo, o Portal da Transparência tem acesso irrestrito e sem necessidade de cadastro ou senhas. Ao acessar o Portal da Transparência, o cidadão fica sabendo de que maneira o dinheiro público está sendo utilizado e auxilia a Administração Pública na fiscalização dos gastos. Este comprometimento é fundamental no processo de participação popular na gestão da Prefeitura Municipal de Novo Hamburgo.</p>
                    <p>Para mais informações da Lei de Acesso à Informação e da sua regulamentação no âmbito do Município de Novo Hamburgo acesse <a href="https://novohamburgo.atende.net/?pg=transparencia#!/" target="_blank" class="noChange">Portal da Transparência de Novo Hamburgo</a>.</p>
                    <p>&nbsp;</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12 shadow h-100 d-inline-block py-2">
            <h1 class="" style="font-size: clamp(16px, 1.2vw, 20px); padding: 10px; margin-bottom: 0px; color: rgb(0, 35, 125); border-bottom: 2px solid rgb(214, 213, 213);">Veja Também</h1>
            <?= $this->render('../layouts/_sidebar') ?>
        </div>
    </div>
</div>

