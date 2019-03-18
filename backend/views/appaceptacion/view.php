<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Appaceptacion */

$this->title = $model->AAceId;
$this->params['breadcrumbs'][] = ['label' => 'Appaceptacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appaceptacion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->AAceId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->AAceId], [
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
            'AAceId',
            'AAceNomb',
            'AAceCarg',
            'AAceArea',
            'AppId_fk',
        ],
    ]) ?>

</div>
