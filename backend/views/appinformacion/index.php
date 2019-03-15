<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\AppinformacionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Appinformacions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appinformacion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Appinformacion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'AInfId',
            'AInfNombServBd',
            'AInfUsua',
            'AInfNombBd',
            'AInfRuta',
            //'AInfEspaActu',
            //'AInfProy',
            //'TiposId_fk25',
            //'AInfOtroCual25',
            //'AInfPoliBack',
            //'TiposId_fk26',
            //'TiposId_fk27',
            //'AInfOtroCual27',
            //'TiposId_fk28',
            //'AInfOtroCual28',
            //'AInfCantLice',
            //'AppId_fk',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
