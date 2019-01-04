<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Empdistribuidora */

$this->title = 'Actualizar Empresas Distribuidoras';
$this->params['breadcrumbs'][] = ['label' => 'Empresas Distribuidoras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->EDisId, 'url' => ['view', 'id' => $model->EDisId]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="empdistribuidora-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
