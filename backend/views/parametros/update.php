<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Parametros */

$this->title = 'Update Parametros: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Parametros', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ParId, 'url' => ['view', 'id' => $model->ParId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="parametros-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
