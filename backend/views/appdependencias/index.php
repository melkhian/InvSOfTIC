<?php
use yii\helpers\VarDumper;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\Dependencias;
use backend\models\Aplicaciones;
use yii\helpers\ArrayHelper;
use kartik\export\ExportMenu;
use backend\controllers\SiteController;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\AppdependenciasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Aplicativo por Dependencia';
$this->params['breadcrumbs'][] = $this->title;

$gridColumns = [
    // 'DepId',
    // 'ADepId',
    // 'DepId_fk',
    ['attribute'=>'DepId_fk',
             'value'=> function($model){return $model->DepId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'DepId_fk', ArrayHelper::map(Dependencias::find()->all(), 'DepId', 'DepNomb'),['class'=>'form-control','prompt' => 'Seleccione el Cargo']),
            ],
    // 'AppId_fk',
    ['attribute'=>'AppId_fk',
             'value'=> function($model){return $model->AppId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'AppId_fk', ArrayHelper::map(Aplicaciones::find()->all(), 'AppId', 'AppNomb'),['class'=>'form-control','prompt' => 'Seleccione el Cargo']),
            ],
    'ADepCantUsua',
    'ADepFechSist',

     ];

echo ExportMenu::widget([
    'dataProvider' => $dataProvider,
    'columns' => $gridColumns,
    'exportConfig' => [
        ExportMenu::FORMAT_EXCEL => false,
        ExportMenu::FORMAT_EXCEL_X => false,
        ExportMenu::FORMAT_PDF => [
            'pdfConfig' => [
                'methods' => [
                    'SetTitle' => 'Grid Export - Krajee.com',
                    'SetSubject' => 'Generating PDF files via yii2-export extension has never been easy',
                    'SetHeader' => ['Krajee Library Export||Generated On: ' . date("r")],
                    'SetFooter' => ['|Page {PAGENO}|'],
                    'SetAuthor' => 'Kartik Visweswaran',
                    'SetCreator' => 'Kartik Visweswaran',
                    'SetKeywords' => 'Krajee, Yii2, Export, PDF, MPDF, Output, GridView, Grid, yii2-grid, yii2-mpdf, yii2-export',
                ]
            ]
        ],
    ],
    'filename' => 'export-list-'.$this->title.'-' . date('Y-m-d_H-i-s'),
]);



?>
<div class="appdependencias-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php

        if (SiteController::findCom(15)){
        echo Html::a('Crear Aplicativo por Dependencia', ['create'], ['class' => 'btn btn-success']);
        }
        else {
        //   Yii::$app->response->redirect(['site/error']);
        //   // $this->redirect(['site/error']);
        }
        if (SiteController::findCom(16)) {
          $view = '{view}';
        } else {
          $view = '';
        }
        if (SiteController::findCom(17)) {
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

            // 'ADepId',
            ['attribute'=>'DepId_fk',
             'value'=> function($model){return $model->DepId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'DepId_fk', ArrayHelper::map(Dependencias::find()->all(),'DepId','DepNomb'),['class'=>'form-control','prompt' => 'Seleccione la Dependencia']),
            ],
            ['attribute'=>'AppId_fk',
             'value'=> function($model){return $model->AppId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'AppId_fk', ArrayHelper::map(Aplicaciones::find()->all(),'AppId','AppNomb'),['class'=>'form-control','prompt' => 'Seleccione el Aplicativo']),
            ],
            'ADepCantUsua',
            'ADepFechSist',

            ['class' => 'yii\grid\ActionColumn',
             'header'=>"Acciones",
             'template' => "$view $update"],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
