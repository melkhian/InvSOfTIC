<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AppPlugins */

$this->title = 'Update App Plugins: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'App Plugins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->APluId, 'url' => ['view', 'id' => $model->APluId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="app-plugins-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
