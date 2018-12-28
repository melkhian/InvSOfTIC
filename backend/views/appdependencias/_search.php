<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AppdependenciasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appdependencias-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'ADepId') ?>

    <?= $form->field($model, 'DepId_fk') ?>

    <?= $form->field($model, 'AppId_fk') ?>

    <?= $form->field($model, 'ADepCantUsua') ?>

    <?= $form->field($model, 'ADepFechSist') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
