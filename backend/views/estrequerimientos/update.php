<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Estrequerimientos */

$this->title = 'Update Estrequerimientos: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Estrequerimientos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->EReqId, 'url' => ['view', 'id' => $model->EReqId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="estrequerimientos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
