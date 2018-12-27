<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Comandos */

$this->title = 'Update Comandos: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Comandos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->COMAID, 'url' => ['view', 'id' => $model->COMAID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="comandos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
