<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Apparchivos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="apparchivos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'AArcDirec')->textInput(['maxlength' => true, 'autofocus' => true]) ?>

    <?= $form->field($model, 'AArcNombArch')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AArcVari')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AArcNombVari')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AArcDescPara')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppId_fk')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
