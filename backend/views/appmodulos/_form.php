<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Appmodulos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appmodulos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'AppId_fk')->textInput() ?>

    <?= $form->field($model, 'AModNomb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AModDesc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk')->textInput() ?>

    <?= $form->field($model, 'AModObse')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
