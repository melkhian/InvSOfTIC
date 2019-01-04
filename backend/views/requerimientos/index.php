<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\Proyectos;
use backend\models\User;
use backend\models\Tipos;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\RequerimientosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Requerimientos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="requerimientos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Requerimientos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ReqId',
            ['attribute'=>'ProId_fk',
             'value'=> function($model){return $model->ProId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'ProId_fk', ArrayHelper::map(Proyectos::find()->all(),'ProId','ProNomb'),['class'=>'form-control','prompt' => 'Seleccione el Proyecto']),
            ],
            'ReqDesc',
            ['attribute'=>'TiposId_fk1',
             'value'=> function($model){return $model->TiposId_fk1();},
             'filter' => Html::activeDropDownList($searchModel, 'TiposId_fk1', ArrayHelper::map(Tipos::find()->where('tipoid_fk = 13')->all(),'TiposId','TiposDesc'),['class'=>'form-control','prompt' => 'Seleccione el Tipo']),
            ],
            ['attribute'=>'UsuId_fk',
             'value'=> function($model){return $model->UsuId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'UsuId_fk', ArrayHelper::map(User::find()->all(),'id','username'),['class'=>'form-control','prompt' => 'Seleccione el Usuario']),
            ],
            //'Tiposid_fk2',
            //'TiposId_fk3',
            //'ReqFechTomaRequ',
            //'ReqFechSist',
            //'TiposId_fk4',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
