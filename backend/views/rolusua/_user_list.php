<?php
use yii\grid\GridView;
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
          // ['class' => 'yii\grid\ActionColumn'],
         ],
       ]);      
?>
