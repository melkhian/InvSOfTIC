<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\AppPlugins */

$this->title = 'Create App Plugins';
$this->params['breadcrumbs'][] = ['label' => 'App Plugins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-plugins-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
