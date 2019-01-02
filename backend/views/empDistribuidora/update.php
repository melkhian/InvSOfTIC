<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Empdistribuidora */

$this->title = 'Update Empdistribuidora: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Empdistribuidoras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->EDisId, 'url' => ['view', 'id' => $model->EDisId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="empdistribuidora-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
