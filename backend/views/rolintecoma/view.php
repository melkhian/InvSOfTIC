<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Rolintecoma */

$this->title = $model->RIComId;
$this->params['breadcrumbs'][] = ['label' => 'Rolintecomas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rolintecoma-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->RIComId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->RIComId], [
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
            'RIComId',
            'RolId_fk',
            'IComid_fk',
        ],
    ]) ?>

</div>
