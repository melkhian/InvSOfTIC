<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Apparchivos */

$this->title = 'Create Apparchivos';
$this->params['breadcrumbs'][] = ['label' => 'Apparchivos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apparchivos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
