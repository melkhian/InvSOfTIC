<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\Requerimientos;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\VersdocrequerimientosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Versiones de Requerimientos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="versdocrequerimientos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php
        if (SiteController::findCom(30)) {
        echo Html::a('Crear Versión de Requerimiento', ['create'], ['class' => 'btn btn-success']);
        }
        else {
          // $this->redirect(['site/error']);
        }
        if (SiteController::findCom(31)) {
          $view = '{view}';
        } else {
          $view = '';
        }
        if (SiteController::findCom(32)) {
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

            'VDReqId',
            ['attribute'=>'ReqId_fk',
             'value'=> function($model){return $model->ReqId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'ReqId_fk', ArrayHelper::map(Requerimientos::find()->all(),'ReqId','ReqDesc'),['class'=>'form-control','prompt' => 'Seleccione el Requerimiento']),
            ],
            'VDReqDocu',
            'VDReqFechSist',

            ['class' => 'yii\grid\ActionColumn',
             'template' => "$view $update"],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
