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
<h1 align="center">X. ARCHIVOS DE CONFIGURACIÓN O PARAMETRIZACIÓN</h1>
<br><br>
<?php // NOTE: Widget para el modelo 1:N ?>

<?= $form->field($model, 'AppObse4')->textarea(['maxlength' => true, 'rows' => '3']) ?>
<div class="row">
  <div class="panel panel-default">
    <div class="panel-heading"><h4><i class="glyphicon glyphicon-folder-close"></i> Archivos de configuración</h4></div>
    <div class="panel-body">
      <?php DynamicFormWidget::begin([
        'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
        'widgetBody' => '.container-items4', // required: css class selector. Se agrega el número 1 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)
        'widgetItem' => '.item4', // required: css class. Se agrega el número 4 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)
        'limit' => 4, // the maximum times, an element can be cloned (default 999)
        'min' => 1, // 0 or 1 (default 1)
        'insertButton' => '.add-item4', // css class. Se agrega el número 4 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)
        'deleteButton' => '.remove-item4', // css class. Se agrega el número 4 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)
        'model' => $modelsApparchivos[0],
        'formId' => 'dynamic-form',
        'formFields' => [
          'AArcDirec',
          'AArcNombArch',
          'AArcVari',
          'AArcNombVari',
          'AArcDescPara',
        ],
      ]); ?>

      <div class="container-items4"><!-- widgetContainer Se agrega el número 4 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)-->
        <?php foreach ($modelsApparchivos as $i => $modelApparchivos): ?>
          <div class="item4 panel panel-default"><!-- widgetBody Se agrega el número 4 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)-->
            <div class="panel-heading">
              <h3 class="panel-title pull-left">Archivo</h3>
              <div class="pull-right">
                <button type="button" class="add-item4 btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                <!--  Se agrega el número 1 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)-->
                <button type="button" class="remove-item4 btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                <!--  Se agrega el número 1 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)-->
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-body">
              <?php
              // necessary for update action.
              if (! $modelApparchivos->isNewRecord) {
                echo Html::activeHiddenInput($modelApparchivos, "[{$i}]AArcId");
              }
              ?>
              <div class="row">
                <div class="col-sm-6">
                  <?= $form->field($modelApparchivos, "[{$i}]AArcDirec")->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-sm-6">
                  <?= $form->field($modelApparchivos, "[{$i}]AArcNombArch")->textInput(['maxlength' => true]) ?>
                </div>
              </div><!-- .row -->
              <div class="row">
                <div class="col-sm-6">
                  <?= $form->field($modelApparchivos, "[{$i}]AArcVari")->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-sm-6">
                  <?= $form->field($modelApparchivos, "[{$i}]AArcNombVari")->textInput(['maxlength' => true]) ?>
                </div>
              </div><!-- .row -->
              <div class="row">
                <div class="col-sm-12">
                  <?= $form->field($modelApparchivos, "[{$i}]AArcDescPara")->textarea(['maxlength' => true, 'rows' => '2']) ?>
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
