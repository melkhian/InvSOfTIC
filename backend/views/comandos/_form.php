<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Comandos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comandos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'COMANOM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'COMADESC')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
