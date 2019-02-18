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
<h1 align="center">VIII. REQUERIMIENTOS DE SOFTWARE PARA EL SERVIDOR</h1>
<br><br>

<h3 align="center">DE SISTEMA OPERATIVO</h3>
<br>
<div class="row">
  <div class="col-sm-3">
    <?= $form->field($model, 'TiposId_fk23')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 40')->all(),'TiposValo','TiposDesc'))?>
  </div>
  <div class="col-sm-6">
    <?= $form->field($model, 'AppVersDist')->textInput(['maxlength' => true]) ?>
  </div>
  <div class="col-sm-3">
    <?= $form->field($model, 'TiposId_fk24')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 41')->all(),'TiposValo','TiposDesc'))?>
  </div>
</div>
<br><br>

<h3 align="center">DE APLICACIÓN</h3>
<br>
<div class="row">
  <div class="col-sm-3">
    <?= $form->field($model, 'AppLengServ')->textInput(['maxlength' => true]) ?>
  </div>
  <div class="col-sm-6">
    <?= $form->field($model, 'AppVersApli')->textInput(['maxlength' => true]) ?>
  </div>
  <div class="col-sm-3">
    <?= $form->field($model, 'AppBibl')->textInput(['maxlength' => true]) ?>
  </div>
</div>
<?= $form->field($model, 'AppObse1')->textarea(['maxlength' => true, 'rows' => '3']) ?>
<br><br>

<h3 align="center">DE BASE DE DATOS</h3>
<br>
<div class="row">
  <div class="col-sm-3">
    <?= $form->field($model, 'AppMane')->textInput(['maxlength' => true]) ?>
  </div>
  <div class="col-sm-6">
    <?= $form->field($model, 'AppVersBD')->textInput(['maxlength' => true]) ?>
  </div>
  <div class="col-sm-3">
    <?= $form->field($model, 'AppPuer1')->textInput(['maxlength' => true]) ?>
  </div>
</div>
<br>
<?= $form->field($model, 'AppObse2')->textarea(['maxlength' => true, 'rows' => '3']) ?>
