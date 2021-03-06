<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\FileInput;
use backend\models\Tipos;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model backend\models\Parametros */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="parametros-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ParHead')->textInput(['disabled' => true]) ?>

    <?= $form->field($model, 'header')->fileInput() ?>

    <?= $form->field($model, 'ParContenido')->textInput(['disabled' => true]) ?>

    <?= $form->field($model, 'content')->fileInput() ?>

    <?= $form->field($model, 'ParFoot')->textInput(['disabled' => true]) ?>

    <?= $form->field($model, 'footer')->fileInput() ?>

    <?= $form->field($model, 'ParMult')->textInput() ?>

    <?= $form->field($model, 'ParFall')->textInput() ?>

    <?= $form->field($model, 'TiposId_fk')->dropDownList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 51')->all(),'TiposId','TiposDesc'), ['prompt'=> 'Seleccione el Tipo'])?>

    <?= $form->field($model, 'ParNemo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ParTiemExpi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
