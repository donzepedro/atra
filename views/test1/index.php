<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


$this->title = 'Test1';
?>
<h1><?= Html::encode($this->title) ?></h1>

<?php $form = ActiveForm::begin([
    'id'=> 'testForm',
    'options'=>['class'=>'testform']
]);?>

<?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

<?= $form->field($model, 'password')->passwordInput() ?>

<div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

<?php ActiveForm::end(); ?>