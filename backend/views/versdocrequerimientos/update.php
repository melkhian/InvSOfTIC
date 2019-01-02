<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Versdocrequerimientos */

$this->title = 'Update Versdocrequerimientos: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Versdocrequerimientos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->VDReqId, 'url' => ['view', 'id' => $model->VDReqId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="versdocrequerimientos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
