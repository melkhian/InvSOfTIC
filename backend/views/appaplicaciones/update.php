<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Appaplicaciones */

$this->title = 'Update Appaplicaciones: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Appaplicaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->AAplId, 'url' => ['view', 'id' => $model->AAplId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="appaplicaciones-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
