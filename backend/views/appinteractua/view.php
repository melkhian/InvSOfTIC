<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Appinteractua */

$this->title = $model->AIntId;
$this->params['breadcrumbs'][] = ['label' => 'Appinteractuas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appinteractua-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->AIntId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->AIntId], [
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
            'AIntId',
            'AIntOtroCual',
            'AppId_fk',
            'AppId_fk1',
        ],
    ]) ?>

</div>
