<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AppPlugins */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="app-plugins-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'APluNomb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'APluLice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ApluDesc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppId_fk')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
