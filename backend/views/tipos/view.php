<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Tipos */

$this->title = $model->TiposId;
$this->params['breadcrumbs'][] = ['label' => 'Tipos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->TiposId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->TiposId], [
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
            'TiposId',
            'TipoId_fk',
            'TiposDesc',
            'TiposValo',
        ],
    ]) ?>

</div>
