<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\CambioalcanceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cambioalcances';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cambioalcance-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cambioalcance', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CAlcId',
            'ProId_fk',
            'CAlcDesc',
            'CAlcFechApro',
            'CAlcFechInic',
            //'CAlcFechFina',
            //'CAlcFechSist',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
