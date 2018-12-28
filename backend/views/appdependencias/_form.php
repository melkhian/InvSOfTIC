<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Appdependencias */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appdependencias-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DepId_fk')->textInput() ?>

    <?= $form->field($model, 'AppId_fk')->textInput() ?>

    <?= $form->field($model, 'ADepCantUsua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ADepFechSist')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
