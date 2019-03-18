<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
use backend\models\Tipos;
use kartik\export\ExportMenu;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\ParametrosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Parametros';
$this->params['breadcrumbs'][] = $this->title;

//-------------------------------------------------------------------------->
//-------------------------------------------------------------------------->
//-------------------------------------------------------------------------->

$gridColumns = [
    // 'DepId',
    // 'CAlcId',
    // 'ParId',
    'ParHead',
    'ParFoot',
    'ParMult',
    'ParFall',
    ['attribute'=>'TiposId_fk',
             'value'=> function($model){return $model->TiposId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'TiposId_fk', ArrayHelper::map(Tipos::find()->where('tipoid_fk = 51')->asArray()->all(), 'TiposId', 'TiposDesc'),['class'=>'form-control','prompt' => 'Seleccione el Cargo']),
            ],
    // 'UsuId_fk,'
      'ParNemo',
      'ParTiemExpi',
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
<div class="parametros-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php

        if (SiteController::findCom(60)) {
          echo Html::a('Crear Parámetro', ['create'], ['class' => 'btn btn-success']);
          }
          else {
            // $this->redirect(['site/error']);
          }
          if (SiteController::findCom(61)) {
            $view = '{view}';
          } else {
            $view = '';
          }
          if (SiteController::findCom(62)) {
            $update = '{update}';
          } else {
            $update = '';
          }
          if (SiteController::findCom(66)) {
            $enable = '{enable}';
          } else {
            $enable = '';
          }
          ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],

            // 'ParId',
            'ParHead',
            'ParFoot',
            'ParMult',
            'ParFall',
            // NOTE: $model->TiposId_fk() esta función se encuentra en el modelo de Parámetros
            ['attribute'=>'TiposId_fk',
            'headerOptions' => ['style' => 'color:#337ab7'],
            'header' => 'Estado del Aplicativo '.Html::tag('span', '<small>
                        <span class="fa fa-info-circle" tool-tip-toggle="tooltip-demo"</span>
                        </small>',
                        [
                            'title'=>'Opción para Habilitar/Inhabilitar el acceso de Usuarios al Aplicativo, solo los Usuarios tipo SUPERUSER pueden ingresar aún si está Inhabilitado',
                            'data-toggle'=>'tooltip',
                            'style'=>'text-decoration: underline; cursor:pointer;'
                        ]),
             'value'=> function($model){return $model->TiposId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'TiposId_fk',
             ArrayHelper::map(Tipos::find()->where('tipoid_fk = 51')->all(),'TiposId','TiposDesc'),['class'=>'form-control','prompt' => 'Seleccione el Estado']),
            ],


            'ParNemo',
            'ParTiemExpi',

            ['class' => 'yii\grid\ActionColumn',
             'header'=>"Acciones",
             'template' => "$view $update $enable"],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
