<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Parametros */

$this->title = 'Crear Parámetros';
$this->params['breadcrumbs'][] = ['label' => 'Parametros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parametros-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
