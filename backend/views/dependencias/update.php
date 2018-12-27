<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Dependencias */

$this->title = 'Update Dependencias: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Dependencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->DEPID, 'url' => ['view', 'id' => $model->DEPID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dependencias-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
