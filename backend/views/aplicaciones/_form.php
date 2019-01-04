<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Tipos;
use backend\models\Empdistribuidora;
use backend\models\Empsoporte;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Aplicaciones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aplicaciones-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'AppNomb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppDesc')->textarea(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppVers')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk1')->dropDownList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 5')->all(),'TiposId','TiposDesc'), ['prompt'=> 'Seleccione la Dependencia'])?>

    <?= $form->field($model, 'AppNumeLice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk2')->dropDownList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 6')->all(),'TiposId','TiposDesc'), ['prompt'=> 'Seleccione el Nivel Administrativo'])?>

    <?= $form->field($model, 'TiposId_fk3')->dropDownList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 7')->all(),'TiposId','TiposDesc'), ['prompt'=> 'Seleccione el Tipo de Propiedad'])?>

    <?= $form->field($model, 'EDDesId_fk')->dropDownList(ArrayHelper::map(Empdistribuidora::find()->all(),'EDisId','EDisNomb'), ['prompt'=> 'Seleccione la Empresa Distribuidora'])?>

    <?= $form->field($model, 'TiposId_fk4')->dropDownList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 8')->all(),'TiposId','TiposDesc'), ['prompt'=> 'Seleccione el Sistema Operativo'])?>

    <?= $form->field($model, 'TiposId_fk5')->dropDownList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 9')->all(),'TiposId','TiposDesc'), ['prompt'=> 'Seleccione la Relación con Aplicativo'])?>

    <?= $form->field($model, 'AppInteApp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ESopId_fk')->dropDownList(ArrayHelper::map(Empsoporte::find()->all(),'ESopId','ESopNomb'), ['prompt'=> 'Seleccione la Empresa de Soporte'])?>

    <?= $form->field($model, 'TiposId_fk6')->dropDownList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 10')->all(),'TiposId','TiposDesc'), ['prompt'=> 'Seleccione el Método de Copia de Seguridad'])?>

    <?= $form->field($model, 'TiposId_fk7')->dropDownList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 11')->all(),'TiposId','TiposDesc'), ['prompt'=> 'Seleccione la Política de Copia de Seguridad'])?>

    <?= $form->field($model, 'AppVersBD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppBaseDato')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
