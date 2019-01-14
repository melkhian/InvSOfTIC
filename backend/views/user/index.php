<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\controllers\SiteController;
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
          echo Html::a('Crear Usuario', ['create'], ['class' => 'btn btn-success']);
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
          $view = '';
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
            //'username',
            //'usuteleofic',
            //'email:email',
            //'depid_fk',
            //'tiposid_fk1',
            //'tiposid_fk2',
            //'status',
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
