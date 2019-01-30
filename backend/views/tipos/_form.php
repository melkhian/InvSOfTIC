<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Tipo;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Tipos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tipos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TipoId_fk')->dropDownList(ArrayHelper::map(Tipo::find()->orderBy("TipoDesc ASC")->all(),'TipoId','TipoDesc'), ['prompt'=> 'Seleccione el Tipo'])?>

    <?= $form->field($model, 'TiposDesc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposValo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
