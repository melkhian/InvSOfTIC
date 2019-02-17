<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\ParametrosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Parametros';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parametros-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php

        if (SiteController::findCom(60)) {
          echo Html::a('Create Parametros', ['create'], ['class' => 'btn btn-success']);
          }
          else {
            // $this->redirect(['site/error']);
          }
          if (SiteController::findCom(61)) {
            $view = '{view}';
          } else {
            $view = '';
          }
          if (SiteController::findCom(62)) {
            $update = '{update}';
          } else {
            $update = '';
          } 
          ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ParId',
            'ParHead',
            'ParFoot',
            'ParMult',
            'ParFall',
            //'TiposId_fk',
            //'ParNemo',
            'ParTiemExpi',

            ['class' => 'yii\grid\ActionColumn',
             'template' => "$view $update"],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
