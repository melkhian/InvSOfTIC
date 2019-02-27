<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Appdirectorios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appdirectorios-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ADirDirec')->textInput(['maxlength' => true, 'autofocus' => true]) ?>

    <?= $form->field($model, 'ADirDesc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppId_fk')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
