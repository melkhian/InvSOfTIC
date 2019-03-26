<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\User;
use kartik\export\ExportMenu;
use yii\helpers\ArrayHelper;
use backend\models\Tipos;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProyectosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Proyectos';
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
    // 'Proid',
    'ProNomb',
    'ProDesc',
    'ProObje',
    // 'UsuId_fk',
    ['attribute'=>'UsuId_fk',
             'value'=> function($model){return $model->UsuId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'UsuId_fk', ArrayHelper::map(User::find()->all(), 'id', 'username'),['class'=>'form-control','prompt' => 'Seleccione el Cargo']),
            ],
    // 'TiposId_fk1',
    ['attribute'=>'Tiposid_fk1',
             'value'=> function($model){return $model->Tiposid_fk1();},
             'filter' => Html::activeDropDownList($searchModel, 'Tiposid_fk1', ArrayHelper::map(Tipos::find()->where('tipoid_fk = 17')->asArray()->all(), 'TiposId', 'TiposDesc'),['class'=>'form-control','prompt' => 'Seleccione el Cargo']),
            ],
    'ProFechApro',
    'ProDocu',
    'ProFechInic',
    'ProFechFina',
    // 'TiposId_fk2',
    ['attribute'=>'TiposId_fk2',
             'value'=> function($model){return $model->TiposId_fk2();},
             'filter' => Html::activeDropDownList($searchModel, 'TiposId_fk2', ArrayHelper::map(Tipos::find()->where('tipoid_fk = 18')->asArray()->all(), 'TiposId', 'TiposDesc'),['class'=>'form-control','prompt' => 'Seleccione el Cargo']),
            ],
    'ProFinProy',
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
<div class="proyectos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php
        if (SiteController::findCom(21)) {
        echo Html::a('Crear Proyecto', ['create'], ['class' => 'btn btn-success']);
        }
        else {
          $this->redirect(['site/error']);
        }
        if (SiteController::findCom(22)) {
          $view = '{view}';
        } else {
          $view = '';
        }
        if (SiteController::findCom(23)) {
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

            // 'ProId',
            'ProNomb',
            'ProDesc',
            'ProObje',
            // NOTE: $model->UsuId_fk() esta función se encuentra en el modelo de Proyectos
            ['attribute'=>'UsuId_fk',
             'value'=> function($model){return $model->UsuId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'UsuId_fk',
             ArrayHelper::map(User::find()->all(),'id','username'),['class'=>'form-control','prompt' => 'Seleccione el Usuario']),
            ],
            //'Tiposid_fk1',
            //'ProFechApro',
            //'ProDocu',
            //'ProFechInic',
            //'ProFechFina',
            //'TiposId_fk2',
            //'ProFinProy',

            ['class' => 'yii\grid\ActionColumn',
             'header'=>"Acciones",
             'template' => "$view $update"],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
