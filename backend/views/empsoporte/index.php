<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\EmpsoporteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Empresas de Soporte';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empsoporte-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Empresa de Soporte', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ESopId',
            'ESopNit',
            'ESopNomb',
            'ESopDire',
            'ESopCont',
            //'ESopTele',
            //'ESopCorr',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
