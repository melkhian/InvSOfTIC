<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Tipo */

$this->title = 'Create Tipo';
$this->params['breadcrumbs'][] = ['label' => 'Tipo', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
