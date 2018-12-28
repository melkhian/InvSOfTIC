<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'usuiden')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuprimnomb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ususegunomb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuprimapel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ususeguapel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usutelepers')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuteleofic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'depid_fk')->textInput() ?>

    <?= $form->field($model, 'tiposid_fk1')->textInput() ?>

    <?= $form->field($model, 'tiposid_fk2')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'auth_key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_hash')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_reset_token')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
