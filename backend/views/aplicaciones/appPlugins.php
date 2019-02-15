<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Tabs;
use yii\helpers\ArrayHelper;
use wbraganca\dynamicform\DynamicFormWidget;

/* @var $this yii\web\View */
/* @var $model backend\models\Formulario */
/* @var $form yii\widgets\ActiveForm */
?>
<br>
<h1>APLICACIONES/PLUGINS EXTERNOS REQUERIDOS PARA EL FUNCIONAMIENTO</h1>
<br><br>
<?php // NOTE: Widget para el modelo 1:N ?>
<div class="row">
  <div class="panel panel-default">
    <div class="panel-heading"><h4><i class="glyphicon glyphicon-envelope"></i> Plugins</h4></div>
    <div class="panel-body">
      <?php DynamicFormWidget::begin([
        'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
        'widgetBody' => '.container-items1', // required: css class selector. Se agrega el número 1 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)
        'widgetItem' => '.item1', // required: css class. Se agrega el número 1 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)
        'limit' => 4, // the maximum times, an element can be cloned (default 999)
        'min' => 1, // 0 or 1 (default 1)
        'insertButton' => '.add-item1', // css class. Se agrega el número 1 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)
        'deleteButton' => '.remove-item1', // css class. Se agrega el número 1 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)
        'model' => $modelsAppplugins[0],
        'formId' => 'dynamic-form',
        'formFields' => [
          'APluNomb',
          'APluLice',
          'ApluDesc',
        ],
      ]); ?>

      <div class="container-items1"><!-- widgetContainer Se agrega el número 1 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)-->
        <?php foreach ($modelsAppplugins as $i => $modelAppplugins): ?>
          <div class="item1 panel panel-default"><!-- widgetBody Se agrega el número 1 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)-->
            <div class="panel-heading">
              <h3 class="panel-title pull-left">Plugin</h3>
              <div class="pull-right">
                <button type="button" class="add-item1 btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                <!--  Se agrega el número 1 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)-->
                <button type="button" class="remove-item1 btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                <!--  Se agrega el número 1 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)-->
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-body">
              <?php
              // necessary for update action.
              if (! $modelAppplugins->isNewRecord) {
                echo Html::activeHiddenInput($modelAppplugins, "[{$i}]ApluId");
              }
              ?>
              <?= $form->field($modelAppplugins, "[{$i}]APluNomb")->textInput(['maxlength' => true]) ?>
              <div class="row">
                <div class="col-sm-6">
                  <?= $form->field($modelAppplugins, "[{$i}]APluLice")->textInput(['maxlength' => true]) ?>
                </div>
              </div><!-- .row -->
              <div class="row">
                <div class="col-sm-4">
                  <?= $form->field($modelAppplugins, "[{$i}]ApluDesc")->textInput(['maxlength' => true]) ?>
                </div>
              </div><!-- .row -->
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <?php DynamicFormWidget::end(); ?>
    </div>
  </div>
</div>
