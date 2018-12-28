<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\EmpDistribuidora */

$this->title = $model->EDisId;
$this->params['breadcrumbs'][] = ['label' => 'Emp Distribuidoras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emp-distribuidora-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->EDisId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->EDisId], [
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
            'EDisId',
            'EDisNit',
            'EDisNomb',
            'EDisDire',
            'EDisCont',
            'EDisTele',
            'EDisCorr',
            'TiposId_fk',
        ],
    ]) ?>

</div>
