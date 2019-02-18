<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Aplicaciones */

$this->title = 'Crear Aplicaciones';
$this->params['breadcrumbs'][] = ['label' => 'Aplicaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aplicaciones-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // NOTE: Se agregan modelos extra para los formatos 1:N ?>

    <?= $this->render('_form', [
        'model' => $model,
        'modelsAppmodulos' => $modelsAppmodulos,
        'modelsAppplugins' => $modelsAppplugins,
        'modelsAppdirectorios' => $modelsAppdirectorios,
        'modelsAppusuarios' => $modelsAppusuarios,
    ]) ?>

</div>
