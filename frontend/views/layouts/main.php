<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100 w-100">

<?= $this->render('_head') ?>

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

</html>
<?php $this->endPage();