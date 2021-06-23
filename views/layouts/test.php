<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\assets\AppAsset;

AppAsset::register($this);
$this->registerCssFile("@web/css/basestyle.css",['rel'=>'stylesheet']);
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
            
            <div class="row pt-4 pb-4 mx-auto-lg ">
                <div class=" col-lg-1 d-none d-lg-block my-auto">Clients</div>
                <div class=" col-lg-1 d-none d-lg-block my-auto">Credits</div>
                <div class=" col-lg-2 d-none d-lg-block my-auto">Arbitrazh manager</div>
                <div class="col-3 col-lg-3 text-center"><img src=<?= \Yii::getAlias('@web/img/logo.png') ?>></div>
                <div class=" col-lg-2 d-none d-lg-block my-auto">News nad pages</div>
                <div class=" col-lg-2 d-none d-lg-block my-auto">+8 800 888 88 88</div>
                <div class="col-2 col-md-2 col-lg-1 ml-auto " id="profile"><img src=<?= \Yii::getAlias('@web/img/profile.png') ?>></div>
                <div class="dropdown">
                    <div class="btn btn-primary dropdown-toggle" type="button">
                        some
                    </div>    
            </div>
            <?= $content ?>
        </div>
<?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
