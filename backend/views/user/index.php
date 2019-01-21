<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\controllers\SiteController;
use backend\models\Tipos;
use backend\models\Dependencias;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <p>
        <?php
        if (SiteController::findCom(1)) {
          echo Html::a('Crear Usuario', ['registro/registro'], ['class' => 'btn btn-success']);
          // echo SiteController::header();
        }
        else {
          // code...
        }
        if (SiteController::findCom(2)) {
          $view = '{view}';
        } else {
          $view = '';
        }
        if (SiteController::findCom(3)) {
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

            'id',
            'usuiden',
            'usuprimnomb',
            'ususegunomb',
            'usuprimapel',
            //'ususeguapel',
            //'usutelepers',
            'username',
            //'usuteleofic',
            //'email:email',
            ['attribute'=>'depid_fk',
             'value'=> function($model){return $model->depid_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'depid_fk', ArrayHelper::map(Dependencias::find()->all(),'DepId','DepNomb'),['class'=>'form-control','prompt' => 'Seleccione el Tipo']),
            ],
            // 'depid_fk',
            ['attribute'=>'tiposid_fk1',
             'value'=> function($model){return $model->tiposid_fk1();},
             'filter' => Html::activeDropDownList($searchModel, 'tiposid_fk1', ArrayHelper::map(Tipos::find()->where('tipoid_fk = 1')->all(),'TiposId','TiposDesc'),['class'=>'form-control','prompt' => 'Seleccione el Tipo']),
            ],
            // 'tiposid_fk1',
            ['attribute'=>'status',
             'value'=> function($model){return $model->status();},
             'filter' => Html::activeDropDownList($searchModel, 'status', ArrayHelper::map(Tipos::find()->where('tipoid_fk = 3')->all(),'TiposId','TiposDesc'),['class'=>'form-control','prompt' => 'Seleccione el Tipo']),
            ],
            //'tiposid_fk2',
            // 'status',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn',
             'template' => "$view $update"],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
