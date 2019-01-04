<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Aplicaciones */

$this->title = $model->AppId;
$this->params['breadcrumbs'][] = ['label' => 'Aplicaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aplicaciones-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->AppId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->AppId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'AppId',
            'AppNomb',
            'AppDesc',
            'AppVers',
            'TiposId_fk1',
            'AppNumeLice',
            'TiposId_fk2',
            'TiposId_fk3',
            'EDDesId_fk',
            'TiposId_fk4',
            'TiposId_fk5',
            'AppInteApp',
            'ESopId_fk',
            'TiposId_fk6',
            'TiposId_fk7',
            'AppVersBD',
            'AppBaseDato',
        ],
    ]) ?>

</div>
