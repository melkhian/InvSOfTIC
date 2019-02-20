<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Tipos;

/* @var $this yii\web\View */
/* @var $model backend\models\Empsoporte */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="empsoporte-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ESopNit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ESopNomb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ESopDire')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ESopCont')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk1')
        ->dropDownList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 1')->all(),'TiposId','TiposDesc'),
        ['prompt'=> 'Seleccione el Tipo de Empresa'])?>

    <?= $form->field($model, 'ESopTelePers')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ESopTeleOfic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ESopCorr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk2')
        ->dropDownList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 12')->all(),'TiposId','TiposDesc'),
        ['prompt'=> 'Seleccione el Tipo de Empresa'])?>


    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
