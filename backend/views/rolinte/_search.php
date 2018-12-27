<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RolinteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rolinte-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'ROLINTEID') ?>

    <?= $form->field($model, 'INTECOMID') ?>

    <?= $form->field($model, 'ROLID') ?>

    <?= $form->field($model, 'ROLINTEDESC') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
