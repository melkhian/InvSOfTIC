<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
use yii\widgets\ListView;
use backend\models\Roles;
use backend\models\rolusua;
use backend\models\UserSearch;
use backend\models\User;
use kartik\date\DatePicker;
use yii\bootstrap\Modal;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;

/* @var $this yii\web\View */
/* @var $model backend\models\Rolusua */
/* @var $form yii\widgets\ActiveForm */
?>

<!--////////////////////////////////
////////////////////////////////////////-> No se debe crear el modal dentro del activeform debido a que no funcionara correctamente el filtro del mismo.
-->
<div class="rolusua-form">
  <?php if(isset($mensaje) && $mensaje != ''){ ?>
  <div class="alert alert-danger">
    <?= $mensaje ?>
  </div>
  <?php } ?>

  <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'RolId_fk')->dropDownList(ArrayHelper::map(Roles::find()->all(),'RolId','RolNomb'), ['prompt'=> 'Seleccione el Rol']) //--> Combobox ?>

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

        <?= Html::submitButton('Eliminar', ['id'=>'delete', 'class' => 'btn btn-danger']);?>
    </div>
    <div id="user_list">     
     </div>
    <?php ActiveForm::end(); ?>

  <p>
  <?php
  Modal::begin([
  'id' => 'modal',
  'header' => '<h2>Usuarios</h2>',
  'size' => 'modal-lg',
  'toggleButton' => [
    'label' => 'Seleccione usuario',
    'class' => 'btn btn-primary'
  ],
  'footer' => '<a id="x" href="#" class="btn btn-success" data-dismiss="modal">Guardar</a>', 
  //---> Boton guardar en el footer del modal
  'clientOptions' => ['backdrop' => false],
  ]);
  ?>
  </p>
<!--
////////////////////////////////////////////////////////////////////////////
-->
<?php Pjax::begin(['id' => 'rolusua']) ?>
<?=  GridView::widget([    
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
          'ususegunomb',
          'usuprimapel',                  
          'ususeguapel',
          'usutelepers',
          'username',          
          'email',
          // ['class' => 'yii\grid\ActionColumn'],
         ],
       ]);
      // echo Html::submitButton( 'Guardar', [ 'class' => 'btn btn-success' , 'id' =>'x']);
?>
    <?php Pjax::end() ?>
    <?php Modal::end(); ?>


  
<!--
////////////////////////////////////////
-->
    <?php
      $this->registerJs("$(\"#x\").click(function(){
          var keys = $('#grid').yiiGridView('getSelectedRows');
          //console.log($('#grid').yiiGridView(''));
          if (keys == '') {
              alert('Por favor seleccione uno o mas Rows!');
          }
          else {
            // alert(keys);   
            // document.getElementById('este').value=keys;
            $.ajax({

              // url: '/invsoftic/backend/controllers/RolusuaController.php',

              //url: '/invsoftic/backend/views/rolusua/archivoJson.php',

               url: '" . \Yii::$app->urlManager->createUrl('/rolusua/asociar-usuarios') . "',

              type: 'POST',

              data: {keys:keys},

              // data: {searchname: $('#searchname').val() , searchby:$('#searchby').val()},

 							success: function(data){
                console.log(data);
 								$('#user_list').html(data);
             }
           });
          }
      });
      "


//              ,
      // $this::POS_HEAD
    );
    ?>

    <!-- Boton eliminar -->
     
    <?php
      $this->registerJs("$(\"#delete\").click(function(){
          var keys = $('#grid').yiiGridView('getSelectedRows');
          //console.log($('#grid').yiiGridView(''));
          if (keys == '') {
              alert('Por favor seleccione uno o mas Rows!');
          }
          else 
          {
            alert(keys);   
            // document.getElementById('grid_user_list').remove();            
          }
      });
      "
    );
    ?>

    <!-- <?= $form->field($model, 'UsuId_fk')->dropDownList(ArrayHelper::map(User::find()->all(),'id','email'), ['prompt'=> 'Seleccione el Usuario'])?> -->

    
     

    

</div>
