<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Appmodulos */

$this->title = 'Update Appmodulos: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Appmodulos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->AModId, 'url' => ['view', 'id' => $model->AModId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="appmodulos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
