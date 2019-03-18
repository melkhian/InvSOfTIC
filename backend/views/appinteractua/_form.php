<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Appinteractua */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appinteractua-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'AIntOtroCual')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppId_fk')->textInput() ?>

    <?= $form->field($model, 'AppId_fk1')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
