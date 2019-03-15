<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Dependencias;
use backend\models\Tipos;
use yii\helpers\ArrayHelper;

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

    <?= $form->field($model, 'depid_fk')
    ->dropDownList(ArrayHelper::map(Dependencias::find()->all(),'DepId','DepNomb'), ['prompt'=> 'Seleccione la Dependencia'])?>

    <?= $form->field($model, 'tiposid_fk1')
    ->dropDownList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 1')->all(),'TiposId','TiposDesc'), ['prompt'=> 'Seleccione el Cargo'])?>

    <?= $form->field($model, 'tiposid_fk2')
    ->dropDownList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 2')->all(),'TiposId','TiposDesc'), ['prompt'=> 'Seleccione el Tipo de Contrato'])?>

    <?= $form->field($model, 'status')
    ->dropDownList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 3')->all(),'TiposId','TiposDesc'), ['prompt'=> 'Seleccione el Estado'])?>

    <?= $form->field($model, 'auth_key')->hiddenInput(['maxlength' => true])->label(false); ?>

    <?= $form->field($model, 'password_hash')->hiddenInput(['maxlength' => true])->label(false); ?>

    <?= $form->field($model, 'password_reset_token')->hiddenInput(['maxlength' => true])->label(false); ?>

    <?= $form->field($model, 'created_at')->hiddenInput(['maxlength' => true])->label(false); ?>

    <?= $form->field($model, 'updated_at')->hiddenInput(['maxlength' => true])->label(false); ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
