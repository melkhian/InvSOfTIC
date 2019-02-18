<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Apparchivos */

$this->title = 'Update Apparchivos: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Apparchivos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->AArcId, 'url' => ['view', 'id' => $model->AArcId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="apparchivos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
