<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Requerimientos;
use backend\models\Proyectos;
use backend\models\Tipos;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Estrequerimientos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="estrequerimientos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ReqId_fk')->dropDownList(ArrayHelper::map(Requerimientos::find()->all(),'ReqId','ReqDesc'), ['prompt'=> 'Seleccione el Requerimiento'])?>

    <?= $form->field($model, 'TiposId_fk')->dropDownList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 19')->all(),'TiposId','TiposDesc'), ['prompt'=> 'Seleccione el Estado'])?>

    <?= $form->field($model, 'EReqEsta')->textarea(['maxlength' => true]) ?>

    <?= $form->field($model, 'EReqFech')->widget( DatePicker::className(),
            ['name' => 'check_issue_date',
            'value' => date('d-M-Y', strtotime('+2 days')),
            'options' => ['placeholder' => 'Seleccione la fecha de Caducidad'],
            'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true]]);
     ?>

     <?= $form->field($model, 'EReqFechSist')->hiddenInput(['maxlength' => true])->label(false); ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
