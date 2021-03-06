<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Requerimientos;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Versdocrequerimientos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="versdocrequerimientos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ReqId_fk')->dropDownList(ArrayHelper::map(Requerimientos::find()->all(),'ReqId','ReqDesc'), ['prompt'=> 'Seleccione el Requerimiento'])?>

    <?= $form->field($model, 'VDReqDocu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'VDReqFechSist')->hiddenInput(['maxlength' => true])->label(false); ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
