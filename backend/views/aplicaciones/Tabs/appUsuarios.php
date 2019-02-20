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
<h1 align="center">XIV. USUARIOS ADMINISTRADORES O PRIVILEGIADOS</h1>
<br><br>

<?= $form->field($model, 'AppObse6')->textInput(['maxlength' => true]) ?>

<?php // NOTE: Widget para el modelo 1:N ?>
<div class="row">
<div class="panel panel-default">
  <div class="panel-heading"><h4><i class="glyphicon glyphicon-user"></i> Usuarios administradores</h4></div>
  <div class="panel-body">
    <?php DynamicFormWidget::begin([
      'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
      'widgetBody' => '.container-items3', // required: css class selector. Se agrega el número 1 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)
      'widgetItem' => '.item3', // required: css class. Se agrega el número 1 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)
      'limit' => 999, // the maximum times, an element can be cloned (default 999)
      'min' => 1, // 0 or 1 (default 1)
      'insertButton' => '.add-item3', // css class. Se agrega el número 1 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)
      'deleteButton' => '.remove-item3', // css class. Se agrega el número 1 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)
      'model' => $modelsAppusuarios[0],
      'formId' => 'dynamic-form',
      'formFields' => [
        'AUsuUsua',
        'AUsuDesc',
      ],
    ]); ?>

    <div class="container-items3"><!-- widgetContainer Se agrega el número 1 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)-->
      <?php foreach ($modelsAppusuarios as $i => $modelAppusuarios): ?>
        <div class="item3 panel panel-default"><!-- widgetBody Se agrega el número 1 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)-->
          <div class="panel-heading">
            <h3 class="panel-title pull-left">Usuario o Privilegiado</h3>
            <div class="pull-right">
              <button type="button" class="add-item3 btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
              <!--  Se agrega el número 1 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)-->
              <button type="button" class="remove-item3 btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
              <!--  Se agrega el número 1 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)-->
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="panel-body">
            <?php
            // necessary for update action.
            if (! $modelAppusuarios->isNewRecord) {
              echo Html::activeHiddenInput($modelAppusuarios, "[{$i}]AUsuId");
            }
            ?>
            <?= $form->field($modelAppusuarios, "[{$i}]AUsuUsua")->textInput(['maxlength' => true]) ?>
            <div class="row">
              <div class="col-sm-12">
                <?= $form->field($modelAppusuarios, "[{$i}]AUsuDesc")->textarea(['maxlength' => true, 'rows' => '2']) ?>
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
