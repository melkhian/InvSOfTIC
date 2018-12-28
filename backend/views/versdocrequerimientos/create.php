<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\VersDocRequerimientos */

$this->title = 'Create Vers Doc Requerimientos';
$this->params['breadcrumbs'][] = ['label' => 'Vers Doc Requerimientos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vers-doc-requerimientos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
