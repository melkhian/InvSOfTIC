<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\EmpdistribuidoraSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Empresas Distribuidoras';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empdistribuidora-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php
        if (SiteController::findCom(18)){
        echo Html::a('Crear Empresa Distribuidora', ['create'], ['class' => 'btn btn-success']);
        }
        else {
          // $this->redirect(['site/error']);
        }
        if (SiteController::findCom(19)) {
          $view = '{view}';
        } else {
          $view = '';
        }
        if (SiteController::findCom(20)) {
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

            'EDisId',
            'EDisNit',
            'EDisNomb',
            'EDisDire',
            'EDisCont',
            //'EDisTele',
            //'EDisCorr',
            //'TiposId_fk',

            ['class' => 'yii\grid\ActionColumn',
             'template' => "$view $update"],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
