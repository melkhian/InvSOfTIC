<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Intecoma */

$this->title = 'Actualizar Interfaz por Comando';
$this->params['breadcrumbs'][] = ['label' => 'Intecomas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IcomId, 'url' => ['view', 'id' => $model->IcomId]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="intecoma-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
