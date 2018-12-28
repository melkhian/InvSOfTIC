<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\EmpDistribuidoraSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Emp Distribuidoras';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emp-distribuidora-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Emp Distribuidora', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'EDisId',
            'EDisNit',
            'EDisNomb',
            'EDisDire',
            'EDisCont',
            //'EDisTele',
            //'EDisCorr',
            //'TiposId_fk',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
