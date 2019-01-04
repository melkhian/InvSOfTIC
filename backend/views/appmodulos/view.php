<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Appmodulos */

$this->title = $model->AModId;
$this->params['breadcrumbs'][] = ['label' => 'Módulos por Aplicativos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appmodulos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->AModId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->AModId], [
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
            'AModId',
            'AppId_fk',
            'AModDesc',
        ],
    ]) ?>

</div>
