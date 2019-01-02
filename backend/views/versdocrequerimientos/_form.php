<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Versdocrequerimientos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="versdocrequerimientos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ReqId_fk')->textInput() ?>

    <?= $form->field($model, 'VDReqDocu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'VDReqFechSist')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
