<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
use backend\models\Tipos;
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
          if (SiteController::findCom(66)) {
            $enable = '{enable}';
          } else {
            $enable = '';
          }
          ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],

            // 'ParId',
            'ParHead',
            'ParFoot',
            'ParMult',
            'ParFall',
            // NOTE: $model->TiposId_fk() esta función se encuentra en el modelo de Parámetros
            ['attribute'=>'TiposId_fk',
            'headerOptions' => ['style' => 'color:#337ab7'],
            'header' => 'Estado del Aplicativo '.Html::tag('span', '<small>
                        <span class="fa fa-info-circle" tool-tip-toggle="tooltip-demo"</span>
                        </small>',
                        [
                            'title'=>'Opción para Habilitar/Inhabilitar el acceso de Usuarios al Aplicativo, solo los Usuarios tipo SUPERUSER pueden ingresar aún si está Inhabilitado',
                            'data-toggle'=>'tooltip',
                            'style'=>'text-decoration: underline; cursor:pointer;'
                        ]),
             'value'=> function($model){return $model->TiposId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'TiposId_fk',
             ArrayHelper::map(Tipos::find()->where('tipoid_fk = 51')->all(),'TiposId','TiposDesc'),['class'=>'form-control','prompt' => 'Seleccione el Estado']),
            ],


            'ParNemo',
            'ParTiemExpi',

            ['class' => 'yii\grid\ActionColumn',
             'header'=>"Acciones",
             'template' => "$view $update $enable"],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
