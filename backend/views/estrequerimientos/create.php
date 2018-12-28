<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Estrequerimientos */

$this->title = 'Create Estrequerimientos';
$this->params['breadcrumbs'][] = ['label' => 'Estrequerimientos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estrequerimientos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
