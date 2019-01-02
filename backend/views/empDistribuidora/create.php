<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Empdistribuidora */

$this->title = 'Create Empdistribuidora';
$this->params['breadcrumbs'][] = ['label' => 'Empdistribuidoras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empdistribuidora-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
