<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Tipo;

/* @var $this yii\web\View */
/* @var $model backend\models\Tipos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tipos-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'TIPOID')->textInput() ?> -->

    <?= $form->field($model, 'TIPOID')->dropDownList(
            ArrayHelper::map( Tipo::find()->asArray()->all(),'TIPOID','TIPODESC'),
            ['prompt'=>'-->Select Tipo']
            );?>

    <?= $form->field($model, 'TIPOSDESC')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TIPOSVALOR')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
