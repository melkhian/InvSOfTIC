<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Versdocrequerimientos */

$this->title = 'Create Versdocrequerimientos';
$this->params['breadcrumbs'][] = ['label' => 'Versdocrequerimientos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="versdocrequerimientos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
