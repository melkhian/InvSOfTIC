<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CambioalcanceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cambioalcance-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'CAlcId') ?>

    <?= $form->field($model, 'ProId_fk') ?>

    <?= $form->field($model, 'CAlcDesc') ?>

    <?= $form->field($model, 'CAlcFechApro') ?>

    <?= $form->field($model, 'CAlcFechInic') ?>

    <?php // echo $form->field($model, 'CAlcFechFina') ?>

    <?php // echo $form->field($model, 'CAlcFechSist') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
