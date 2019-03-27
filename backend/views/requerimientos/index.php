<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\Aplicaciones;
use backend\models\User;
use backend\models\Tipos;
use yii\helpers\ArrayHelper;
use kartik\export\ExportMenu;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\RequerimientosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Requerimientos';
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
    // 'ReqId',
    ['attribute'=>'AppId_fk',
             'value'=> function($model){return $model->AppId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'AppId_fk', ArrayHelper::map(Aplicaciones::find()->orderBy("AppNomb ASC")->all(), 'AppId', 'AppNomb'),['class'=>'form-control','prompt' => 'Seleccione el Cargo']),
            ],
    // 'TiposId_fk1',
    ['attribute'=>'TiposId_fk1',
             'value'=> function($model){return $model->TiposId_fk1();},
             'filter' => Html::activeDropDownList($searchModel, 'TiposId_fk1', ArrayHelper::map(Tipos::find()->where('tipoid_fk = 13')->asArray()->all(), 'TiposId', 'TiposDesc'),['class'=>'form-control','prompt' => 'Seleccione el Cargo']),
            ],
    // 'UsuId_fk,'
    ['attribute'=>'UsuId_fk',
             'value'=> function($model){return $model->UsuId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'UsuId_fk', ArrayHelper::map(User::find()->all(), 'id', 'username'),['class'=>'form-control','prompt' => 'Seleccione el Cargo']),
            ],
    ['attribute'=>'Tiposid_fk2',
             'value'=> function($model){return $model->Tiposid_fk2();},
             'filter' => Html::activeDropDownList($searchModel, 'Tiposid_fk2', ArrayHelper::map(Tipos::find()->where('tipoid_fk = 14')->asArray()->all(), 'TiposId', 'TiposDesc'),['class'=>'form-control','prompt' => 'Seleccione el Cargo']),
            ],
    ['attribute'=>'TiposId_fk3',
             'value'=> function($model){return $model->TiposId_fk3();},
             'filter' => Html::activeDropDownList($searchModel, 'TiposId_fk3', ArrayHelper::map(Tipos::find()->where('tipoid_fk = 15')->asArray()->all(), 'TiposId', 'TiposDesc'),['class'=>'form-control','prompt' => 'Seleccione el Cargo']),
            ],
    'ReqFechTomaRequ',
    'ReqFechSist',
    ['attribute'=>'TiposId_fk4',
             'value'=> function($model){return $model->TiposId_fk4();},
             'filter' => Html::activeDropDownList($searchModel, 'TiposId_fk4', ArrayHelper::map(Tipos::find()->where('tipoid_fk = 16')->asArray()->all(), 'TiposId', 'TiposDesc'),['class'=>'form-control','prompt' => 'Seleccione el Cargo']),
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
<div class="requerimientos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php
        if (SiteController::findCom(27)) {
        echo Html::a('Crear Requerimiento', ['create'], ['class' => 'btn btn-success']);
        }
        else {
          // $this->redirect(['site/error']);
        }
        if (SiteController::findCom(28)) {
          $view = '{view}';
        } else {
          $view = '';
        }
        if (SiteController::findCom(29)) {
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

            // 'ReqId',
            ['attribute'=>'AppId_fk',
             'value'=> function($model){return $model->AppId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'AppId_fk', ArrayHelper::map(Aplicaciones::find()->orderBy("AppNomb ASC")->all(),'AppId','AppNomb'),['class'=>'form-control','prompt' => 'Seleccione la aplicación']),
            ],
            'ReqDesc',
            ['attribute'=>'TiposId_fk1',
             'value'=> function($model){return $model->TiposId_fk1();},
             'filter' => Html::activeDropDownList($searchModel, 'TiposId_fk1', ArrayHelper::map(Tipos::find()->where('tipoid_fk = 13')->all(),'TiposId','TiposDesc'),['class'=>'form-control','prompt' => 'Seleccione el Tipo']),
            ],
            ['attribute'=>'UsuId_fk',
             'value'=> function($model){return $model->UsuId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'UsuId_fk', ArrayHelper::map(User::find()->orderBy("username ASC")->all(),'id','username'),['class'=>'form-control','prompt' => 'Seleccione el Usuario']),
            ],
            //'Tiposid_fk2',
            //'TiposId_fk3',
            //'ReqFechTomaRequ',
            //'ReqFechSist',
            //'TiposId_fk4',

            ['class' => 'yii\grid\ActionColumn',
             'header'=>"Acciones",
             'template' => "$view $update"],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
