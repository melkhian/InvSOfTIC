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
<br><br>
    <?= $form->field($model, 'TiposId_fk4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UsuId_fk')->textInput() ?>
