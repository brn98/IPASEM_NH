<?php
/** @var \yii\web\View $this */

use frontend\assets\AppAsset;
use yii\bootstrap5\Html;

AppAsset::register($this);

?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <?= Yii::$app->view->registerLinkTag([
        'rel' => 'shortcut icon',
        'type' => 'image/ico',
        'href' => Yii::getAlias('@web') . '/images/logo.ico',
    ]) ?>
    <title>
        <?= Html::encode($this->title) ?>
    </title>
    <?php $this->head() ?>
</head>