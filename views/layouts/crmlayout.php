<?php 
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\NewAsset;

NewAsset::register($this);
//$this->registerCssFile("",['rel'=>'stylesheet']);
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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page" href="http://atra/arbitr-manager">Arbitration managers</a>
                  <a class="nav-link active" href="http://atra/arbitr-manager">Bankrupt</a>
                  <a class="nav-link active" href="#">Disabled</a>
                 
                </div>
              </div>
            </div>
        </nav>
            <div class="container"><?= $content ?></div>
        
        
    
    <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>