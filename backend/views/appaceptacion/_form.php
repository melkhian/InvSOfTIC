<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Appaceptacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appaceptacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'AAceNomb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AAceCarg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AAceArea')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppId_fk')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
