<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Intecoma */

$this->title = 'Crear Interfaz por Comando';
$this->params['breadcrumbs'][] = ['label' => 'Intecomas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="intecoma-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
