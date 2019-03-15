<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Appbasedatos */

$this->title = 'Create Appbasedatos';
$this->params['breadcrumbs'][] = ['label' => 'Appbasedatos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appbasedatos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
