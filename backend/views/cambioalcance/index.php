<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\Proyectos;
use kartik\export\ExportMenu;
use yii\helpers\ArrayHelper;
use backend\models\Tipos;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\CambioalcanceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cambio de Alcance';
$this->params['breadcrumbs'][] = $this->title;

//-------------------------------------------------------------------------->
//-------------------------------------------------------------------------->
//-------------------------------------------------------------------------->

$gridColumns = [
    // 'DepId',
    // 'CAlcId',
    // 'ProId_fk',
    ['attribute'=>'ProId_fk',
             'value'=> function($model){return $model->ProId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'ProId_fk', ArrayHelper::map(Proyectos::find()->all(), 'ProId', 'ProNomb'),['class'=>'form-control','prompt' => 'Seleccione el Cargo']),
            ],
    'CAlcDesc',
    'CAlcFechApro',
    'CAlcFechInic',
    'CAlcFechFina',
    'CAlcFechSist',
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

//-------------------------------------------------------------------------->
//-------------------------------------------------------------------------->
//-------------------------------------------------------------------------->


?>
<div class="cambioalcance-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php
        if (SiteController::findCom(24)) {
        echo Html::a('Crear Cambio de Alcance', ['create'], ['class' => 'btn btn-success']);
        }
        else {
          // $this->redirect(['site/error']);
        }
        if (SiteController::findCom(25)) {
          $view = '{view}';
        } else {
          $view = '';
        }
        if (SiteController::findCom(26)) {
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

            // 'CAlcId',
            ['attribute'=>'ProId_fk',
             'value'=> function($model){return $model->ProId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'ProId_fk', ArrayHelper::map(Proyectos::find()->all(),'ProId','ProNomb'),['class'=>'form-control','prompt' => 'Seleccione el Proyecto']),
            ],
            'CAlcDesc',
            'CAlcFechApro',
            'CAlcFechInic',
            'CAlcFechFina',
            //'CAlcFechSist',

            ['class' => 'yii\grid\ActionColumn',
             'header'=>"Acciones",
             'template' => "$view $update"],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
