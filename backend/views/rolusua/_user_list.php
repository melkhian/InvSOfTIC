<?php
use yii\grid\GridView;

use kartik\date\DatePicker;
?>
<?=   GridView::widget([      
     'dataProvider' => $dataProvider,
     'filterModel' => null,
     'id' => 'grid_user_list',
     'columns' => [
          [
            'label' => '',
            'attribute' => 'id',
            'format' => 'raw',
            'value' => function($model){
              return '<input type="hidden" name="user_id[]" value="'.$model->id.'">';
            }
            ],
            'id',
            'usuprimnomb',
            'usuprimapel',
            'email',    
            // 'RUsucadu',
            [
              'attribute' => 'RUsucadu',
              'label' => 'Fecha',
              'format' => 'raw',            
              'value' => function () 
              {
                  return '<input type="date" name="fechaExpi[]" class="form-control krajee-datepicker" value="">';
              },
            ],

            [
              'header' => 'Eliminar',
              'class' => 'yii\grid\CheckboxColumn',
            ],
          ],
       ]);      
?>


<!-- Segun oy estaba capturando el valor de esto
 -->

