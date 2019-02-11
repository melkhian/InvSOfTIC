<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Auditorias */

$this->title = 'Actualizar Auditorias:';
$this->params['breadcrumbs'][] = ['label' => 'Auditorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->AudId, 'url' => ['view', 'id' => $model->AudId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="auditorias-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
