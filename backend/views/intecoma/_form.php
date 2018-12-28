<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Intecoma */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="intecoma-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IntiId_fk')->textInput() ?>

    <?= $form->field($model, 'ComId_fk')->textInput() ?>

    <?= $form->field($model, 'IcomFunc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IcomDesc')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
