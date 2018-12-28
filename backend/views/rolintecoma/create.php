<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Rolintecoma */

$this->title = 'Create Rolintecoma';
$this->params['breadcrumbs'][] = ['label' => 'Rolintecomas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rolintecoma-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
