<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Appbasedatos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appbasedatos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ABasMane')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ABasVersBD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ABasPuer1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ABasObse2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppId_fk')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
