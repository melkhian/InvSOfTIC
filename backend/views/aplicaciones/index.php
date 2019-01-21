<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\Empdistribuidora;
use backend\models\Empsoporte;

use backend\controllers\SiteController;

use backend\controllers\AplicacionesController;

use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\AplicacionesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Aplicaciones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aplicaciones-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php

        if (SiteController::findCom(8)){

        // if (AplicacionesController::findCom(8)){

          // if ($this->context->findVar(1)){
          echo Html::a('Crear Aplicación', ['create'], ['class' => 'btn btn-success']);
        }
        else {
          $this->redirect(['site/error']);
        }
        ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'AppId',
            'AppNomb',
            //'AppDesc',
            'AppVers',
            //'TiposId_fk1',
            //'AppNumeLice',
            //'TiposId_fk2',
            //'TiposId_fk3',
            ['attribute'=>'EDDesId_fk',
             'value'=> function($model){return $model->EDDesId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'EDDesId_fk', ArrayHelper::map(Empdistribuidora::find()->all(),'EDisId','EDisNomb'),['class'=>'form-control','prompt' => 'Seleccione Empresa Distribuidora']),
            ],
            //'TiposId_fk4',
            //'TiposId_fk5',
            //'AppInteApp',
            ['attribute'=>'ESopId_fk',
             'value'=> function($model){return $model->ESopId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'ESopId_fk', ArrayHelper::map(Empsoporte::find()->all(),'ESopId','ESopNomb'),['class'=>'form-control','prompt' => 'Seleccione Empresa Soporte']),
            ],
            //'TiposId_fk6',
            //'TiposId_fk7',
            //'AppVersBD',
            //'AppBaseDato',

            ['class' => 'yii\grid\ActionColumn',
             'template' => '{view} {update}'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
