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
<h1 align="center">VIII. PARÁMETROS DE CONFIGURACIÓN</h1>
<br><br>

<div class="row">
  <div class="panel panel-default">
    <div class="panel-heading"><h5><i class="glyphicon glyphicon-tasks"></i> Parámetros de configuración</h5></div>
    <div class="panel-body">
      <?php DynamicFormWidget::begin([
        'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
        'widgetBody' => '.container-items5', // required: css class selector. Se agrega el número 1 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)
        'widgetItem' => '.item5', // required: css class. Se agrega el número 5 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)
        'limit' => 5, // the maximum times, an element can be cloned (default 999)
        'min' => 1, // 0 or 1 (default 1)
        'insertButton' => '.add-item5', // css class. Se agrega el número 5 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)
        'deleteButton' => '.remove-item5', // css class. Se agrega el número 5 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)
        'model' => $modelsAppparametros[0],
        'formId' => 'dynamic-form',
        'formFields' => [
          'AParUrlFuen',
          'AParServ',
          'AParPuer',
          'AParDirec',
        ],
      ]); ?>

      <div class="container-items5"><!-- widgetContainer Se agrega el número 5 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)-->
        <?php foreach ($modelsAppparametros as $i => $modelAppparametros): ?>
          <div class="item5 panel panel-default"><!-- widgetBody Se agrega el número 5 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)-->
            <div class="panel-heading">
              <h3 class="panel-title pull-left">Parámetro</h3>
              <div class="pull-right">
                <button type="button" class="add-item5 btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                <!--  Se agrega el número 1 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)-->
                <button type="button" class="remove-item5 btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                <!--  Se agrega el número 1 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)-->
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-body">
              <?php
              // necessary for update action.
              if (! $modelAppparametros->isNewRecord) {
                echo Html::activeHiddenInput($modelAppparametros, "[{$i}]AParId");
              }
              ?>
              <div class="row">
                <div class="col-sm-6">
                  <?= $form->field($modelAppparametros, "[{$i}]AParUrlFuen")->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-sm-6">
                  <?= $form->field($modelAppparametros, "[{$i}]AParServ")->textInput(['maxlength' => true]) ?>
                </div>
              </div><!-- .row -->
              <div class="row">
                <div class="col-sm-6">
                  <?= $form->field($modelAppparametros, "[{$i}]AParPuer")->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-sm-6">
                  <?= $form->field($modelAppparametros, "[{$i}]AParDirec")->textInput(['maxlength' => true]) ?>
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
