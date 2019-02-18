<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Appparametros */

$this->title = $model->AParId;
$this->params['breadcrumbs'][] = ['label' => 'Appparametros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appparametros-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->AParId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->AParId], [
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
            'AParId',
            'AParUrlFuen',
            'AParServ',
            'AParPuer',
            'AParDirec',
            'AppId_fk',
        ],
    ]) ?>

</div>
