<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\EstrequerimientosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Estrequerimientos';
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
            'ReqId_fk',
            'TiposId_fk',
            'EReqEsta',
            'EReqFech',
            //'EReqFechSist',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
