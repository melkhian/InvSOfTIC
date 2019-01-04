<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Comandos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comandos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ComNomb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ComDesc')->textarea(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
