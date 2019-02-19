<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Appusuarios */

$this->title = 'Update Appusuarios: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Appusuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->AUsuId, 'url' => ['view', 'id' => $model->AUsuId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="appusuarios-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
