<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Cambioalcance */

$this->title = 'Update Cambioalcance: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Cambioalcances', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CAlcId, 'url' => ['view', 'id' => $model->CAlcId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cambioalcance-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
