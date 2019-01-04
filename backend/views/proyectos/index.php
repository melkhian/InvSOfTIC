<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\User;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProyectosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Proyectos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proyectos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Proyecto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ProId',
            'ProNomb',
            'ProDesc',
            'ProObje',
            ['attribute'=>'UsuId_fk',
             'value'=> function($model){return $model->UsuId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'UsuId_fk', ArrayHelper::map(User::find()->all(),'id','username'),['class'=>'form-control','prompt' => 'Seleccione el Usuario']),
            ],
            //'Tiposid_fk1',
            //'ProFechApro',
            //'ProDocu',
            //'ProFechInic',
            //'ProFechFina',
            //'TiposId_fk2',
            //'ProFinProy',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
