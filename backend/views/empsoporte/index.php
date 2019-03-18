<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
use kartik\export\ExportMenu;
use backend\models\Tipos;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\EmpsoporteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Empresas de Soporte';
$this->params['breadcrumbs'][] = $this->title;

//-------------------------------------------------------------------------->
//-------------------------------------------------------------------------->
//-------------------------------------------------------------------------->

$gridColumns = [
    // 'DepId',
    // 'ESopId',
    'ESopNit',
    'ESopNomb',
    'ESopDire',
    'ESopCont',
    // 'TiposId_fk1',
    ['attribute'=>'TiposId_fk1',
             'value'=> function($model){return $model->TiposId_fk1();},
             'filter' => Html::activeDropDownList($searchModel, 'TiposId_fk1', ArrayHelper::map(Tipos::find()->where('tipoid_fk = 1')->asArray()->all(), 'TiposId', 'TiposDesc'),['class'=>'form-control','prompt' => 'Seleccione el Cargo']),
            ],
    'ESopTelePers',
    'ESopTeleOfic',
    'ESopCorr',
    // 'TiposId_fk2',
    ['attribute'=>'TiposId_fk2',
             'value'=> function($model){return $model->TiposId_fk2();},
             'filter' => Html::activeDropDownList($searchModel, 'TiposId_fk2', ArrayHelper::map(Tipos::find()->where('tipoid_fk = 12')->asArray()->all(), 'TiposId', 'TiposDesc'),['class'=>'form-control','prompt' => 'Seleccione el Cargo']),
            ],
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
]);

//-------------------------------------------------------------------------->
//-------------------------------------------------------------------------->
//-------------------------------------------------------------------------->


?>
<div class="empsoporte-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php
        if (SiteController::findCom(18)){
        echo Html::a('Crear Empresa Soporte', ['create'], ['class' => 'btn btn-success']);
        }
        else {
          $this->redirect(['site/error']);
        }
        if (SiteController::findCom(19)) {
          $view = '{view}';
        } else {
          $view = '';
        }
        if (SiteController::findCom(20)) {
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

            // 'ESopId',
            'ESopNit',
            'ESopNomb',
            'ESopDire',
            'ESopCont',
            //'TiposId_fk1',
            //'ESopTelePers',
            //'ESopTeleOfic',
            //'ESopCorr',
            //'TiposId_fk2',

            ['class' => 'yii\grid\ActionColumn',
             'header'=>"Acciones",
             'template' => "$view $update"],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
