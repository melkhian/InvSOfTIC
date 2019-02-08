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
<h1>XV. DOCUMENTACIÓN</h1>
<br><br>
    <?= $form->field($model, 'TiposId_fk29')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 50')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'TiposId_fk30')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 50')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'TiposId_fk31')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 48')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'TiposId_fk32')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 50')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'TiposId_fk33')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 50')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'TiposId_fk34')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 48')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'TiposId_fk35')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 50')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'TiposId_fk36')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 50')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'TiposId_fk37')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 48')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'TiposId_fk38')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 50')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'TiposId_fk39')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 50')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'TiposId_fk40')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 48')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'TiposId_fk41')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 50')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'TiposId_fk42')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 50')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'TiposId_fk43')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 48')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'TiposId_fk44')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 50')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'TiposId_fk45')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 50')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'TiposId_fk46')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 48')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'TiposId_fk47')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 50')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'TiposId_fk48')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 50')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'TiposId_fk49')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 48')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'TiposId_fk50')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 50')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'TiposId_fk51')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 50')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'TiposId_fk52')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 48')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'TiposId_fk53')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 50')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'TiposId_fk54')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 50')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'AppUbic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk55')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 49')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'AppUbicDocu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppUbicUlti')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppObse7')->textInput(['maxlength' => true]) ?>
