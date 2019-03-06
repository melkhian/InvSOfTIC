<?php
use yii\grid\GridView;
use yii\widgets\ActiveForm;
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
          // 'id',
          'username',
          'usuprimnomb',
          'usuprimapel',
          'email',
          
          // 'RUsucadu',
          // ['class' => 'yii\grid\ActionColumn',
           // 'template' => '{view} {myButton}',
           // 'buttons' => [
           //      'myButton' => function($url, $model, $key) {     // render your custom button
           //          return Html::a('Crear Dependencia', ['create'], ['class' => 'btn-primary grid-button']);
           //      }
           //  ]
          // ],          
         ],
       ]);      
?>

<script type="text/javascript">
  // alert("AQUI".select);
          var select = $('#grid_user_list').yiiGridView('getSelectedRows');
          if (select == '') {
            alert("hello");
          }
          alert("AQUI".select);

</script>
