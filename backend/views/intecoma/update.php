<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Intecoma */

$this->title = 'Update Intecoma: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Intecomas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->INTECOMID, 'url' => ['view', 'id' => $model->INTECOMID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="intecoma-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
