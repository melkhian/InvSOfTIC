<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\Tipos;
use yii\helpers\ArrayHelper;
use backend\controllers\SiteController;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\DependenciasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dependencias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dependencias-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php
        if (SiteController::findCom(5)) {
        echo Html::a('Crear Dependencia', ['create'], ['class' => 'btn btn-success']);
        }
        else {
          // code...
        }
        if (SiteController::findCom(6)) {
          $view = '{view}';
        } else {
          $view = '';
        }
        if (SiteController::findCom(7)) {
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
            ['class' => 'yii\grid\SerialColumn'],
            'DepId',
            'DepNomb',
            'DepEnca',
            ['attribute'=>'TiposId_fk1',
             'value'=> function($model){return $model->TiposId_fk1();},
             'filter' => Html::activeDropDownList($searchModel, 'TiposId_fk1', ArrayHelper::map(Tipos::find()->where('tipoid_fk = 1')->asArray()->all(), 'TiposId', 'TiposDesc'),['class'=>'form-control','prompt' => 'Seleccione el Cargo']),
            ],
            'DepTele',
            //'DepDire',
            //'TiposId_fk2',
            //'DepCorr',

            ['class' => 'yii\grid\ActionColumn',
             'template' => "$view $update"],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
