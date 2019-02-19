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
<h1 align="center">VII. DATOS BÁSICOS APLICACIÓN</h1>
<br><br>
<?= $form->field($model, 'TiposId_fk5')
->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 23')->all(),'TiposValo','TiposDesc'))?>

<?= $form->field($model, 'AppFechPues')->widget( DatePicker::className(),
['name' => 'check_issue_date',
'value' => date('d-M-Y', strtotime('+2 days')),
'options' => ['placeholder' => 'Seleccione la fecha de Adquisición'],
'pluginOptions' => [
  'format' => 'yyyy-mm-dd',
  'todayHighlight' => true]]);
  ?>

  <?= $form->field($model, 'AppServPues')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'TiposId_fk6')
  ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 24')->all(),'TiposValo','TiposDesc'))?>

  <?= $form->field($model, 'TiposId_fk7')
  ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 25')->all(),'TiposValo','TiposDesc'))?>

  <?= $form->field($model, 'TiposId_fk8')
  ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 26')->all(),'TiposValo','TiposDesc'),
  ['onchange'=>'TiposId_fk($id=8,$tab=5,$tipo="checkbox");'
  ])?>

  <?= $form->field($model, 'AppOtroCual8')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'AppServWebVers')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'TiposId_fk9')
  ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 27')->all(),'TiposValo','TiposDesc'),
  ['onchange'=>'TiposId_fk($id=9,$tab=5,$tipo="checkbox");'
  ])?>

  <?= $form->field($model, 'AppOtroCual9')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'TiposId_fk10')
  ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 28')->all(),'TiposValo','TiposDesc'),
  ['onchange'=>'TiposId_fk($id=10,$tab=5,$tipo="checkbox");'
  ])?>

  <?= $form->field($model, 'AppOtroCual10')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'TiposId_fk11')
  ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 29')->all(),'TiposValo','TiposDesc'),
  ['onchange'=>'TiposId_fk($id=11,$tab=5,$tipo="radio");'
  ])?>

  <?= $form->field($model, 'TiposId_fk12')
  ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 30')->all(),'TiposValo','TiposDesc'),
  ['onchange'=>'TiposId_fk($id=12,$tab=5,$tipo="checkbox");'
  ])?>

  <?= $form->field($model, 'AppOtroCual12')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'TiposId_fk13')
  ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'),
  ['onchange'=>'TiposId_fk($id=13,$tab=5,$tipo="radio");'
  ])?>

  <?= $form->field($model, 'TiposId_fk14')
  ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 32')->all(),'TiposValo','TiposDesc'),
  ['onchange'=>'TiposId_fk($id=14,$tab=5,$tipo="checkbox");'
  ])?>

  <?= $form->field($model, 'AppOtroCual14')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'TiposId_fk15')
  ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'),
  ['onchange'=>'TiposId_fk($id=15,$tab=5,$tipo="radio");'
  ])?>

  <?= $form->field($model, 'TiposId_fk16')
  ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 34')->all(),'TiposValo','TiposDesc'),
  ['onchange'=>'TiposId_fk($id=16,$tab=5,$tipo="checkbox");'
  ])?>

  <?= $form->field($model, 'AppOtroCual16')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'TiposId_fk17')
  ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'),
  ['onchange'=>'TiposId_fk($id=17,$tab=5,$tipo="radio");'
  ])?>

  <?= $form->field($model, 'TiposId_fk18')
  ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 36')->all(),'TiposValo','TiposDesc'),
  ['onchange'=>'TiposId_fk($id=18,$tab=5,$tipo="checkbox");'
  ])?>

  <?= $form->field($model, 'AppOtroCual18')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'TiposId_fk19')
  ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'),
  ['onchange'=>'TiposId_fk($id=19,$tab=5,$tipo="radio");'
  ])?>

  <?= $form->field($model, 'AppOtroCual19')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'TiposId_fk20')
  ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'),
  ['onchange'=>'TiposId_fk($id=20,$tab=5,$tipo="radio");'
  ])?>

  <?= $form->field($model, 'AppOtroCual20')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'AppTipoLice')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'AppNumeLice')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'TiposId_fk21')
  ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 38')->all(),'TiposValo','TiposDesc'))?>

  <?= $form->field($model, 'TiposId_fk22')
  ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'))?>

  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading"><h4><i class="	glyphicon glyphicon-equalizer"></i> MÓDULOS QUE LA COMPONEN</h4></div>
      <div class="panel-body">
        <?php DynamicFormWidget::begin([
          'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
          'widgetBody' => '.container-items', // required: css class selector
          'widgetItem' => '.item', // required: css class
          'limit' => 4, // the maximum times, an element can be cloned (default 999)
          'min' => 1, // 0 or 1 (default 1)
          'insertButton' => '.add-item', // css class
          'deleteButton' => '.remove-item', // css class
          'model' => $modelsAppmodulos[0],
          'formId' => 'dynamic-form',
          'formFields' => [
            'AModNomb',
            'AModDesc',
            'TiposId_fk',
            'AModObse',
          ],
        ]); ?>

        <div class="container-items"><!-- widgetContainer -->
          <?php foreach ($modelsAppmodulos as $i => $modelAppmodulos): ?>
            <div class="item panel panel-default"><!-- widgetBody -->
              <div class="panel-heading">
                <h3 class="panel-title pull-left">Módulo</h3>
                <div class="pull-right">
                  <button type="button" class="add-item btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                  <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="panel-body">
                <?php
                // necessary for update action.
                if (! $modelAppmodulos->isNewRecord) {
                  echo Html::activeHiddenInput($modelAppmodulos, "[{$i}]AModId");
                }
                ?>
                <div class="row">
                  <div class="col-sm-8">
                    <?= $form->field($modelAppmodulos, "[{$i}]AModNomb")->textInput(['maxlength' => true]) ?>
                  </div>
                  <div class="col-sm-4">
                    <?= $form->field($modelAppmodulos, "[{$i}]TiposId_fk")
                    ->dropDownList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposId','TiposDesc'),
                    ['prompt'=> 'Seleccione la respuesta'])?>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <?= $form->field($modelAppmodulos, "[{$i}]AModDesc")->textInput(['maxlength' => true]) ?>
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <?= $form->field($modelAppmodulos, "[{$i}]AModObse")->textarea(['maxlength' => true, 'rows' => '3']) ?>
                    </div>

                  </div><!-- .row -->
                </div><!-- .row -->

              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <?php DynamicFormWidget::end(); ?>
      </div>
    </div>
