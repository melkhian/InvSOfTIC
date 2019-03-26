<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\Roles;
use backend\models\Intecoma;
use yii\helpers\ArrayHelper;
use kartik\export\ExportMenu;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\RolintecomaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rol por Funcionalidad';
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
    // 'RIComId',
    ['attribute'=>'RolId_fk',
             'value'=> function($model){return $model->RolId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'RolId_fk', ArrayHelper::map(Roles::find()->all(), 'RolId', 'RolNomb'),['class'=>'form-control','prompt' => 'Seleccione el Cargo']),
            ],
    ['attribute'=>'IComid_fk',
             'value'=> function($model){return $model->IComid_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'IComid_fk', ArrayHelper::map(Intecoma::find()->all(), 'IcomId', 'IcomDesc'),['class'=>'form-control','prompt' => 'Seleccione el Cargo']),
            ],
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
<div class="rolintecoma-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php
        if (SiteController::findCom(39)) {
        echo Html::a('Crear Rol por Funcionalidad', ['create'], ['class' => 'btn btn-success']);
        }
        else {
          // $this->redirect(['site/error']);
        }
        if (SiteController::findCom(40)) {
          $view = '{view}';
        } else {
          $view = '';
        }
        if (SiteController::findCom(41)) {
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

            // 'RIComId',
            ['attribute'=>'RolId_fk',
             'value'=> function($model){return $model->RolId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'RolId_fk', ArrayHelper::map(Roles::find()->all(),'RolId','RolNomb'),['class'=>'form-control','prompt' => 'Seleccione el Rol']),
            ],
            ['attribute'=>'IComid_fk',
             'value'=> function($model){return $model->IComid_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'IComid_fk', ArrayHelper::map(Intecoma::find()->all(),'IcomId','IcomFunc'),['class'=>'form-control','prompt' => 'Seleccione la Funcionalidad']),
            ],
            ['class' => 'yii\grid\ActionColumn',
             'header'=>"Acciones",
             'template' => "$view $update"],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
