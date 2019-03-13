<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Dependencias;
use backend\models\Aplicaciones;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Appdependencias */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appdependencias-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DepId_fk')->dropDownList(ArrayHelper::map(Dependencias::find()->all(),'DepId','DepNomb'), ['prompt'=> 'Seleccione la Dependencia'])?>

    <?= $form->field($model, 'AppId_fk')->dropDownList(ArrayHelper::map(Aplicaciones::find()->all(),'AppId','AppNomb'), ['prompt'=> 'Seleccione la Aplicación'])?>

    <?= $form->field($model, 'ADepCantUsua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ADepFechSist')->hiddenInput(['maxlength' => true])->label(false); ?>


    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
