<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Versdocrequerimientos */

$this->title = 'Create Versión de Requerimiento';
$this->params['breadcrumbs'][] = ['label' => 'Versión de Requerimiento', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="versdocrequerimientos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
