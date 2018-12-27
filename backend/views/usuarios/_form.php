<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Tipos;
use backend\models\Usuarios;
use backend\models\Dependencias;
/* @var $this yii\web\View */
/* @var $model backend\models\Usuarios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuarios-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'USUNOMB1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'USUNOMB2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'USUAPEL1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'USUAPEL2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'USUIDEN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'USUCARG')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'USUCORR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'USUTELEPERS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'USUTELEOFIC')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'USUESTA')->textInput() ?> -->

    <?= $form->field($model, 'USUESTA')->dropDownList(
            ArrayHelper::map( Tipos::find()->asArray()->where('TIPOID = 1')->all(),'TIPOSID','TIPOSDESC'),
            ['prompt'=>'-->Select Estado']
            );?>

    <?= $form->field($model, 'USUCONT')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'DEPID')->textInput() ?> -->

    <?= $form->field($model, 'DEPID')->dropDownList(
            ArrayHelper::map( Dependencias::find()->asArray()->all(),'DEPID','DEPNOMBENT'),
            ['prompt'=>'-->Select Dependencia']
            );?>

    <?= $form->field($model, 'AUTHKEY')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ACCESSTOKEN')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
