<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Proyectos;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Cambioalcance */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cambioalcance-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ProId_fk')
    ->dropDownList(ArrayHelper::map(Proyectos::find()->all(),'ProId','ProNomb'), ['prompt'=> 'Seleccione el Proyecto'])?>

    <?= $form->field($model, 'CAlcDesc')->textarea(['maxlength' => true]) ?>

    <?= $form->field($model, 'CAlcFechApro')->widget( DatePicker::className(),
            ['name' => 'check_issue_date',
            'value' => date('d-M-Y', strtotime('+2 days')),
            'options' => ['placeholder' => 'Seleccione la fecha de Aprobación'],
            'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true]]);
     ?>

    <?= $form->field($model, 'CAlcFechInic')->widget( DatePicker::className(),
             ['name' => 'check_issue_date',
             'value' => date('d-M-Y', strtotime('+2 days')),
             'options' => ['placeholder' => 'Seleccione la fecha de Inicio'],
             'pluginOptions' => [
             'format' => 'yyyy-mm-dd',
             'todayHighlight' => true]]);
    ?>

    <?= $form->field($model, 'CAlcFechFina')->widget( DatePicker::className(),
            ['name' => 'check_issue_date',
            'value' => date('d-M-Y', strtotime('+2 days')),
            'options' => ['placeholder' => 'Seleccione la fecha Final'],
            'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true]]);
     ?>

      <?= $form->field($model, 'CAlcFechSist')->hiddenInput(['maxlength' => true])->label(false); ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
