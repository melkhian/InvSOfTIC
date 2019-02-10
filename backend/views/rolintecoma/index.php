<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\Roles;
use backend\models\Intecoma;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\RolintecomaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rol por Funcionalidad';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rolintecoma-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php
        if (SiteController::findCom(42)) {
        echo Html::a('Crear Rol por Funcionalidad', ['create'], ['class' => 'btn btn-success']);
        }
        else {
          // $this->redirect(['site/error']);
        }
        if (SiteController::findCom(43)) {
          $view = '{view}';
        } else {
          $view = '';
        }
        if (SiteController::findCom(44)) {
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

            'RIComId',
            ['attribute'=>'RolId_fk',
             'value'=> function($model){return $model->RolId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'RolId_fk', ArrayHelper::map(Roles::find()->all(),'RolId','RolNomb'),['class'=>'form-control','prompt' => 'Seleccione el Rol']),
            ],
            ['attribute'=>'IComid_fk',
             'value'=> function($model){return $model->IComid_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'IComid_fk', ArrayHelper::map(Intecoma::find()->all(),'IcomId','IcomFunc'),['class'=>'form-control','prompt' => 'Seleccione la Funcionalidad']),
            ],
            ['class' => 'yii\grid\ActionColumn',
             'template' => "$view $update"],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
