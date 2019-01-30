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
    <?= $form->field($model, 'AppUrlFuen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppServ')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppPuer2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppDirec2')->textInput(['maxlength' => true]) ?>
