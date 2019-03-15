<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Appinteractua */

$this->title = 'Update Appinteractua: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Appinteractuas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->AIntId, 'url' => ['view', 'id' => $model->AIntId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="appinteractua-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
