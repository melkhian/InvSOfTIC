<?php
use yii\grid\GridView;
?>

<?=   GridView::widget([      
     'dataProvider' => $dataProvider,
     'filterModel' => null,
     'id' => 'grid_user_list',

     'columns' => [
        ['class' => 'yii\grid\CheckboxColumn'],
          [
            // 'model' => $model,
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
          // ['class' => 'yii\grid\ActionColumn'],
         ],
       ]);      
?>