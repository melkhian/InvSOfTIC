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
<h1 align="center">VIII. REQUERIMIENTOS DE SOFTWARE PARA EL SERVIDOR</h1>
<br><br>

<h3 align="center">DE SISTEMA OPERATIVO</h3>
<br>
<div class="row">
  <div class="col-sm-3">
    <?= $form->field($model, 'TiposId_fk23')
    ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 40')->all(),'TiposValo','TiposDesc'))?>
  </div>
  <div class="col-sm-6">
    <?= $form->field($model, 'AppVersDist')->textInput(['maxlength' => true]) ?>
  </div>
  <div class="col-sm-3">
    <?= $form->field($model, 'TiposId_fk24')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 41')->all(),'TiposValo','TiposDesc'))?>
  </div>
</div>
<br><br>
<br>
  <?php // NOTE: Explicación de este DynamicFormWidget en views/aplicaciones/Tabs/datosApp.php, en el último widget
        //      DynamicFormWidget correspondiente a Aplicaciones Relacionadas
        ?>

  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading"><h4><i class="	glyphicon glyphicon-equalizer"></i> DE APLICACIÓN</h4></div>
      <div class="panel-body">
        <?php DynamicFormWidget::begin([
          'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
          'widgetBody' => '.container-items9', // required: css class selector
          'widgetItem' => '.item9', // required: css class
          'limit' => 999, // the maximum times, an element can be cloned (default 999)
          'min' => 1, // 0 or 1 (default 1)
          'insertButton' => '.add-item9', // css class
          'deleteButton' => '.remove-item9', // css class
          'model' => $modelsAppaplicaciones[0],
          'formId' => 'dynamic-form',
          'formFields' => [
            'AAplLengServ',
            'AAplVersApli',
            'AAplBibl',
            'AAplObse1',
          ],
        ]); ?>

        <div class="container-items9"><!-- widgetContainer -->
          <?php foreach ($modelsAppaplicaciones as $i => $modelAppaplicaciones): ?>
            <div class="item9 panel panel-default"><!-- widgetBody -->
              <div class="panel-heading">
                <h3 class="panel-title pull-left">Aplicación</h3>
                <div class="pull-right">
                  <button type="button" class="add-item9 btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                  <button type="button" class="remove-item9 btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="panel-body">
                <?php
                // necessary for update action.
                if (! $modelAppaplicaciones->isNewRecord) {
                  echo Html::activeHiddenInput($modelAppaplicaciones, "[{$i}]AAplId");
                }
                ?>
                <div class="row">
                  <div class="col-sm-6">
                    <?= $form->field($modelAppaplicaciones, "[{$i}]AAplLengServ")->textInput(['maxlength' => true]) ?>
                  </div>
                  <div class="col-sm-6">
                    <?= $form->field($modelAppaplicaciones, "[{$i}]AAplVersApli")->textInput(['maxlength' => true]) ?>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <?= $form->field($modelAppaplicaciones, "[{$i}]AAplBibl")->textArea(['maxlength' => true, 'rows'=>3]) ?>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <?= $form->field($modelAppaplicaciones, "[{$i}]AAplObse1")->textArea(['maxlength' => true, 'rows'=>3]) ?>
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
<br><br>

  <?php // NOTE: Explicación de este DynamicFormWidget en views/aplicaciones/Tabs/datosApp.php, en el último widget
        //      DynamicFormWidget correspondiente a Aplicaciones Relacionadas
        ?>

  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading"><h4><i class="	glyphicon glyphicon-equalizer"></i> DE BASE DE DATOS</h4></div>
      <div class="panel-body">
        <?php DynamicFormWidget::begin([
          'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
          'widgetBody' => '.container-items10', // required: css class selector
          'widgetItem' => '.item10', // required: css class
          'limit' => 999, // the maximum times, an element can be cloned (default 999)
          'min' => 1, // 0 or 1 (default 1)
          'insertButton' => '.add-item10', // css class
          'deleteButton' => '.remove-item10', // css class
          'model' => $modelsAppbasedatos[0],
          'formId' => 'dynamic-form',
          'formFields' => [
            'ABasMane',
            'ABasVersBD',
            'ABasPuer1',
            'ABasObse2',
          ],
        ]); ?>

        <div class="container-items10"><!-- widgetContainer -->
          <?php foreach ($modelsAppbasedatos as $i => $modelAppbasedatos): ?>
            <div class="item10 panel panel-default"><!-- widgetBody -->
              <div class="panel-heading">
                <h3 class="panel-title pull-left">Base de datos</h3>
                <div class="pull-right">
                  <button type="button" class="add-item10 btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                  <button type="button" class="remove-item10 btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="panel-body">
                <?php
                // necessary for update action.
                if (! $modelAppbasedatos->isNewRecord) {
                  echo Html::activeHiddenInput($modelAppbasedatos, "[{$i}]ABasId");
                }
                ?>
                <div class="row">
                  <div class="col-sm-4">
                    <?= $form->field($modelAppbasedatos, "[{$i}]ABasMane")->textInput(['maxlength' => true]) ?>
                  </div>
                  <div class="col-sm-4">
                    <?= $form->field($modelAppbasedatos, "[{$i}]ABasVersBD")->textInput(['maxlength' => true]) ?>
                  </div>
                  <div class="col-sm-4">
                    <?= $form->field($modelAppbasedatos, "[{$i}]ABasPuer1")->textInput(['maxlength' => true]) ?>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <?= $form->field($modelAppbasedatos, "[{$i}]ABasObse2")->textArea(['maxlength' => true, 'rows'=>3]) ?>
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
