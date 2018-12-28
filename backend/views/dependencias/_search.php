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

    <?= $form->field($model, 'DepId') ?>

    <?= $form->field($model, 'DepNomb') ?>

    <?= $form->field($model, 'DepEnca') ?>

    <?= $form->field($model, 'TiposId_fk1') ?>

    <?= $form->field($model, 'DepTele') ?>

    <?php // echo $form->field($model, 'DepDire') ?>

    <?php // echo $form->field($model, 'TiposId_fk2') ?>

    <?php // echo $form->field($model, 'DepCorr') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
