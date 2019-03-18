<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\Tipo;
use backend\models\Tipos;
use yii\helpers\ArrayHelper;
use kartik\export\ExportMenu;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\TiposSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipos';
$this->params['breadcrumbs'][] = $this->title;

//-------------------------------------------------------------------------->
//-------------------------------------------------------------------------->
//-------------------------------------------------------------------------->

$gridColumns = [
    // 'DepId',
    // 'CAlcId',
    // 'TiposId',
    ['attribute'=>'TipoId_fk',
             'value'=> function($model){return $model->TipoId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'TipoId_fk', ArrayHelper::map(Tipo::find()->all(), 'TipoId', 'TipoDesc'),['class'=>'form-control','prompt' => 'Seleccione el Cargo']),
            ],
    'TiposDesc',
    'TiposValo',
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
<div class="tipos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php
        if (SiteController::findCom(48)) {
        echo Html::a('Crear Tipos', ['create'], ['class' => 'btn btn-success']);
        }
        else {
          // $this->redirect(['site/error']);
        }
        if (SiteController::findCom(49)) {
          $view = '{view}';
        } else {
          $view = '';
        }
        if (SiteController::findCom(50)) {
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

            // 'TiposId',
            ['attribute'=>'TipoId_fk',
             'value'=> function($model){return $model->TipoId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'TipoId_fk', ArrayHelper::map(Tipo::find()->orderBy("TipoDesc ASC")->all(),'TipoId','TipoDesc'),['class'=>'form-control','prompt' => 'Seleccione el Tipo']),
            ],
            'TiposDesc',
            'TiposValo',

            ['class' => 'yii\grid\ActionColumn',
             'header'=>"Acciones",
             'template' => "$view $update"],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
