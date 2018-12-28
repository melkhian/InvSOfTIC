<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Requerimientos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="requerimientos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ProId_fk')->textInput() ?>

    <?= $form->field($model, 'ReqDesc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk1')->textInput() ?>

    <?= $form->field($model, 'UsuId_fk')->textInput() ?>

    <?= $form->field($model, 'Tiposid_fk2')->textInput() ?>

    <?= $form->field($model, 'TiposId_fk3')->textInput() ?>

    <?= $form->field($model, 'ReqFechTomaRequ')->textInput() ?>

    <?= $form->field($model, 'ReqFechSist')->textInput() ?>

    <?= $form->field($model, 'TiposId_fk4')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
