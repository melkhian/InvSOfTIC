<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Interfaces */

$this->title = $model->INTEID;
$this->params['breadcrumbs'][] = ['label' => 'Interfaces', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="interfaces-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->INTEID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->INTEID], [
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
            'INTEID',
            'INTENOM',
            'INTEDESC',
        ],
    ]) ?>

</div>
