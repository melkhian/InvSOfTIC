<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Rolusua */

$this->title = 'Crear Rol por Usuario';
$this->params['breadcrumbs'][] = ['label' => 'Rol por Usuario', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rolusua-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
