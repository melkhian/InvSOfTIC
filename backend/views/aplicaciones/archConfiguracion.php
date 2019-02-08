<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Tabs;
use yii\helpers\ArrayHelper;
use backend\models\Tipos;

/* @var $this yii\web\View */
/* @var $model backend\models\Formulario */
/* @var $form yii\widgets\ActiveForm */
?>
<br>
<h1>X. ARCHIVOS DE CONFIGURACIÓN O PARAMETRIZACIÓN</h1>
<br><br>
    <?= $form->field($model, 'AppDirec1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppNombArch')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppVari')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppNombVari')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppDescPara')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppObse4')->textInput(['maxlength' => true]) ?>
