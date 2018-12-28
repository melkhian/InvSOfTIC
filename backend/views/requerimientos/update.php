<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Requerimientos */

$this->title = 'Update Requerimientos: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Requerimientos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ReqId, 'url' => ['view', 'id' => $model->ReqId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="requerimientos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
