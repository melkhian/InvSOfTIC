<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Rolusua */

$this->title = 'Actualizar Rol por Usuario';
$this->params['breadcrumbs'][] = ['label' => 'Rolusuas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->RUsuId, 'url' => ['view', 'id' => $model->RUsuId]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="rolusua-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
