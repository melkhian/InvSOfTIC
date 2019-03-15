<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Appaceptacion */

$this->title = 'Create Appaceptacion';
$this->params['breadcrumbs'][] = ['label' => 'Appaceptacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appaceptacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
