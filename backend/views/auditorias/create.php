<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Auditorias */

$this->title = 'Crear Auditorias';
$this->params['breadcrumbs'][] = ['label' => 'Auditorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auditorias-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
