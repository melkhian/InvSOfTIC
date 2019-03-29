<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Aplicaciones;
use backend\models\User;
use backend\models\Tipos;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;
use yii\bootstrap\Tabs;
use wbraganca\dynamicform\DynamicFormWidget;


/* @var $this yii\web\View */
/* @var $model backend\models\Formulario */
/* @var $form yii\widgets\ActiveForm */
?>
<br>

<?= $form->field($model, 'AppId_fk')->dropDownList(ArrayHelper::map(Aplicaciones::find()->orderBy("AppNomb ASC")->all(),'AppId','AppNomb'), ['prompt'=> 'Seleccione la Aplicación'])?>

<?= $form->field($model, 'ReqDesc')->textArea(['maxlength' => true, 'rows'=>3, 'disabled' => true]) ?>

<?= $form->field($model, 'TiposId_fk1')
->dropDownList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 13')->all(),'TiposId','TiposDesc'), ['prompt'=> 'Seleccione el Tipo de Requerimiento'])?>

<?= $form->field($model, 'UsuId_fk')
->dropDownList(ArrayHelper::map(User::find()->orderBy("username ASC")->all(),'id','username'), ['prompt'=> 'Seleccione el Usuario'])?>

<?= $form->field($model, 'Tiposid_fk2')
->dropDownList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 14')->all(),'TiposId','TiposDesc'), ['prompt'=> 'Seleccione la Respuesta'])?>

<?= $form->field($model, 'TiposId_fk3')
->dropDownList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 15')->all(),'TiposId','TiposDesc'), ['prompt'=> 'Seleccione la Respuesta'])?>

<?= $form->field($model, 'ReqFechTomaRequ')->textInput(['maxlength' => true, 'disabled' => true]) ?>

 <?= $form->field($model, 'ReqFechSist')->hiddenInput(['maxlength' => true])->label(false); ?>

<?= $form->field($model, 'TiposId_fk4')->dropDownList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 16')->all(),'TiposId','TiposDesc'), ['prompt'=> 'Seleccione la Prioridad del Requerimiento'])?>
