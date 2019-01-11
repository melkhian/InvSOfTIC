<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\Requerimientos;
use backend\models\Tipos;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\EstrequerimientosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Estados de Requerimientos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estrequerimientos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Estado de Requerimiento', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'EReqId',
            ['attribute'=>'ReqId_fk',
             'value'=> function($model){return $model->ReqId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'ReqId_fk', ArrayHelper::map(Requerimientos::find()->all(),'ReqId','ReqDesc'),['class'=>'form-control','prompt' => 'Seleccione el Requerimiento']),
            ],
            ['attribute'=>'TiposId_fk',
             'value'=> function($model){return $model->TiposId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'TiposId_fk', ArrayHelper::map(Tipos::find()->where('tipoid_fk = 19')->all(),'TiposId','TiposDesc'),['class'=>'form-control','prompt' => 'Seleccione el Estado']),
            ],
            'EReqEsta',
            'EReqFech',
            //'EReqFechSist',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
