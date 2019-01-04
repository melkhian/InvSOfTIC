<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\Tipo;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\TiposSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Tipos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'TiposId',
            ['attribute'=>'TipoId_fk',
             'value'=> function($model){return $model->TipoId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'TipoId_fk', ArrayHelper::map(Tipo::find()->all(),'TipoId','TipoDesc'),['class'=>'form-control','prompt' => 'Seleccione el Tipo']),
            ],
            'TiposDesc',
            'TiposValo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
