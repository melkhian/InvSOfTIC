<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Tipos */

$this->title = 'Actualizar Tipos';
$this->params['breadcrumbs'][] = ['label' => 'Tipos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->TiposId, 'url' => ['view', 'id' => $model->TiposId]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="tipos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
