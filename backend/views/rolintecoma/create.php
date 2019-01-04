<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Rolintecoma */

$this->title = 'Crear Rol por Funcionalidad';
$this->params['breadcrumbs'][] = ['label' => 'Rol por Funcionalidad', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rolintecoma-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
