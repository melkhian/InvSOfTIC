<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Dependencias */

$this->title = 'Actualizar Dependencias';
$this->params['breadcrumbs'][] = ['label' => 'Dependencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->DepId, 'url' => ['view', 'id' => $model->DepId]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="dependencias-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
