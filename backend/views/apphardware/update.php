<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Apphardware */

$this->title = 'Update Apphardware: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Apphardwares', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->AHarId, 'url' => ['view', 'id' => $model->AHarId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="apphardware-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
