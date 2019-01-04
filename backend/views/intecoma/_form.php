<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Interfaces;
use backend\models\Comandos;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Intecoma */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="intecoma-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IntiId_fk')->dropDownList(ArrayHelper::map(Interfaces::find()->all(),'IntId','IntNomb'), ['prompt'=> 'Seleccione la Interfaz'])?>

    <?= $form->field($model, 'ComId_fk')->dropDownList(ArrayHelper::map(Comandos::find()->all(),'ComId','ComNomb'), ['prompt'=> 'Seleccione el Comando'])?>

    <?= $form->field($model, 'IcomFunc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IcomDesc')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
