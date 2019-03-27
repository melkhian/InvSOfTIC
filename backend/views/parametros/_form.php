<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Parametros */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="parametros-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ParHead')->textInput(['maxlength' => true, 'autofocus' => true]) ?>

    <?= $form->field($model, 'ParFoot')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ParMult')->textInput() ?>

    <?= $form->field($model, 'ParFall')->textInput() ?>

    <?= $form->field($model, 'TiposId_fk')->textInput() ?>

    <?= $form->field($model, 'ParNemo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ParTiemExpi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
