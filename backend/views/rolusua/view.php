<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Rolusua */

$this->title = $model->RUsuId;
$this->params['breadcrumbs'][] = ['label' => 'Rol por Usuario', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rolusua-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->RUsuId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->RUsuId], [
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
            'RUsuId',
            'RolId_fk',
            'UsuId_fk',
            'RUsuCadu',
        ],
    ]) ?>

</div>
