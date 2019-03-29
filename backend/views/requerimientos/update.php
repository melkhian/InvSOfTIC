<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Requerimientos */

$this->title = 'Actualizar Requerimiento';
$this->params['breadcrumbs'][] = ['label' => 'Requerimientos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ReqId, 'url' => ['view', 'id' => $model->ReqId]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="requerimientos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelsVersdocrequerimientos' => $modelsVersdocrequerimientos,
        'modelsEstrequerimientos' => $modelsEstrequerimientos,
    ]) ?>

</div>
