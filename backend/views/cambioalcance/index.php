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
        ExportMenu::FORMAT_PDF => $var,
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
        'options' => [
            'class' => 'table-responsive',
        ],
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
