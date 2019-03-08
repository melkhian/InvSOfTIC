<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Appinformacion */

$this->title = 'Update Appinformacion: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Appinformacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->AInfId, 'url' => ['view', 'id' => $model->AInfId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="appinformacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
