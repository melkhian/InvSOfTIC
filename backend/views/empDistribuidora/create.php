<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\EmpDistribuidora */

$this->title = 'Create Emp Distribuidora';
$this->params['breadcrumbs'][] = ['label' => 'Emp Distribuidoras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emp-distribuidora-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
