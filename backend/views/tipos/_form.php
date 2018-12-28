<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Tipos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tipos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TiposId')->textInput() ?>

    <?= $form->field($model, 'TipoId_fk')->textInput() ?>

    <?= $form->field($model, 'TiposDesc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposValo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
