<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\Proyectos;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\CambioalcanceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cambios de Alcances';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cambioalcance-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php
        if (SiteController::findCom(24)) {
        echo Html::a('Crear Cambio de Alcance', ['create'], ['class' => 'btn btn-success']);
        }
        else {
          // $this->redirect(['site/error']);
        }
        if (SiteController::findCom(25)) {
          $view = '{view}';
        } else {
          $view = '';
        }
        if (SiteController::findCom(26)) {
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
            // ['class' => 'yii\grid\SerialColumn'],

            // 'CAlcId',
            ['attribute'=>'ProId_fk',
             'value'=> function($model){return $model->ProId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'ProId_fk', ArrayHelper::map(Proyectos::find()->all(),'ProId','ProNomb'),['class'=>'form-control','prompt' => 'Seleccione el Proyecto']),
            ],
            'CAlcDesc',
            'CAlcFechApro',
            'CAlcFechInic',
            //'CAlcFechFina',
            //'CAlcFechSist',

            ['class' => 'yii\grid\ActionColumn',
             'header'=>"Acciones",
             'template' => "$view $update"],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
