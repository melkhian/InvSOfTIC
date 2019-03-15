<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Tabs;
use yii\helpers\ArrayHelper;
use backend\models\Tipos;
use backend\models\User;

/* @var $this yii\web\View */
/* @var $model backend\models\Formulario */
/* @var $form yii\widgets\ActiveForm */
?>
<br>
<h1 align="center">IV. SOPORTE FUNCIONAL INTERNO</h1>
<br><br>
<?= $form->field($model, 'TiposId_fk4')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'AppNombFunc')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'AppCarg2')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'AppCorr2')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'AppTeleOfic2')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'AppTelePers2')->textInput(['maxlength' => true]) ?>
