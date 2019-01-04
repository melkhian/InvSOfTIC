<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Appmodulos */

$this->title = 'Crear Módulo por Aplicativo';
$this->params['breadcrumbs'][] = ['label' => 'Módulo por Aplicativo', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appmodulos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
