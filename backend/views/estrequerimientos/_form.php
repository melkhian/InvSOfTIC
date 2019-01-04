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

    <?php $var2 = 'tipoid_fk = 19';
    $var1 = 'ReqId =1'; ?>

    <?= $form->field($model, 'ReqId_fk')->dropDownList(ArrayHelper::map(Requerimientos::find()->where($var1)->all(),'ReqId','ReqDesc'), ['prompt'=> 'Seleccione el Requerimiento'])?>

    <?= $form->field($model, 'TiposId_fk')->dropDownList(ArrayHelper::map(Tipos::find()->where($var2)->all(),'TiposId','TiposDesc'), ['prompt'=> 'Seleccione el Estado'])?>

    <?= $form->field($model, 'EReqEsta')->textarea(['maxlength' => true]) ?>

    <?= $form->field($model, 'EReqFech')->widget( DatePicker::className(),
            ['name' => 'check_issue_date',
            'value' => date('d-M-Y', strtotime('+2 days')),
            'options' => ['placeholder' => 'Seleccione la fecha de Caducidad'],
            'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true]]);
     ?>

    <?= $form->field($model, 'EReqFechSist')->widget( DatePicker::className(),
             ['name' => 'check_issue_date',
             'value' => date('d-M-Y', strtotime('+2 days')),
             'options' => ['placeholder' => 'Seleccione la fecha de Caducidad'],
             'pluginOptions' => [
             'format' => 'yyyy-mm-dd',
             'todayHighlight' => true]]);
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
