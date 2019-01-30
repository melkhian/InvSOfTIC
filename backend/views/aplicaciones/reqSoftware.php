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
    <?= $form->field($model, 'TiposId_fk23')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 38')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'AppVersDist')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk24')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 41')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'AppLengServ')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppVersApli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppBibl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppObse1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppMane')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppVersBD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppPuer1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppObse2')->textInput(['maxlength' => true]) ?>
