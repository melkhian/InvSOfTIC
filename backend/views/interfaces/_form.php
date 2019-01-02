<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Interfaces */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="interfaces-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IntNomb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IntDesc')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
