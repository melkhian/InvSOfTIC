<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DependenciasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dependencias-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'DEPID') ?>

    <?= $form->field($model, 'DEPNOMBENT') ?>

    <?= $form->field($model, 'DEPENCARGADO') ?>

    <?= $form->field($model, 'DEPCARGO') ?>

    <?= $form->field($model, 'DEPTELEFONO') ?>

    <?php // echo $form->field($model, 'DEPDIRECCION') ?>

    <?php // echo $form->field($model, 'DEPTIPO') ?>

    <?php // echo $form->field($model, 'DEPMAIL') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
