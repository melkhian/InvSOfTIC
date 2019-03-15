<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Tabs;
use yii\helpers\ArrayHelper;
use backend\models\Tipos;
use backend\models\Empsoporte;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Formulario */
/* @var $form yii\widgets\ActiveForm */
?>
<br>
<h1 align="center">I. DATOS GENERALES</h1>
<br><br>
<?= $form->field($model, 'AppNomb')->textInput(['maxlength' => true, 'disabled' => true, 'disabled' => true, 'autofocus' => true]) ?>

<?= $form->field($model, 'AppDesc')->textArea(['maxlength' => true, 'disabled' => true, 'rows'=>4]) ?>

<?= $form->field($model, 'AppSigl')->textInput(['maxlength' => true, 'disabled' => true]) ?>

<?= $form->field($model, 'AppVers')->textInput(['maxlength' => true, 'disabled' => true]) ?>

<?= $form->field($model, 'ESopId1')->dropDownList(ArrayHelper::map(Empsoporte::find()->all(),'ESopId','ESopNomb'), ['prompt'=> 'Seleccione la Empresa de Soporte'])?>

<?= $form->field($model, 'AppUrl')->textInput(['maxlength' => true, 'disabled' => true]) ?>

<?= $form->field($model, 'TiposId_fk1')->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 20')->all(),'TiposValo','TiposDesc'))?>

<?= $form->field($model, 'TiposId_fk2')->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 21')->all(),'TiposValo','TiposDesc'))?>

<?= $form->field($model, 'AppNumeDocuAdqu')->textInput(['maxlength' => true, 'disabled' => true]) ?>

<?= $form->field($model, 'AppValoAdqu')->textInput(['maxlength' => true, 'disabled' => true, 'placeholder' => "Pesos o Dólares"]) ?>

<?= $form->field($model, 'AppFechAdqu')->widget( DatePicker::className(),
        ['name' => 'check_issue_date',
        'value' => date('d-M-Y', strtotime('+2 days')),
        'options' => ['placeholder' => 'Seleccione la fecha de Adquisición'],
        'pluginOptions' => [
        'format' => 'yyyy-mm-dd',
        'todayHighlight' => true]]);
 ?>

<?= $form->field($model, 'TiposId_fk3')->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 22')->all(),'TiposValo','TiposDesc'))?>

<?= $form->field($model, 'AppNombProc')->textInput(['maxlength' => true, 'disabled' => true]) ?>
