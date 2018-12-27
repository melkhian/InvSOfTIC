<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Rolinte */

$this->title = 'Create Rolinte';
$this->params['breadcrumbs'][] = ['label' => 'Rolintes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rolinte-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
