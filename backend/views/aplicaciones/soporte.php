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
<br><br>
<?= $form->field($model, 'ESopId2')->dropDownList(ArrayHelper::map(Empsoporte::find()->all(),'ESopId','ESopNomb'), ['prompt'=> 'Seleccione la Empresa de Soporte'])?>
