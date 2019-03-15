<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Appinformacion */

$this->title = $model->AInfId;
$this->params['breadcrumbs'][] = ['label' => 'Appinformacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appinformacion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->AInfId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->AInfId], [
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
            'AInfId',
            'AInfNombServBd',
            'AInfUsua',
            'AInfNombBd',
            'AInfRuta',
            'AInfEspaActu',
            'AInfProy',
            'TiposId_fk25',
            'AInfOtroCual25',
            'AInfPoliBack',
            'TiposId_fk26',
            'TiposId_fk27',
            'AInfOtroCual27',
            'TiposId_fk28',
            'AInfOtroCual28',
            'AInfCantLice',
            'AppId_fk',
        ],
    ]) ?>

</div>
