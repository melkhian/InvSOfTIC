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
<h1 align="center">XI. INFORMACIÓN DE BASE DE DATOS ASOCIADA/S A LA APLICACIÓN</h1>
<br><br>

<div class="row">
  <div class="panel panel-default">
    <div class="panel-heading"><h4><i class="	glyphicon glyphicon-equalizer"></i> BASES DE DATOS</h4></div>
    <div class="panel-body">
      <?php DynamicFormWidget::begin([
        'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
        'widgetBody' => '.container-items8', // required: css class selector
        'widgetItem' => '.item8', // required: css class
        'limit' => 999, // the maximum times, an element can be cloned (default 999)
        'min' => 1, // 0 or 1 (default 1)
        'insertButton' => '.add-item8', // css class
        'deleteButton' => '.remove-item8', // css class
        'model' => $modelsAppinformacion[0],
        'formId' => 'dynamic-form',
        'formFields' => [
          'AInfNombServBd',
          'AInfUsua',
          'AInfNombBd',
          'AInfRuta',
          'AInfEspaActu',
          'AInfProy',
          'TiposId_fk25',
          'AInfOtroCual25',
          'AInfPoliBack',
          'TiposId_fk26',
          'TiposId_fk27',
          'AInfOtroCual27',
          'TiposId_fk28',
          'AInfOtroCual28',
          'AInfCantLice',
        ],
      ]); ?>

      <div class="container-items8"><!-- widgetContainer -->
        <?php foreach ($modelsAppinformacion as $i => $modelAppinformacion): ?>
          <div class="item8 panel panel-default"><!-- widgetBody -->
            <div class="panel-heading">
              <h3 class="panel-title pull-left">Base de datos</h3>
              <div class="pull-right">
                <button type="button" class="add-item8 btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                <button type="button" class="remove-item8 btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-body">
              <?php
              // necessary for update action.
              if (! $modelAppinformacion->isNewRecord) {
                echo Html::activeHiddenInput($modelAppinformacion, "[{$i}]AInfId");
              }
              ?>
              <div class="row">
                <div class="col-sm-6">
                  <?= $form->field($modelAppinformacion, "[{$i}]AInfNombServBd")->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-sm-6">
                  <?= $form->field($modelAppinformacion, "[{$i}]AInfUsua")->textInput(['maxlength' => true]) ?>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <?= $form->field($modelAppinformacion, "[{$i}]AInfNombBd")->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-sm-6">
                  <?= $form->field($modelAppinformacion, "[{$i}]AInfRuta")->textInput(['maxlength' => true, 'rows' => '3']) ?>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <?= $form->field($modelAppinformacion, "[{$i}]AInfEspaActu")->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-sm-6">
                  <?= $form->field($modelAppinformacion, "[{$i}]AInfProy")->textInput(['maxlength' => true]) ?>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <?= $form->field($modelAppinformacion,"[{$i}]TiposId_fk25")
                  ->checkBoxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 42')->all(),'TiposValo','TiposDesc'),
                  ['onchange'=>'TiposId_fk($id=25,$tab=10,$tipo="checkbox");'
                  ])?>
                </div>
                <div class="col-sm-6">
                  <?= $form->field($modelAppinformacion, "[{$i}]AInfOtroCual25")->textInput(['maxlength' => true, 'rows' => '3']) ?>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <?= $form->field($modelAppinformacion, "[{$i}]AInfPoliBack")->textInput(['maxlength' => true]) ?>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <?= $form->field($modelAppinformacion, "[{$i}]TiposId_fk26")
                  ->checkBoxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 43')->all(),'TiposValo','TiposDesc'))?>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <?= $form->field($modelAppinformacion, "[{$i}]TiposId_fk27")
                  ->checkBoxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 44')->all(),'TiposValo','TiposDesc'),
                  ['onchange'=>'TiposId_fk($id=27,$tab=10,$tipo="checkbox");'
                  ])?>
                </div>
                <div class="col-sm-6">
                  <?= $form->field($modelAppinformacion, "[{$i}]AInfOtroCual27")->textInput(['maxlength' => true, 'rows' => '3']) ?>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <?= $form->field($modelAppinformacion, "[{$i}]TiposId_fk28")
                  ->checkBoxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 45')->all(),'TiposValo','TiposDesc'),
                  ['onchange'=>'TiposId_fk($id=28,$tab=10,$tipo="checkbox");'
                  ])?>
                </div>
                <div class="col-sm-6">
                  <?= $form->field($modelAppinformacion, "[{$i}]AInfOtroCual28")->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-sm-12">
                  <?= $form->field($modelAppinformacion, "[{$i}]AInfCantLice")->textInput(['maxlength' => true]) ?>
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
