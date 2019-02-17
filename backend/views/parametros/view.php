<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Parametros */

$this->title = $model->ParId;
$this->params['breadcrumbs'][] = ['label' => 'Parametros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parametros-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php 
        if (SiteController::findCom(62))
        echo Html::a('Actualizar', ['update', 'id' => $model->ParId], ['class' => 'btn btn-primary']) ?>
        <?php 
        // Html::a('Delete', ['delete', 'id' => $model->ParId], [
        //     'class' => 'btn btn-danger',
        //     'data' => [
        //         'confirm' => 'Are you sure you want to delete this item?',
        //         'method' => 'post',
        //     ],
        // ]) 
        ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ParId',
            'ParHead',
            'ParFoot',
            'ParMult',
            'ParFall',
            'TiposId_fk',
            'ParNemo',
            'ParTiemExpi',
        ],
    ]) ?>

</div>
