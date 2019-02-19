<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Appdirectorios */

$this->title = 'Update Appdirectorios: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Appdirectorios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ADirId, 'url' => ['view', 'id' => $model->ADirId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="appdirectorios-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
