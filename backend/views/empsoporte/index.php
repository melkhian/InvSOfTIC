<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\EmpsoporteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Empresas de Soporte';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empsoporte-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php
        if (SiteController::findCom(21)) {
        echo Html::a('Crear Empresa de Soporte', ['create'], ['class' => 'btn btn-success']);
        }
        else {
          $this->redirect(['site/error']);
        }
        if (SiteController::findCom(22)) {
          $view = '{view}';
        } else {
          $view = '';
        }
        if (SiteController::findCom(23)) {
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

            'ESopId',
            'ESopNit',
            'ESopNomb',
            'ESopDire',
            'ESopCont',
            //'ESopTele',
            //'ESopCorr',

            ['class' => 'yii\grid\ActionColumn',
             'template' => "$view $update"],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
