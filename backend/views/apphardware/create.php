<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Apphardware */

$this->title = 'Create Apphardware';
$this->params['breadcrumbs'][] = ['label' => 'Apphardwares', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apphardware-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
