<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Interfaces */

$this->title = 'Update Interfaces: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Interfaces', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IntId, 'url' => ['view', 'id' => $model->IntId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="interfaces-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
