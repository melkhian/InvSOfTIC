<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Appdependencias */

$this->title = 'Update Appdependencias: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Appdependencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ADepId, 'url' => ['view', 'id' => $model->ADepId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="appdependencias-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
