<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Cambioalcance */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cambioalcance-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ProId_fk')->textInput() ?>

    <?= $form->field($model, 'CAlcDesc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CAlcFechApro')->textInput() ?>

    <?= $form->field($model, 'CAlcFechInic')->textInput() ?>

    <?= $form->field($model, 'CAlcFechFina')->textInput() ?>

    <?= $form->field($model, 'CAlcFechSist')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
