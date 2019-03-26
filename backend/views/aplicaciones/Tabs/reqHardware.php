<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Tabs;
use yii\helpers\ArrayHelper;
use backend\models\Tipos;
use wbraganca\dynamicform\DynamicFormWidget;
/* @var $this yii\web\View */
/* @var $model backend\models\Formulario */
/* @var $form yii\widgets\ActiveForm */
?>
<br>
<h1 align="center">IX. REQUERIMIENTOS DE HARDWARE PARA EL SERVIDOR</h1>
<br><br>

<?= $form->field($model, 'AppObse3')->textArea(['maxlength' => true, 'rows' =>3]) ?>

<div class="row">
  <div class="panel panel-default">
    <div class="panel-heading"><h4><i class="	glyphicon glyphicon-equalizer"></i> REQUERIMIENTOS DE HARDWARE</h4></div>
    <div class="panel-body">
      <?php DynamicFormWidget::begin([
        'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
        'widgetBody' => '.container-items11', // required: css class selector
        'widgetItem' => '.item11', // required: css class
        'limit' => 999, // the maximum times, an element can be cloned (default 999)
        'min' => 1, // 0 or 1 (default 1)
        'insertButton' => '.add-item11', // css class
        'deleteButton' => '.remove-item11', // css class
        'model' => $modelsApphardware[0],
        'formId' => 'dynamic-form',
        'formFields' => [
          'AHarTipoHard',
          'AHarProc',
          'AHarMemo',
          'AHarEspaDisc',
          'AHarObse',
        ],
      ]); ?>

      <div class="container-items11"><!-- widgetContainer -->
        <?php foreach ($modelsApphardware as $i => $modelApphardware): ?>
          <div class="item11 panel panel-default"><!-- widgetBody -->
            <div class="panel-heading">
              <h3 class="panel-title pull-left">Requerimiento</h3>
              <div class="pull-right">
                <button type="button" class="add-item11 btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                <button type="button" class="remove-item11 btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-body">
              <?php
              // necessary for update action.
              if (! $modelApphardware->isNewRecord) {
                echo Html::activeHiddenInput($modelApphardware, "[{$i}]AHarId");
              }
              ?>
              <div class="row">
                <div class="col-sm-6">
                  <?= $form->field($modelApphardware, "[{$i}]AHarTipoHard")->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-sm-6">
                  <?= $form->field($modelApphardware, "[{$i}]AHarProc")->textInput(['maxlength' => true]) ?>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <?= $form->field($modelApphardware, "[{$i}]AHarMemo")->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-sm-6">
                  <?= $form->field($modelApphardware, "[{$i}]AHarEspaDisc")->textInput(['maxlength' => true]) ?>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <?= $form->field($modelApphardware, "[{$i}]AHarObse")->textArea(['maxlength' => true, 'rows'=>3]) ?>
                </div>
              </div>
            </div><!-- .row -->
          </div>
        <?php endforeach; ?>
      </div>
      <?php DynamicFormWidget::end(); ?>
    </div>
  </div>
</div>
