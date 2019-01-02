<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Dependencias */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dependencias-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DepNomb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DepEnca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk1')->textInput() ?>

    <?= $form->field($model, 'DepTele')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DepDire')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk2')->textInput() ?>

    <?= $form->field($model, 'DepCorr')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
