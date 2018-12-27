<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Rolinte */

$this->title = 'Update Rolinte:';
$this->params['breadcrumbs'][] = ['label' => 'Rolintes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ROLINTEID, 'url' => ['view', 'id' => $model->ROLINTEID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rolinte-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
