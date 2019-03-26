<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\Tipos;
use yii\helpers\ArrayHelper;
use kartik\export\ExportMenu;
use backend\models\Aplicaciones;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\AppmodulosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Módulos por Aplicación';
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
    // 'AModId',
    ['attribute'=>'AppId_fk',
             'value'=> function($model){return $model->AppId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'AppId_fk', ArrayHelper::map(aplicaciones::find()->all(), 'AppId','AppNomb'),['class'=>'form-control','prompt' => 'Seleccione el Cargo']),
            ],
    'AModNomb',
    'AModDesc',
    ['attribute'=>'TiposId_fk',
             'value'=> function($model){return $model->TiposId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'TiposId_fk', ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->asArray()->all(), 'TiposId', 'TiposDesc'),['class'=>'form-control','prompt' => 'Seleccione el Cargo']),
            ],
    'AModObse',
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
<div class="appmodulos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>

        <?php
        if (SiteController::findCom(12)){
        echo Html::a('Crear Módulo por Aplicación', ['create'], ['class' => 'btn btn-success']);
        }
        else {
          // $this->redirect(['site/error']);
        }
        if (SiteController::findCom(13)) {
          $view = '{view}';
        } else {
          $view = '';
        }
        if (SiteController::findCom(14)) {
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

            // 'AModId',
            'AppId_fk',
            'AModNomb',
            'AModDesc',
            ['attribute'=>'TiposId_fk',
             'value'=> function($model){return $model->TiposId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'TiposId_fk', ArrayHelper::map(Tipos::find()
             ->where('tipoid_fk = 46')->all(),'TiposId','TiposDesc'),['class'=>'form-control','prompt' => 'Seleccione la respuesta']),
            ],
            'TiposId_fk',
            'AModObse',

            ['class' => 'yii\grid\ActionColumn',
             'header'=>"Acciones",
             'template' => "$view $update"],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
