<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\VersDocRequerimientos */

$this->title = 'Update Vers Doc Requerimientos: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Vers Doc Requerimientos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->VDReqId, 'url' => ['view', 'id' => $model->VDReqId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vers-doc-requerimientos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
