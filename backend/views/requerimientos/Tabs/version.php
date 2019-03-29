<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Tabs;
use yii\helpers\ArrayHelper;
use backend\models\Requerimientos;
use kartik\date\DatePicker;
use wbraganca\dynamicform\DynamicFormWidget;

?>

<?php // NOTE: El siguiente código genera una forma dinámica para manejar relaciones 1:N
      // use wbraganca\dynamicform\DynamicFormWidget; Se debe usar el widget, el cual es descargado por medio de composer
      // requiere ser configurado en diferentes archivos, listados a continuación.
      // 1)_form.php
      //    a) Dentro de la forma que se va a pegar el código que genera el dynamicform se debe modificar varios elementos de este SI se van a manejar varios en la misma forma
      //       se debe agregar un número consecutivo luego de items y este número es igual en todo el widget, solo cambia cuando se crea otro widget
      //      I)'widgetBody' => '.container-items', para otro widget queda 'widgetBody' => '.container-items1', y así en todo el widget
      //      II) 'widgetItem' => '.item',
      //      III) 'insertButton' => '.add-item',
      //      IV) 'deleteButton' => '.remove-item',
      //      V) <div class="container-items">
      //      VI) <div class="item panel panel-default">
      //      VII) <button type="button" class="add-item btn btn-success btn-xs">
      //      VIII)<button type="button" class="remove-item btn btn-danger btn-xs">

      // NOTE: Para elaborar el CREATE
      //    b) views/NombreModelo/create.php
      //      I)  <?= $this->render('_form', [
      //          'model' => $model,
      //          'otrosModelos' => $otrosModelos,
      //          ])
      //    c)Controller.php (Puede revisarse AplicacionesController.php)
      //      I) Se agregan los modelos
      //          $model = new Aplicaciones();
      //          $modelsAppmodulos = [new Appmodulos];
      //      II) Se cargan los modelos
      //          $modelsAppplugins = Model::createMultiple(Appplugins::classname());
      //          Model::loadMultiple($modelsAppplugins, Yii::$app->request->post());
      //      III) Se agregan los foreach
      //              foreach ($modelsAppmodulos as $modelAppmodulos) {
      //              $modelAppmodulos->AppId_fk = $model->AppId; // NOTE:  Aquí se relacionan los modelos con sus respectivas llaves
      //               if (! ($flag = $modelAppmodulos->save(false))) {
      //                   $transaction->rollBack();
      //                   break;
      //               }
      //             }
      // NOTE: Se renderizan todos los modelos que se usan en el formulario
      //              return $this->render('create', [
      //                'model' => $model,
      //                'modelsAppmodulos' => (empty($modelsAppmodulos)) ? [new Appmodulos] : $modelsAppmodulos,
      //               ]);
      // NOTE: Se debe eliminar en rules del modelo N la llave foránea de los campos requeridos, en este caso Aplicaciones es el modelo 1 y appmodulos es el modelo N

      // NOTE: Para elaborar el UPDATE
      //    d) views/NombreModelo/update.php
      //      $this->render('_form', [
      //        'model' => $model,
      //        'modelsAppmodulos' => $modelsAppmodulos,
      // ])
      //    e) controller.php (Puede revisarse AplicacionesController.php)
      //      I) Agregar modelo $modelsAppmodulos = $model->appmodulos;
      //      II) $oldIDs = ArrayHelper::map($modelsAppmodulos, 'AModId', 'AModId'); ...continúa código
      //      III) Agregar deleteAll   if (! empty($deletedIDs)) {Appmodulos::deleteAll(['AModId' => $deletedIDs]);}
      //      IV) Agregar foreach      foreach ($modelsAppplugins as $modelAppplugins) {$modelAppplugins->AppId_fk = $model->AppId;
                        // if (! ($flag = $modelAppplugins->save(false))) {$transaction->rollBack();
                        //   break;}}
      //      V) Agregar return 'modelsAppmodulos' => (empty($modelsAppmodulos)) ? [new Appmodulos] : $modelsAppmodulos,
      ?>
      <div class="row">
        <div class="panel panel-default">
          <div class="panel-heading"><h4><i class="	glyphicon glyphicon-equalizer"></i> VERSIÓN DEL REQUERIMIENTO</h4></div>
          <div class="panel-body">
            <?php DynamicFormWidget::begin([
              'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
              'widgetBody' => '.container-items', // required: css class selector
              'widgetItem' => '.item', // required: css class
              'limit' => 1, // the maximum times, an element can be cloned (default 999)
              'min' => 1, // 0 or 1 (default 1)
              'insertButton' => '.add-item', // css class
              'deleteButton' => '.remove-item', // css class
              'model' => $modelsVersdocrequerimientos[0],
              'formId' => 'dynamic-form',
              'formFields' => [
                'VDReqDocu',
              ],
            ]); ?>

            <div class="container-items"><!-- widgetContainer -->
              <?php foreach ($modelsVersdocrequerimientos as $i => $modelVersdocrequerimientos): ?>
                <div class="item panel panel-default"><!-- widgetBody -->
                  <div class="panel-heading">
                    <h3 class="panel-title pull-left">Versión</h3>
                    <div class="pull-right">
                      <!-- <button type="button" class="add-item btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                      <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button> -->
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="panel-body">
                    <?php
                    // necessary for update action.
                    if (! $modelVersdocrequerimientos->isNewRecord) {
                      echo Html::activeHiddenInput($modelVersdocrequerimientos, "[{$i}]VDReqId");
                    }
                    ?>
                    <div class="row">
                      <div class="col-sm-12">
                        <?= $form->field($modelVersdocrequerimientos, "[{$i}]VDReqDocu")->textInput(['maxlength' => true]) ?>
                      </div>
                    </div>
                    <div class="row">
                      <?= $form->field($modelVersdocrequerimientos, "[{$i}]VDReqFechSist")->hiddenInput(['maxlength' => true])->label(false); ?>
                    </div>
                  </div><!-- .row -->
                </div>
              <?php endforeach; ?>
            </div>
            <?php DynamicFormWidget::end(); ?>
          </div>
        </div>
      </div>
