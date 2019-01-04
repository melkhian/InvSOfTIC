<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\Interfaces;
use backend\models\Comandos;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\IntecomaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Intecomas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="intecoma-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Intecoma', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IcomId',
            ['attribute'=>'IntiId_fk',
             'value'=> function($model){return $model->IntiId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'IntiId_fk', ArrayHelper::map(Interfaces::find()->all(),'IntId','IntNomb'),['class'=>'form-control','prompt' => 'Seleccione la Interfaz']),
            ],
            ['attribute'=>'ComId_fk',
             'value'=> function($model){return $model->ComId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'ComId_fk', ArrayHelper::map(Comandos::find()->all(),'ComId','ComNomb'),['class'=>'form-control','prompt' => 'Seleccione el Comando']),
            ],
            'IcomFunc',
            'IcomDesc',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
