<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Appbasedatos */

$this->title = 'Update Appbasedatos: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Appbasedatos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ABasId, 'url' => ['view', 'id' => $model->ABasId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="appbasedatos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
