<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Tipos;
use backend\models\Aplicaciones;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Appmodulos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appmodulos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'AppId_fk')
    ->dropDownList(ArrayHelper::map(Aplicaciones::find()
    ->all(),'AppId','AppNomb'), ['prompt'=> 'Seleccione el Aplicativo'])?>

    <!-- <?= $form->field($model, 'AppId_fk')->textInput() ?> -->

    <?= $form->field($model, 'AModNomb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AModDesc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk')
    ->dropDownList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')
    ->all(),'TiposId','TiposDesc'), ['prompt'=> 'Seleccione la respuesta'])?>

    <!-- <?= $form->field($model, 'TiposId_fk')->textInput() ?> -->

    <?= $form->field($model, 'AModObse')->textInput(['maxlength' => true]) ?>

    <div class="form-group">

        <?= Html::submitButton('Crear', ['class' => 'btn btn-success']) ?>

    </div>

    <?php ActiveForm::end(); ?>

</div>
