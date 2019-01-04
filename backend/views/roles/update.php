<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Roles */

$this->title = 'Actualizar Rol';
$this->params['breadcrumbs'][] = ['label' => 'Roles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->RolId, 'url' => ['view', 'id' => $model->RolId]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="roles-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
