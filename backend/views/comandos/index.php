<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use kartik\export\ExportMenu;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\ComandosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Comandos';
$this->params['breadcrumbs'][] = $this->title;

//-------------------------------------------------------------------------->
//-------------------------------------------------------------------------->
//-------------------------------------------------------------------------->

$gridColumns = [
    // 'DepId',
    // 'CAlcId',
    // 'ComId',
    'ComNomb',
    'ComDesc',
     ];

echo ExportMenu::widget([
    'dataProvider' => $dataProvider,
    'columns' => $gridColumns,
    'exportConfig' => [
        // GridView::HTML => ['label' => 'Export as HTML', 'filename' => 'File_Name -'.date('d-M-Y')],
        ExportMenu::FORMAT_EXCEL => false,
        ExportMenu::FORMAT_EXCEL_X => false,
        ExportMenu::FORMAT_PDF => [
            'pdfConfig' => [
                'methods' => [
                    'SetTitle' => 'Grid Export - Krajee.com',
                    'SetSubject' => 'Generating PDF files via yii2-export extension has never been easy',
                    'SetHeader' => ['Gobernación del valle||Generado el: ' . date("r")],
                    'SetFooter' => ['|Page {PAGENO}|'],
                    'SetAuthor' => 'Kartik Visweswaran',
                    'SetCreator' => 'Kartik Visweswaran',
                    'SetKeywords' => 'Krajee, Yii2, Export, PDF, MPDF, Output, GridView, Grid, yii2-grid, yii2-mpdf, yii2-export',
                ]
            ]
        ],
    ],
    'filename' => 'export-list-'.$this->title . date('Y-m-d_H-i-s'),
]);

//-------------------------------------------------------------------------->
//-------------------------------------------------------------------------->
//-------------------------------------------------------------------------->
?>
<div class="comandos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php
        if (SiteController::findCom(54)) {
        echo Html::a('Crear Comando', ['create'], ['class' => 'btn btn-success']);
        }
        else {
          // $this->redirect(['site/error']);
        }
        if (SiteController::findCom(55)) {
          $view = '{view}';
        } else {
          $view = '';
        }
        if (SiteController::findCom(56)) {
          $update = '{update}';
        } else {
          $update = '';
        }
        ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options' => [
          'class' => 'table-responsive',
        ],
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],

            // 'ComId',
            'ComNomb',
            'ComDesc',

            ['class' => 'yii\grid\ActionColumn',
             'header'=>"Acciones",
             'template' => "$view $update"],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
