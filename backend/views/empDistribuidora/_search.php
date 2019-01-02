<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\EmpdistribuidoraSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="empdistribuidora-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'EDisId') ?>

    <?= $form->field($model, 'EDisNit') ?>

    <?= $form->field($model, 'EDisNomb') ?>

    <?= $form->field($model, 'EDisDire') ?>

    <?= $form->field($model, 'EDisCont') ?>

    <?php // echo $form->field($model, 'EDisTele') ?>

    <?php // echo $form->field($model, 'EDisCorr') ?>

    <?php // echo $form->field($model, 'TiposId_fk') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
