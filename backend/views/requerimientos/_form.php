<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Proyectos;
use backend\models\User;
use backend\models\Tipos;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Requerimientos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="requerimientos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ProId_fk')->dropDownList(ArrayHelper::map(Proyectos::find()->all(),'ProId','ProNomb'), ['prompt'=> 'Seleccione el Proyecto'])?>

    <?= $form->field($model, 'ReqDesc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk1')->dropDownList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 13')->all(),'TiposId','TiposDesc'), ['prompt'=> 'Seleccione el Tipo de Requerimiento'])?>

    <?= $form->field($model, 'UsuId_fk')->dropDownList(ArrayHelper::map(User::find()->all(),'id','email'), ['prompt'=> 'Seleccione el Usuario'])?>

    <?= $form->field($model, 'Tiposid_fk2')->dropDownList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 14')->all(),'TiposId','TiposDesc'), ['prompt'=> 'Seleccione la Respuesta'])?>

    <?= $form->field($model, 'TiposId_fk3')->dropDownList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 15')->all(),'TiposId','TiposDesc'), ['prompt'=> 'Seleccione la Respuesta'])?>

    <?= $form->field($model, 'ReqFechTomaRequ')->widget( DatePicker::className(),
            ['name' => 'check_issue_date',
            'value' => date('d-M-Y', strtotime('+2 days')),
            'options' => ['placeholder' => 'Seleccione la fecha de Toma de Requerimiento'],
            'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true]]);
     ?>

    <?= $form->field($model, 'ReqFechSist')->textInput() ?>

    <?= $form->field($model, 'TiposId_fk4')->dropDownList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 16')->all(),'TiposId','TiposDesc'), ['prompt'=> 'Seleccione la Prioridad del Requerimiento'])?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
