<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Estrequerimientos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="estrequerimientos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ReqId_fk')->textInput() ?>

    <?= $form->field($model, 'TiposId_fk')->textInput() ?>

    <?= $form->field($model, 'EReqEsta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EReqFech')->textInput() ?>

    <?= $form->field($model, 'EReqFechSist')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
