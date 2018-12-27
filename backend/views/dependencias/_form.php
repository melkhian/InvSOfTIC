<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Tipos;
/* @var $this yii\web\View */
/* @var $model backend\models\Dependencias */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dependencias-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DEPNOMBENT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DEPENCARGADO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DEPCARGO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DEPTELEFONO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DEPDIRECCION')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'DEPTIPO')->textInput() ?> -->


    <?= $form->field($model, 'DEPTIPO')->dropDownList(
            ArrayHelper::map( Tipos::find()->asArray()->where('TIPOID = 2')->all(),'TIPOSID','TIPOSDESC'),
            ['prompt'=>'-->Select Dependencia']
            );?>

    <?= $form->field($model, 'DEPMAIL')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
