<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Tabs;
use yii\helpers\ArrayHelper;
use backend\models\Tipos;
use backend\models\Empsoporte;

/* @var $this yii\web\View */
/* @var $model backend\models\Formulario */
/* @var $form yii\widgets\ActiveForm */
?>
<br>
<h1 align="center">III. SOPORTE DEL DESARROLLADOR</h1>
<br><br>
<?= $form->field($model, 'ESopId2')->dropDownList(ArrayHelper::map(Empsoporte::find()->all(),'ESopId','ESopNomb'), ['prompt'=> 'Seleccione la Empresa de Soporte'])?>

<?= $form->field($model, 'AppNombCont')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'AppCarg')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'AppCorr')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'AppTeleOfic')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'AppTelePers')->textInput(['maxlength' => true]) ?>
