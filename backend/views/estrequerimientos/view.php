<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Estrequerimientos */

$this->title = $model->EReqId;
$this->params['breadcrumbs'][] = ['label' => 'Estrequerimientos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estrequerimientos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->EReqId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->EReqId], [
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
            'EReqId',
            'ReqId_fk',
            'TiposId_fk',
            'EReqEsta',
            'EReqFech',
            'EReqFechSist',
        ],
    ]) ?>

</div>
