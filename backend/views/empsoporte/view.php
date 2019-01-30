<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Empsoporte */

$this->title = $model->ESopId;
$this->params['breadcrumbs'][] = ['label' => 'Empsoportes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empsoporte-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ESopId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ESopId], [
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
            'ESopId',
            'ESopNit',
            'ESopNomb',
            'ESopDire',
            'ESopCont',
            'UsuId_fk',
            'ESopTelePers',
            'ESopTeleOfic',
            'ESopCorr',
            'TiposId_fk',
        ],
    ]) ?>

</div>
