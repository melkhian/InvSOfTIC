<?php

use yii\helpers\Html;
// use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\controllers\SiteController;
use backend\models\Tipos;
use backend\models\Dependencias;
use yii\helpers\ArrayHelper;
use yii\bootstrap\Modal;
use yii\bootstrap\ActiveForm;
use yii\widgets\DetailView;
use kartik\mpdf\Pdf;
use kartik\export\ExportMenu;
use kartik\grid\GridView;


$this->title = 'Usuarios';
$this->params['breadcrumbs'][] = $this->title;
//<!-- ------------------------------------------------------------------------------- -->
//<!-- ------------------------------------------------------------------------------- -->
// Codigo para exportar contenido de la tabla
//<!-- ------------------------------------------------------------------------------- -->
//<!-- ------------------------------------------------------------------------------- -->

$gridColumns = [
    ['class' => 'kartik\grid\SerialColumn'],
    'id',
    'usuiden',
    'usuprimnomb',
    'ususegunomb',
    'usuprimapel',
    'ususeguapel',
    'usutelepers',
    'username',
    'usuteleofic',
    'email',
    'depid_fk',
    'tiposid_fk1',
    'tiposid_fk2',
    'status',
    'auth_key',
    'password_hash',
    'password_reset_token', 
    'created_at',
    'updated_at'
     ];

echo ExportMenu::widget([
    'dataProvider' => $dataProvider,
    'columns' => $gridColumns,
]);
//<!-- ------------------------------------------------------------------------------- -->
//<!-- ------------------------------------------------------------------------------- -->
//<!-- ------------------------------------------------------------------------------- -->


?>
<!-- ------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------------------------------------- -->


<!-- ------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------------------------------------- -->
<div class="user-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <p>
        <?php
        if (SiteController::findCom(1)) {
          // echo Yii::$app->user->authTimeout;
          // echo Yii::$app->request->post();
          echo Html::a('Crear Usuario', ['registro/registro'], ['class' => 'btn btn-success']);
        }
        else {
          // code...
        }
        if (SiteController::findCom(2)) {
          $view = '{view}';
        } else {
          $view = '';
        }
        if (SiteController::findCom(3)) {
          $update = '{update}';
        } else {
          $update = '';
        }
        if (SiteController::findCom(4)) {
          $enable = '{enable}';
        } else {
          $enable = '';
        }
        if (SiteController::findCom(67)) {
          $delete = '{delete}';
        } else {
          $delete = '';
        }
        ?>

    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],
            // 'id',
            'usuiden',
            'usuprimnomb',
            'ususegunomb',
            'usuprimapel',
            //'ususeguapel',
            //'usutelepers',
            'username',
            //'usuteleofic',
            // 'email:email',
            'email',
            ['attribute'=>'depid_fk',
             'value'=> function($model){return $model->depid_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'depid_fk',
             ArrayHelper::map(Dependencias::find()->all(),'DepId','DepNomb'),
             ['class'=>'form-control','prompt' => 'Seleccione la Dependencia']),
            ],
            // 'depid_fk',
            ['attribute'=>'tiposid_fk1',
             'value'=> function($model){return $model->tiposid_fk1();},
             'filter' => Html::activeDropDownList($searchModel, 'tiposid_fk1',
             ArrayHelper::map(Tipos::find()->where('tipoid_fk = 1')->all(),'TiposId','TiposDesc'),
             ['class'=>'form-control','prompt' => 'Seleccione el Cargo']),
            ],
            // 'tiposid_fk1',
            ['attribute'=>'status',
             'value'=> function($model){return $model->status();},
             'filter' => Html::activeDropDownList($searchModel, 'status',
             ArrayHelper::map(Tipos::find()->where('tipoid_fk = 3')->all(),'TiposId','TiposDesc'),
             ['class'=>'form-control','prompt' => 'Seleccione el Estado']),
            ],
            //'tiposid_fk2',
            // 'status',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            //'created_at',
            //'updated_at',

            // NOTE: Custom entire project in ActionColumn: In vendor\yiisoft\yii2\grid\ActionColumn.php file
            ['class' => 'yii\grid\ActionColumn',
             'header'=>"Acciones",
             'template' => "$view $update $enable $delete"],
        ],
    ]);

    ?>
    <?php Pjax::end(); ?>
</div>
