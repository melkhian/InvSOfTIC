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
<h1 align="center">XIII. DIRECTORIOS DE LA APLICACIÓN</h1>
<br><br>
<?= $form->field($model, 'AppDireRaiz')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'AppObse5')->textarea(['maxlength' => true, 'rows' => '3']) ?>

<?php // NOTE: Widget para el modelo 1:N ?>

<div class="row">
<div class="panel panel-default">
  <div class="panel-heading"><h4><i class="glyphicon glyphicon-folder-open"></i> Directorios de la aplicación</h4></div>
  <div class="panel-body">
    <?php DynamicFormWidget::begin([
      'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
      'widgetBody' => '.container-items2', // required: css class selector. Se agrega el número 1 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)
      'widgetItem' => '.item2', // required: css class. Se agrega el número 1 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)
      'limit' => 999, // the maximum times, an element can be cloned (default 999)
      'min' => 1, // 0 or 1 (default 1)
      'insertButton' => '.add-item2', // css class. Se agrega el número 1 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)
      'deleteButton' => '.remove-item2', // css class. Se agrega el número 1 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)
      'model' => $modelsAppdirectorios[0],
      'formId' => 'dynamic-form',
      'formFields' => [
        'ADirId',
        'ADirDirec',
        'ADirDesc',
      ],
    ]); ?>

    <div class="container-items2"><!-- widgetContainer Se agrega el número 1 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)-->
      <?php foreach ($modelsAppdirectorios as $i => $modelAppdirectorios): ?>
        <div class="item2 panel panel-default"><!-- widgetBody Se agrega el número 1 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)-->
          <div class="panel-heading">
            <h3 class="panel-title pull-left">Directorio</h3>
            <div class="pull-right">
              <button type="button" class="add-item2 btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
              <!--  Se agrega el número 1 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)-->
              <button type="button" class="remove-item2 btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
              <!--  Se agrega el número 1 para diferenciarlo de otros similares DENTRO DEL MISMO FORMULARIO (Debe de ser constante en todo el widget)-->
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="panel-body">
            <?php
            // necessary for update action.
            if (! $modelAppdirectorios->isNewRecord) {
              echo Html::activeHiddenInput($modelAppdirectorios, "[{$i}]ADirId");
            }
            ?>
            <?= $form->field($modelAppdirectorios, "[{$i}]ADirDirec")->textInput(['maxlength' => true]) ?>
            <div class="row">
              <div class="col-sm-12">
                <?= $form->field($modelAppdirectorios, "[{$i}]ADirDesc")->textarea(['maxlength' => true, 'rows' => '2']) ?>
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
