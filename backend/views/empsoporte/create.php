<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Empsoporte */

$this->title = 'Crear Empresa de Soporte';
$this->params['breadcrumbs'][] = ['label' => 'Empresa de Soporte', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empsoporte-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
