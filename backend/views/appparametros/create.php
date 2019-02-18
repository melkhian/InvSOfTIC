<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Appparametros */

$this->title = 'Create Appparametros';
$this->params['breadcrumbs'][] = ['label' => 'Appparametros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appparametros-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
