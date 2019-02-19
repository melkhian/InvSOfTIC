<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Appusuarios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appusuarios-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'AUsuUsua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AUsuDesc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppId_fk')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
