<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Appparametros */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appparametros-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'AParUrlFuen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AParServ')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AParPuer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AParDirec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppId_fk')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
