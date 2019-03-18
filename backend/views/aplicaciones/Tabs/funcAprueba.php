<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Tabs;
use yii\helpers\ArrayHelper;
use backend\models\Tipos;
use kartik\date\DatePicker;
use wbraganca\dynamicform\DynamicFormWidget;

/* @var $this yii\web\View */
/* @var $model backend\models\Formulario */
/* @var $form yii\widgets\ActiveForm */
?>
<br>
<h1 align="center">XVI. ACEPTACIÓN</h1>
<br><br>
    <?= $form->field($model, 'AppActa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppFechApro')->widget( DatePicker::className(),
    ['name' => 'check_issue_date',
    'value' => date('d-M-Y', strtotime('+2 days')),
    'options' => ['placeholder' => 'Seleccione la fecha de Aceptación'],
    'pluginOptions' => [
      'format' => 'yyyy-mm-dd',
      'todayHighlight' => true]]);
    ?>

    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading"><h4><i class="	glyphicon glyphicon-equalizer"></i> FUNCIONARIOS QUE APRUEBAN</h4></div>
        <div class="panel-body">
          <?php DynamicFormWidget::begin([
            'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
            'widgetBody' => '.container-items6', // required: css class selector
            'widgetItem' => '.item6', // required: css class
            'limit' => 999, // the maximum times, an element can be cloned (default 999)
            'min' => 1, // 0 or 1 (default 1)
            'insertButton' => '.add-item6', // css class
            'deleteButton' => '.remove-item6', // css class
            'model' => $modelsAppaceptacion[0],
            'formId' => 'dynamic-form',
            'formFields' => [
              'AModNomb',
              'AModDesc',
              'TiposId_fk',
              'AModObse',
            ],
          ]); ?>

          <div class="container-items6"><!-- widgetContainer -->
            <?php foreach ($modelsAppaceptacion as $i => $modelAppaceptacion): ?>
              <div class="item6 panel panel-default"><!-- widgetBody -->
                <div class="panel-heading">
                  <h3 class="panel-title pull-left">Funcionario</h3>
                  <div class="pull-right">
                    <button type="button" class="add-item6 btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                    <button type="button" class="remove-item6 btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                  <?php
                  // necessary for update action.
                  if (! $modelAppaceptacion->isNewRecord) {
                    echo Html::activeHiddenInput($modelAppaceptacion, "[{$i}]AAceId");
                  }
                  ?>
                  <div class="row">
                    <div class="col-sm-4">
                      <?= $form->field($modelAppaceptacion, "[{$i}]AAceNomb")->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="col-sm-4">
                      <?= $form->field($modelAppaceptacion, "[{$i}]AAceCarg")->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="col-sm-4">
                      <?= $form->field($modelAppaceptacion, "[{$i}]AAceArea")->textInput(['maxlength' => true]) ?>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
          <?php DynamicFormWidget::end(); ?>
        </div>
      </div>
    </div>
