<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Appinteractua */

$this->title = 'Create Appinteractua';
$this->params['breadcrumbs'][] = ['label' => 'Appinteractuas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appinteractua-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
