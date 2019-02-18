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
<h1 align="center">XI. INFORMACIÓN DE BASE DE DATOS ASOCIADA/S A LA APLICACIÓN</h1>
<br><br>
<?= $form->field($model, 'AppNombServBd')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'AppUsua')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'AppNombBd')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'AppRuta')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'AppEspaActu')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'AppProy')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'TiposId_fk25')
->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 42')->all(),'TiposValo','TiposDesc'),
                ['onchange'=>'TiposId_fk($id=25,$tab=10,$tipo="radio");'
                  ])?>

<?= $form->field($model, 'AppOtroCual25')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'AppPoliBack')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'TiposId_fk26')
->checkBoxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 43')->all(),'TiposValo','TiposDesc'))?>

<?= $form->field($model, 'TiposId_fk27')
->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 44')->all(),'TiposValo','TiposDesc'),
                ['onchange'=>'TiposId_fk($id=27,$tab=10,$tipo="radio");'
                  ])?>

<?= $form->field($model, 'AppOtroCual27')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'TiposId_fk28')
->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 45')->all(),'TiposValo','TiposDesc'),
                ['onchange'=>'TiposId_fk($id=28,$tab=10,$tipo="radio");'
                  ])?>

<?= $form->field($model, 'AppOtroCual28')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'AppCantLice')->textInput(['maxlength' => true]) ?>
