<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Appmodulos */

$this->title = 'Actualizar Módulo por Aplicación: ' . $model->AModNomb;
$this->params['breadcrumbs'][] = ['label' => 'Módulo por Aplicación', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->AModId, 'url' => ['view', 'id' => $model->AModId]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="appmodulos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
