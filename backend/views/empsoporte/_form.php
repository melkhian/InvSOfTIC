<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Empsoporte */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="empsoporte-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ESopNit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ESopNomb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ESopDire')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ESopCont')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UsuId_fk')->textInput() ?>

    <?= $form->field($model, 'ESopTelePers')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ESopTeleOfic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ESopCorr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
