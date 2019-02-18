<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Appusuarios */

$this->title = 'Create Appusuarios';
$this->params['breadcrumbs'][] = ['label' => 'Appusuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appusuarios-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
