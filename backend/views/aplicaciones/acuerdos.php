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
<h1>ACUERDOS DE NIVELES DE SERVICIO</h1>
<br><br>
    <?= $form->field($model, 'AppAcueNiveServ')->textInput(['maxlength' => true]) ?>
