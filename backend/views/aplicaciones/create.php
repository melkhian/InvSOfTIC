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

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
