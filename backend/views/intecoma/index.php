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
        ExportMenu::FORMAT_PDF => $var,
    ],
    'filename' => 'export-list-'.$this->title.'-' . date('Y-m-d_H-i-s'),
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
        'options' => [
            'class' => 'table-responsive',
        ],
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],

            // 'IcomId',
            ['attribute'=>'IntiId_fk',
             'value'=> function($model){return $model->IntiId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'IntiId_fk', ArrayHelper::map(Interfaces::find()->orderBy("IntNomb ASC")->all(),'IntId','IntNomb'),['class'=>'form-control','prompt' => 'Seleccione la Interfaz']),
            ],
            ['attribute'=>'ComId_fk',
             'value'=> function($model){return $model->ComId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'ComId_fk', ArrayHelper::map(Comandos::find()->orderBy("ComNomb ASC")->all(),'ComId','ComNomb'),['class'=>'form-control','prompt' => 'Seleccione el Comando']),
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
