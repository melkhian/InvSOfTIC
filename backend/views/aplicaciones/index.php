<?php
use yii\helpers\ArrayHelper;
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use kartik\export\ExportMenu;
use backend\models\Tipos;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\AplicacionesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Aplicaciones';
$titulo = $this->title;
$this->params['breadcrumbs'][] = $this->title;

//<!-- ------------------------------------------------------------------------------- -->
//<!-- ------------------------------------------------------------------------------- -->
$titulo = $this->title;
$var = [
        'pdfConfig' => [
            'methods' => [
                'SetTitle' => '  Listado: '.$titulo,
                'SetSubject' => 'Generating PDF files via yii2-export extension has never been easy',
                // 'SetHeader' => [Html::img('imagenesHeader/bloque28.png')."||Generated On: " . date("r")],
                // 'SetHeader' => [Html::img('imagenesHeader/bloque28.png',['height'=>'10px']).'||Generado: ' . date("l")],
                'SetHeader' => [Html::img('imagenesHeader/bloque28.png',['height'=>'15px']).'  Listado: '.$titulo.' - Generado por: '. Yii::$app->user->identity->username. '||Generado: ' . date('Y-m-d H:i')],
                'SetFooter' => ['|Page {PAGENO}|'],
            ]
        ]
    ];
$gridColumns = [
    // 'DepId',
    'AppNomb',
    'AppVers',
    'AppDesc',
    'AppSigl',
    // ['attribute'=>'TiposId_fk1',
    //          'value'=> function($model){return $model->TiposId_fk1();},
    //          'filter' => Html::activeDropDownList($searchModel, 'TiposId_fk1', ArrayHelper::map(Tipos::find()->where('tipoid_fk = 1')->asArray()->all(), 'TiposId', 'TiposDesc'),['class'=>'form-control','prompt' => 'Seleccione el Cargo']),
    //         ],
    // 'DepTele',
    // 'DepDire',
    // ['attribute'=>'TiposId_fk2',
    //          'value'=> function($model){return $model->TiposId_fk2();},
    //          'filter' => Html::activeDropDownList($searchModel, 'TiposId_fk2', ArrayHelper::map(Tipos::find()->where('tipoid_fk = 4')->asArray()->all(), 'TiposId', 'TiposDesc'),['class'=>'form-control','prompt' => 'Seleccione el Cargo']),
    //         ],
    // // 'TiposId_fk2',
    // 'DepCorr',
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
//<!-- ------------------------------------------------------------------------------- -->
//<!-- ------------------------------------------------------------------------------- -->
?>

<div class="aplicaciones-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php
        if (SiteController::findCom(8)){
        echo Html::a('Crear Aplicaciones', ['create'], ['class' => 'btn btn-success']);
        }
        else {
          $this->redirect(['site/error']);

        }
        if (SiteController::findCom(9)) {
          $view = '{view}';
        } else {
          $view = '';
        }
        if (SiteController::findCom(10)) {
          $update = '{update}';
        } else {
          $update = '';
        }
        // NOTE: se deshabilita, aunque en la tabla Rolintecoma está que es para deshabilitar la aplicación
        // if (SiteController::findCom(11)) {
        //   $delete = '{delete}';
        // } else {
        //   $delete = '';
        // }
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

            // 'AppId',
            'AppNomb',
            'AppSigl',
            'AppVers',
            // 'AppDesc',
            'ESopId1',
            //'AppUrl',
            //'TiposId_fk1',
            //'TiposId_fk2',
            //'AppNumeDocuAdqu',
            //'AppValoAdqu',
            'AppFechAdqu',
            //'TiposId_fk3',
            //'AppNombProc',
            //'AppEnti',
            //'ESopId2',
            //'TiposId_fk4',
            //'UsuId_fk',
            //'AppAcueNiveServ',
            //'TiposId_fk5',
            //'AppFechPues',
            //'AppServPues',
            //'TiposId_fk6',
            //'TiposId_fk7',
            //'TiposId_fk8',
            //'AppVersServ',
            //'TiposId_fk9',
            //'AppOtroCual1',
            //'TiposId_fk10',
            //'AppOtroCual2',
            //'TiposId_fk11',
            //'TiposId_fk12',
            //'AppOtroCual3',
            //'TiposId_fk13',
            //'TiposId_fk14',
            //'AppOtroCual4',
            //'TiposId_fk15',
            //'TiposId_fk16',
            //'AppOtroCual10',
            //'TiposId_fk17',
            //'TiposId_fk18',
            //'AppOtroCual6',
            //'TiposId_fk19',
            //'AppCual',
            //'TiposId_fk20',
            //'AppDondUbic',
            //'AppTipoLice',
            //'AppNumeLice',
            //'TiposId_fk21',
            //'TiposId_fk22',
            //'TiposId_fk23',
            //'AppVersDist',
            //'TiposId_fk24',
            //'AppLengServ',
            //'AppVersApli',
            //'AppBibl',
            //'AppObse1',
            //'AppMane',
            //'AppVersBD',
            //'AppPuer1',
            //'AppObse2',
            //'AppTipoHard',
            //'AppProc',
            //'AppMemo',
            //'AppEspaDisc',
            //'AppObse3',
            //'AppDirec1',
            //'AppNombArch',
            //'AppVari',
            //'AppNombVari',
            //'AppDescPara',
            //'AppObse4',
            //'AppUrlFuen',
            //'AppServ',
            //'AppPuer2',
            //'AppDirec2',
            //'AppNombServBd',
            //'AppUsua',
            //'AppNombBd',
            //'AppRuta',
            //'AppEspaActu',
            //'AppProy',
            //'TiposId_fk25',
            //'AppOtroCual7',
            //'AppPoliBack',
            //'TiposId_fk26',
            //'TiposId_fk27',
            //'AppOtroCual8',
            //'TiposId_fk28',
            //'AppOtroCual9',
            //'AppCantLice',
            //'TiposId_fk29',
            //'TiposId_fk30',
            //'TiposId_fk31',
            //'TiposId_fk32',
            //'TiposId_fk33',
            //'TiposId_fk34',
            //'TiposId_fk35',
            //'TiposId_fk36',
            //'TiposId_fk37',
            //'TiposId_fk38',
            //'TiposId_fk39',
            //'TiposId_fk40',
            //'TiposId_fk41',
            //'TiposId_fk42',
            //'TiposId_fk43',
            //'TiposId_fk44',
            //'TiposId_fk45',
            //'TiposId_fk46',
            //'TiposId_fk47',
            //'TiposId_fk48',
            //'TiposId_fk49',
            //'TiposId_fk50',
            //'TiposId_fk51',
            //'TiposId_fk52',
            //'TiposId_fk53',
            //'TiposId_fk54',
            //'AppUbic',
            //'TiposId_fk55',
            //'AppUbicDocu',
            //'AppUbicUlti',
            //'AppObse7',
            //'AppFuncApru',

            // NOTE: Se elimina de 'template' el $delete
            ['class' => 'yii\grid\ActionColumn',
            'header'=>"Acciones",
             'template' => "$view $update"],

        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
