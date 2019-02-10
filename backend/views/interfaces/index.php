<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\InterfacesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Interfaces';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="interfaces-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php
        if (SiteController::findCom(54)) {
          echo Html::a('Crear Interfaz', ['create'], ['class' => 'btn btn-success']);
          }
          else {
            // $this->redirect(['site/error']);
          }
          if (SiteController::findCom(55)) {
            $view = '{view}';
          } else {
            $view = '';
          }
          if (SiteController::findCom(56)) {
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

            'IntId',
            'IntNomb',
            'IntDesc',

            ['class' => 'yii\grid\ActionColumn',
             'template' => "$view $update"],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
