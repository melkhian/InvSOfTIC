<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\AppPlugins */

$this->title = $model->APluId;
$this->params['breadcrumbs'][] = ['label' => 'App Plugins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-plugins-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->APluId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->APluId], [
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
            'APluId',
            'APluNomb',
            'APluLice',
            'ApluDesc',
            'AppId_fk',
        ],
    ]) ?>

</div>
