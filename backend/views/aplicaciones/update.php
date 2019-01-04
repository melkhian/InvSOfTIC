<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Aplicaciones */

$this->title = 'Actualizar Aplicación';
$this->params['breadcrumbs'][] = ['label' => 'Aplicaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->AppId, 'url' => ['view', 'id' => $model->AppId]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="aplicaciones-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
