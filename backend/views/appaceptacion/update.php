<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Appaceptacion */

$this->title = 'Update Appaceptacion: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Appaceptacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->AAceId, 'url' => ['view', 'id' => $model->AAceId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="appaceptacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
