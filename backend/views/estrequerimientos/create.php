<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Estrequerimientos */

$this->title = 'Crear Estado de Requerimiento';
$this->params['breadcrumbs'][] = ['label' => 'Estados de Requerimiento', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estrequerimientos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
