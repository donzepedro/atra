<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->registerCsrfMetaTags() ?>
        <title></title>
<?php $this->head() ?>
    </head>

<?php $this->beginBody() ?>
    <body>
        <div class="container" style="background-color: #EEF1F4">
            <div class="row pt-4 pb-4 mx-auto text-center">
                <div class=" col-1">Clients</div>
                <div class=" col-1">Credits</div>
                <div class=" col-2">Arbitrazh manager</div>
                <div class=" col-lg-3 "><img src=<?= \Yii::getAlias('@web/img/logo.png') ?>></div>
                <div class=" col-2">News nad pages</div>
                <div class=" col-2">+8 800 888 88 88</div>
                <div class=" col-1"><img src=<?= \Yii::getAlias('@web/img/profile.png') ?>></div>
            </div>
            <?= $content ?>
        </div>
<?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
