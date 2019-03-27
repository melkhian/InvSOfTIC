<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Appdependencias */

$this->title = 'Crear Aplicativo por Dependencia';
$this->params['breadcrumbs'][] = ['label' => 'Aplicativo por Dependencia', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appdependencias-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
