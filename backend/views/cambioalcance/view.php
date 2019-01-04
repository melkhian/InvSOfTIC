<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Cambioalcance */

$this->title = $model->CAlcId;
$this->params['breadcrumbs'][] = ['label' => 'Cambio de Alcances', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cambioalcance-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->CAlcId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->CAlcId], [
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
            'CAlcId',
            'ProId_fk',
            'CAlcDesc',
            'CAlcFechApro',
            'CAlcFechInic',
            'CAlcFechFina',
            'CAlcFechSist',
        ],
    ]) ?>

</div>
