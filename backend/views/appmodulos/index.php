<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\Aplicaciones;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\AppmodulosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Appmodulos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appmodulos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Appmodulos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'AModId',
            ['attribute'=>'AppId_fk',
             'value'=> function($model){return $model->AppId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'AppId_fk', ArrayHelper::map(Aplicaciones::find()->all(),'AppId','AppNomb'),['class'=>'form-control','prompt' => 'Seleccione el Aplicativo']),
            ],
            'AModDesc',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
