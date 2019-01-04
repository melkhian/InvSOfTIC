<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Empsoporte */

$this->title = 'Actualizar Empresa de Soporte';
$this->params['breadcrumbs'][] = ['label' => 'Empsoportes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ESopId, 'url' => ['view', 'id' => $model->ESopId]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="empsoporte-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
