<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ParametrosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="parametros-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'ParId') ?>

    <?= $form->field($model, 'ParHead') ?>

    <?= $form->field($model, 'ParFoot') ?>

    <?= $form->field($model, 'ParMult') ?>

    <?= $form->field($model, 'ParFall') ?>

    <?php // echo $form->field($model, 'TiposId_fk') ?>

    <?php // echo $form->field($model, 'ParNemo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
