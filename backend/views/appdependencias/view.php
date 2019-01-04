<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Appdependencias */

$this->title = $model->ADepId;
$this->params['breadcrumbs'][] = ['label' => 'Aplicativo por Dependencia', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appdependencias-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->ADepId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ADepId], [
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
            'ADepId',
            'DepId_fk',
            'AppId_fk',
            'ADepCantUsua',
            'ADepFechSist',
        ],
    ]) ?>

</div>
