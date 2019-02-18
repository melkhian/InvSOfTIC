<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Appdirectorios */

$this->title = 'Create Appdirectorios';
$this->params['breadcrumbs'][] = ['label' => 'Appdirectorios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appdirectorios-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
