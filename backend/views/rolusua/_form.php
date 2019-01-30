<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Roles;
use backend\models\rolusua;
use backend\models\UserSearch;
use backend\models\User;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;
use yii\bootstrap\Modal;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
/* @var $this yii\web\View */
/* @var $model backend\models\Rolusua */
/* @var $form yii\widgets\ActiveForm */
?>
<!--
////////////////////////////////////////
-->
<?php
$searchModel = new UserSearch; //---> Data Modelo que aparece en el modal
$dataProvider = $searchModel->search(Yii::$app->request->getQueryParams()); //---> Campos de Busqueda del Modal
$dataProvider->pagination = ['pageSize' => 5]; //---> Paginacion del Modal
?>
<!--
////////////////////////////////////////-> No se debe crear el modal dentro del activeform debido a que no funcionara correctamente el filtro del mismo.
-->
<div class="rolusua-form">
    <?php Pjax::begin(); ?>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'RolId_fk')->dropDownList(ArrayHelper::map(Roles::find()->all(),'RolId','RolNomb'), ['prompt'=> 'Seleccione el Rol']) //--> Combobox ?>

    <?php $form = ActiveForm::end(); ?>
<!--
////////////////////////////////////////
-->
<?php
Modal::begin([
  'id' => 'modal',
  'header' => '<h2>Usuarios</h2>',
  'size' => 'modal-lg',
  'toggleButton' => ['label' => 'Seleccione usuario','class' => 'btn btn-primary'],
  // 'footer' => Html::submitButton('<i class="glyphicon glyphicon-download-alt"></i><span>&nbsp;&nbsp; Guardar</span>',
  //               ['type'=>'button', 'class'=>'btn btn-success', 'id'=>'x',
  //               'onclick'=>'var keys = $("#grid").yiiGridView("getSelectedRows").length; alert(keys > 0 ? "Ha Seleccionado: " + keys + " Registros para Filtrar." : "No hay registros Seleccionados para Filtrar.");'
  //           ]),
  'footer' => '<a id="boton_modal" href="#" class="btn btn-success" data-dismiss="modal" onclick=getRows() >Guardar</a>', //---> Boton guardar en el footer del modal
  'clientOptions' => ['backdrop' => true],
  ]);
?>
<!--
////////////////////////////////////////////////////////////////////////////
-->
<?php Pjax::begin(); ?>
<?=   GridView::widget([
     'dataProvider' => $dataProvider,
     'filterModel' => $searchModel,
     'id' => 'grid',
     'columns' => [
      ['class' => 'yii\grid\CheckboxColumn'
      // ,
      //  'checkboxOptions' => function($model) {
      //     return ['value' => $model->id];
      //   }
      ],
          'id',
          'usuprimnomb',
          'usuprimapel',
          'email',
          // ['class' => 'yii\grid\ActionColumn'],
         ],
       ]);
      // echo Html::submitButton( 'Guardar', [ 'class' => 'btn btn-success' , 'id' =>'x']);
?>
    <?php Pjax::end(); ?>
    <?php Modal::end(); ?>
    <script>
    function getRows(){
      var keys = $('#grid').yiiGridView('getSelectedRows');
      if(keys == ''){
        alert('Por favor seleccione una o mas Rows!');
      }
      else {
        alert(keys);
        $.post({
            // url: rolusuaController,
            dataType: 'json',
            data: {keylist: keys},
            success: function(data) {
                alert('I did it! Processed checked rows.');
            },
        });
      }
    }
    </script>
<!--
////////////////////////////////////////////////////////////////////////////
-->
      <!-- <form name="form1" method="post" action=""> -->
      <!-- <button type="button" id="boton" name="boton" onclick="getRows()" class="btn btn-success">Export</button> -->
      <!-- </form> -->

<!--
////////////////////////////////////////////////////////////////////////////
-->
    <?php $form = ActiveForm::begin(); ?>

    <p/>
    <?= $form->field($model, 'UsuId_fk')->dropDownList(ArrayHelper::map(User::find()->all(),'id','email'), ['prompt'=> 'Seleccione el Usuario'])?>

    <?= $form->field($model, 'RUsuCadu')->widget( DatePicker::className(),
          	['name' => 'check_issue_date',
          	'value' => date('d-M-Y', strtotime('+2 days')),
          	'options' => ['placeholder' => 'Seleccione la fecha de Caducidad'],
          	'pluginOptions' => [
          	'format' => 'yyyy-mm-dd',
          	'todayHighlight' => true]]);
     ?>
    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']);?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
