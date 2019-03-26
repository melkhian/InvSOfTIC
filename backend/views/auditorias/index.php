<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
use backend\models\User;
use backend\models\Auditorias;
use kartik\export\ExportMenu;
use kartik\daterange\DateRangePicker;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\AuditoriasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Auditorias';
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
    // 'AudId',
    ['attribute'=>'UsuId_fk',
             'value'=> function($model){return $model->UsuId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'UsuId_fk', ArrayHelper::map(User::find()->all(), 'id', 'username'),['class'=>'form-control','prompt' => 'Seleccione el Cargo']),
            ],
    'AudMod',
    'AudAcci',
    'AudDatoAnte',
    'AudDatoDesp',
    'AudIp',
    'AudFechHora',
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
<div class="auditorias-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php
        if (SiteController::findCom(63)){
        echo Html::a('Crear Auditorias', ['create'], ['class' => 'btn btn-success']);
        }
        else {
          // $this->redirect(['site/error']);
        }
        if (SiteController::findCom(64)) {
          $view = '{view}';
        } else {
          $view = '';
        }
        if (SiteController::findCom(65)) {
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
        // 'format' => 'raw',
        'columns' => [
            ['class' => 'yii\grid\ActionColumn',
             'header'=>"Acciones",
             'template' => "$view $update {delete}"],
            // 'AudId',
            // 'UsuId_fk',
            ['attribute'=>'UsuId_fk',
             'value'=> function($model){return $model->UsuId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'UsuId_fk', ArrayHelper::map(User::find()->all(),'id','username'),['class'=>'form-control','prompt' => 'Seleccione el Tipo']),
            ],
            'AudAcci',
            // [
            // 'attribute' => 'AudDatoAnte',
            // 'label' => 'yourLabel',
            // 'value' => function($model) { return "Id =>"  . " " . $model->AudDatoAnte[0];},
            // ],
            'AudDatoAnte',
            'AudDatoDesp',
            'AudMod',
            // ['attribute'=>'AudMod',
            //  'value'=> function($model){return $model->AudMod();},
            //  'filter' => Html::activeDropDownList($searchModel, 'AudMod', ArrayHelper::map(Auditorias::find()->all(),'AudMod','AudMod'),['class'=>'form-control','prompt' => 'Seleccione el Tipo']),
            // ],
            //'AudIp',
            [
            'attribute' => 'AudFechHora',
            'value' => 'AudFechHora',
            'format'=>'raw',
            'options' => ['style' => 'width: 25%;'],
            'filter' => DateRangePicker::widget([
                'model' => $searchModel,
                'attribute' => 'AudFechHora',
                'useWithAddon'=>false,
                'convertFormat'=>true,
                'pluginOptions'=>[
                    'locale'=>['format'=>'Y-m-d h:i:A']
                ],
            ])
        ],
            // 'AudFechHora',



        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
