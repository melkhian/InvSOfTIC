<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Appaplicaciones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appaplicaciones-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'AAplLengServ')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AAplVersApli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AAplBibl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AAplObse1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppId_fk')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
