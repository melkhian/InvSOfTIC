<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Tipos */

$this->title = 'Update Tipos: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Tipos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->TIPOSID, 'url' => ['view', 'id' => $model->TIPOSID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
