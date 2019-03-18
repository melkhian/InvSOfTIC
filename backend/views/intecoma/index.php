<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\Interfaces;
use backend\models\Comandos;
use yii\helpers\ArrayHelper;
use kartik\export\ExportMenu;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\IntecomaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Interfaz por Comando';
$this->params['breadcrumbs'][] = $this->title;

//-------------------------------------------------------------------------->
//-------------------------------------------------------------------------->
//-------------------------------------------------------------------------->

$gridColumns = [
    // 'DepId',
    // 'CAlcId',
    // 'IcomId',
    ['attribute'=>'IntiId_fk',
             'value'=> function($model){return $model->IntiId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'IntiId_fk', ArrayHelper::map(Interfaces::find()->all(), 'IntId', 'IntNomb'),['class'=>'form-control','prompt' => 'Seleccione el Cargo']),
            ],
    ['attribute'=>'ComId_fk',
             'value'=> function($model){return $model->ComId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'ComId_fk', ArrayHelper::map(Comandos::find()->all(), 'ComId', 'ComNomb'),['class'=>'form-control','prompt' => 'Seleccione el Cargo']),
            ],  
    'IcomFunc',
    'IcomDesc',        
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
<div class="intecoma-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php
        if (SiteController::findCom(57)) {

        echo Html::a('Crear Interfaz por Comando', ['create'], ['class' => 'btn btn-success']);
        }
        else {
          // $this->redirect(['site/error']);
        }
        if (SiteController::findCom(58)) {
          $view = '{view}';
        } else {
          $view = '';
        }
        if (SiteController::findCom(59)) {
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

            // 'IcomId',
            ['attribute'=>'IntiId_fk',
             'value'=> function($model){return $model->IntiId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'IntiId_fk', ArrayHelper::map(Interfaces::find()->all(),'IntId','IntNomb'),['class'=>'form-control','prompt' => 'Seleccione la Interfaz']),
            ],
            ['attribute'=>'ComId_fk',
             'value'=> function($model){return $model->ComId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'ComId_fk', ArrayHelper::map(Comandos::find()->all(),'ComId','ComNomb'),['class'=>'form-control','prompt' => 'Seleccione el Comando']),
            ],
            'IcomFunc',
            'IcomDesc',

            ['class' => 'yii\grid\ActionColumn',
             'header'=>"Acciones",
             'template' => "$view $update"],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
