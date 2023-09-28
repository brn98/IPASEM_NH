<?php

use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;

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


</html>

<?php $this->endPage(); ?>