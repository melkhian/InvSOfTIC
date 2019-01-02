<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Empdistribuidora */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="empdistribuidora-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'EDisNit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EDisNomb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EDisDire')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EDisCont')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EDisTele')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EDisCorr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
