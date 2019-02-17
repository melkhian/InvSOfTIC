<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Auditorias */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="auditorias-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'UsuId_fk')->textInput() ?>

    <?= $form->field($model, 'AudAcci')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AudDatoAnte')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AudDatoDesp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AudIp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AudFechHora')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
