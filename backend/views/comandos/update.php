<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Comandos */

$this->title = 'Actualizar Comando: '. $model->ComNomb;
$this->params['breadcrumbs'][] = ['label' => 'Comandos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ComId, 'url' => ['view', 'id' => $model->ComId]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="comandos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
