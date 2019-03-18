<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Apphardware */

$this->title = $model->AHarId;
$this->params['breadcrumbs'][] = ['label' => 'Apphardwares', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apphardware-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->AHarId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->AHarId], [
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
            'AHarId',
            'AHarTipoHard',
            'AHarProc',
            'AHarMemo',
            'AHarEspaDisc',
            'AppId_fk',
        ],
    ]) ?>

</div>
