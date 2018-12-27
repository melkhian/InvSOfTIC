<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TiposSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tipos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'TIPOSID') ?>

    <?= $form->field($model, 'TIPOID') ?>

    <?= $form->field($model, 'TIPOSDESC') ?>

    <?= $form->field($model, 'TIPOSVALOR') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
