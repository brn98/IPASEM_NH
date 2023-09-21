<?php
use yii\widgets\Pjax;
use yii\bootstrap5\Html;

/** @var yii\web\View $this */

if ($this->context->route != 'site/index') {
    $this->params['breadcrumbs'][] = $this->title = 'Editais';
}

$connection = Yii::$app->db3;

$itensPorPagina = 5;
$paginaAtual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
$offset = ($paginaAtual - 1) * $itensPorPagina;

// Inicie o widget Pjax
Pjax::begin(['id' => 'editais-pjax']); // Use um ID exclusivo para identificar este Pjax

$sql = "SELECT * FROM licitacoesSub WHERE publicar = 1 ORDER BY data_postagem DESC LIMIT $itensPorPagina OFFSET $offset";
$resultado = $connection->createCommand($sql)->queryAll();
?>


<?php foreach ($resultado as $licitacao) { ?>
    <div class="col-12">
        <div class="row-cols ms-2">
            <div class="col text-truncate small mb-1" style="max-width: 350px;">
                <?php echo "{$licitacao['modalidade']}"; ?>
            </div>
            <div class="col ms-2 small">
                <i class="fas fa-file-alt text-primary-emphasis opacity-50 fs-5"></i>
                <?= 
                    Html::a("Número da Licitação:<br> {$licitacao['nome']}<br>", 
                    [
                    'gerar-pdf', 
                    'id' => $licitacao['id'], 
                    'isDiverse' => $licitacao['is_Diverse']
                    ], 
                    [
                        'target' => '_blank','data-pjax' => '0',
                    ]) 
                ?>
            </div>
            <div class="col ms-2 small">
                <div class="row">
                    <div class="col small">
                        <?php echo "Postado em: <strong class='small'>{$licitacao['data_post']}</strong><br>"; ?>
                    </div>
                    <div class="col small">
                        <?php if ($licitacao['ano_ref']) {
                            echo "Ano Ref: <strong class='small'>{$licitacao['ano_ref']}</strong><br>";
                        } ?>
                    </div>
                </div>
            </div>
        </div>
        <hr class="m-0 my-1">
    </div>
<?php } ?>


<div class="text-center p-1">
    <?php
    $proximaPagina = $paginaAtual + 1;
    $paginaAnterior = $paginaAtual - 1;

    if ($paginaAnterior > 0) {
        echo "<a class='me-2' href='?pagina=$paginaAnterior'>Voltar</a>";
    }
    if (count($resultado) == $itensPorPagina) {
        echo "<a class='ms-2' href='?pagina=$proximaPagina'>Ver mais</a>";
    }
    ?>
</div>

<?php Pjax::end(); ?>