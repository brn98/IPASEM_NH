<?php

use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\web\YiiAsset;
use yii\bootstrap5\BootstrapPluginAsset;
use yii\web\View;


YiiAsset::register($this);
BootstrapPluginAsset::register($this);
AppAsset::register($this);

$this->beginPage();
?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<?= $this->render('_head') ?>


<?php $this->beginBody() ?>

<?= $this->render('_header') ?>

<main role="main">
    <div class="container position-relative">
        <div class="position-absolute">
            <?= Breadcrumbs::widget([
                'homeLink' => [
                    'label' => Yii::t('yii', 'Inicio'),
                    'url' => Yii::$app->homeUrl,
                ],
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
        </div>
    </div>
    <?= $content ?>
</main>

<?= $this->render('_footer') ?>

<?php $this->endBody() ?>

<?php $this->registerJsFile('@web/js/script.js', ['position' => View::POS_END]); ?>

</html>

<?php $this->endPage(); ?>