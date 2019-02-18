<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Apparchivos */

$this->title = $model->AArcId;
$this->params['breadcrumbs'][] = ['label' => 'Apparchivos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apparchivos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->AArcId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->AArcId], [
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
            'AArcId',
            'AArcNombArch',
            'AArcVari',
            'AArcNombVari',
            'AArcDescPara',
            'AppId_fk',
        ],
    ]) ?>

</div>
