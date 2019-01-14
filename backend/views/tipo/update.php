<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Tipo */

$this->title = 'Actualizar Tipo: '. $model->TipoDesc;
$this->params['breadcrumbs'][] = ['label' => 'Tipo', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->TipoId, 'url' => ['view', 'id' => $model->TipoId]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="tipo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
