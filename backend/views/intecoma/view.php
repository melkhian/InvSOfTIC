<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Intecoma */

$this->title = $model->INTECOMID;
$this->params['breadcrumbs'][] = ['label' => 'Intecomas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="intecoma-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->INTECOMID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->INTECOMID], [
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
            
            'INTECOMID',
            'INTEID',
            'COMAID',
            'INTECOMADESC',
        ],
    ]) ?>

</div>
