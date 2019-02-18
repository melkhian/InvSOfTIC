<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Appparametros */

$this->title = 'Update Appparametros: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Appparametros', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->AParId, 'url' => ['view', 'id' => $model->AParId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="appparametros-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
