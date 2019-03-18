<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Appaplicaciones */

$this->title = 'Create Appaplicaciones';
$this->params['breadcrumbs'][] = ['label' => 'Appaplicaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appaplicaciones-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
