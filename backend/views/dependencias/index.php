<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\Tipos;
use yii\helpers\ArrayHelper;
use backend\controllers\SiteController;
use kartik\export\ExportMenu;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\DependenciasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dependencias';
$this->params['breadcrumbs'][] = $this->title;

//<!-- ------------------------------------------------------------------------------- -->
//<!-- ------------------------------------------------------------------------------- -->
$titulo = $this->title;
$var = [
        'pdfConfig' => [
            'methods' => [
                'SetTitle' => '  Listado: '.$titulo,
                'SetSubject' => 'Generating PDF files via yii2-export extension has never been easy',
                // 'SetHeader' => [Html::img('imagenesHeader/bloque28.png')."||Generated On: " . date("r")],
                // 'SetHeader' => [Html::img('imagenesHeader/bloque28.png',['height'=>'10px']).'||Generado: ' . date("l")],
                'SetHeader' => [Html::img('imagenesHeader/bloque28.png',['height'=>'15px']).'  Listado: '.$titulo.' / '. Yii::$app->user->identity->username. '||Generado: ' . date('Y-m-d H:i')],
                'SetFooter' => ['|Page {PAGENO}|'],
            ]
        ]
    ];

$gridColumns = [
    // 'DepId',
    'DepNomb',
    'DepEnca',
    ['attribute'=>'TiposId_fk1',
             'value'=> function($model){return $model->TiposId_fk1();},
             'filter' => Html::activeDropDownList($searchModel, 'TiposId_fk1', ArrayHelper::map(Tipos::find()->where('tipoid_fk = 1')->asArray()->all(), 'TiposId', 'TiposDesc'),['class'=>'form-control','prompt' => 'Seleccione el Cargo']),
            ],
    'DepTele',
    'DepDire',
    ['attribute'=>'TiposId_fk2',
             'value'=> function($model){return $model->TiposId_fk2();},
             'filter' => Html::activeDropDownList($searchModel, 'TiposId_fk2', ArrayHelper::map(Tipos::find()->where('tipoid_fk = 4')->asArray()->all(), 'TiposId', 'TiposDesc'),['class'=>'form-control','prompt' => 'Seleccione el Cargo']),
            ],
    // 'TiposId_fk2',
    'DepCorr',
     ];

echo ExportMenu::widget([
    'dataProvider' => $dataProvider,
    'columns' => $gridColumns,
    'exportConfig' => [
        ExportMenu::FORMAT_EXCEL => false,
        ExportMenu::FORMAT_EXCEL_X => false,
        ExportMenu::FORMAT_PDF => $var,
    ],
    'filename' => 'export-list-'.$this->title.'-' . date('Y-m-d_H-i-s'),
]);
//<!-- ------------------------------------------------------------------------------- -->
//<!-- ------------------------------------------------------------------------------- -->
?>

<div class="dependencias-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php
        if (SiteController::findCom(5)) {
        echo Html::a('Crear Dependencia', ['create'], ['class' => 'btn btn-success']);
        }
        else {
          // code...
        }
        if (SiteController::findCom(6)) {
          $view = '{view}';
        } else {
          $view = '';
        }
        if (SiteController::findCom(7)) {
          $update = '{update}';
        } else {
          $update = '';
        }
        ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],
            // 'DepId',
            'DepNomb',
            'DepEnca',
            ['attribute'=>'TiposId_fk1',
             'value'=> function($model){return $model->TiposId_fk1();},
             'filter' => Html::activeDropDownList($searchModel, 'TiposId_fk1', ArrayHelper::map(Tipos::find()->where('tipoid_fk = 1')->asArray()->all(), 'TiposId', 'TiposDesc'),['class'=>'form-control','prompt' => 'Seleccione el Cargo']),
            ],
            'DepTele',
            'DepDire',
            //'TiposId_fk2',
            //'DepCorr',

            ['class' => 'yii\grid\ActionColumn',
            'header'=>"Acciones",
             'template' => "$view $update",
         ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
