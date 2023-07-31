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

    <script>
        if (window.matchMedia("(min-width: 768px)").matches) {
            var dropdownItems = document.querySelectorAll('.navbar-nav .dropdown');

            dropdownItems.forEach(function (item) {
                item.addEventListener('mouseenter', function () {
                    if (this.querySelector('.dropdown-toggle')) {
                        this.querySelector('.dropdown-menu').classList.add('show');
                    }
                });

                item.addEventListener('mouseleave', function () {
                    this.querySelector('.dropdown-menu').classList.remove('show');
                });
            });
        } else {
            $('.navbar-nav .dropdown .dropdown-toggle').on('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                $(this).siblings('.dropdown-menu').classList.add('show');
            });

            $(document).on('click', function (e) {
                if ($('.navbar-nav').has(e.target).length === 0) {
                    $('.dropdown-menu').classList.remove('show');
                }
            });
        }
    </script>



</body>

</html>

<?php $this->endPage(); ?>