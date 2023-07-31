<?php

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\web\YiiAsset;
use yii\bootstrap5\BootstrapPluginAsset;

YiiAsset::register($this);
BootstrapPluginAsset::register($this);
AppAsset::register($this);

$this->beginPage();
?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100 w-100">
<?= $this->render('_head') ?>

<body class="d-flex flex-column h-100">

    <?php $this->beginBody() ?>

    <?= $this->render('_header') ?>

    <main role="main" class="flex-shrink-0">
        <div class="container">
            <?= Breadcrumbs::widget([
                'homeLink' => [
                    'label' => Yii::t('yii', 'Inicio'),
                    'url' => Yii::$app->homeUrl,
                ],
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
        </div>
        <?= $content ?>
    </main>

    <?php $this->endBody() ?>

    <!-- JavaScript para mostrar o menu dropdown no hover -->
    <script>
        $(document).ready(function () {
            // Verifique se o tamanho da tela é maior que md (media query do Bootstrap)
            if ($(window).width() > 767) {
                // Encontre todos os itens de menu que possuem subitens
                var dropdownItems = $('.navbar-nav .nav-item.dropdown');

                // Adicione o evento de hover nesses itens
                dropdownItems.hover(function () {
                    // Encontre o menu dropdown dentro do item atual e mostre-o
                    $(this).find('.dropdown-menu').addClass('show');
                }, function () {
                    // Quando o hover é removido, esconda o menu dropdown
                    $(this).find('.dropdown-menu').removeClass('show');
                });

                // Adicione o evento de hover nos subitens do menu
                var dropdownSubItems = $('.navbar-nav .dropdown-menu .dropdown-item');
                dropdownSubItems.hover(function () {
                    // Encontre o menu dropdown pai e adicione a classe show
                    $(this).closest('.dropdown').addClass('show');
                }, function () {
                    // Quando o hover é removido, remova a classe show do menu dropdown pai
                    $(this).closest('.dropdown').removeClass('show');
                });

                console.log('O código JavaScript está sendo executado!');
            }
        });

    </script>

</body>

</html>

<?php $this->endPage(); ?>