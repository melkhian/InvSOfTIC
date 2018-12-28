<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\EmpDistribuidora */

$this->title = 'Update Emp Distribuidora: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Emp Distribuidoras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->EDisId, 'url' => ['view', 'id' => $model->EDisId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="emp-distribuidora-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
