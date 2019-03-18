<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Aplicaciones */

$this->title = 'Actualizar Aplicaciones: ' . $model->AppNomb;
$this->params['breadcrumbs'][] = ['label' => 'Aplicaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->AppNomb, 'url' => ['view', 'id' => $model->AppId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="aplicaciones-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelsAppmodulos' => $modelsAppmodulos,
        'modelsAppplugins' => $modelsAppplugins,
        'modelsAppdirectorios' => $modelsAppdirectorios,
        'modelsAppusuarios' => $modelsAppusuarios,
        'modelsApparchivos' => $modelsApparchivos,
        'modelsAppparametros' => $modelsAppparametros,
        'modelsAppaceptacion' => $modelsAppaceptacion,
        'modelsAppinteractua' => $modelsAppinteractua,
        'modelsAppinformacion' => $modelsAppinformacion,
        'modelsAppaplicaciones' => $modelsAppaplicaciones,
        'modelsAppbasedatos' => $modelsAppbasedatos,
        'modelsApphardware' => $modelsApphardware,
    ]) ?>

</div>
