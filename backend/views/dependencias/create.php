<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Dependencias */

$this->title = 'Crear Dependencia';
$this->params['breadcrumbs'][] = ['label' => 'Dependencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dependencias-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
