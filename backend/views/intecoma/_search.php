<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\IntecomaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="intecoma-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'IcomId') ?>

    <?= $form->field($model, 'IntiId_fk') ?>

    <?= $form->field($model, 'ComId_fk') ?>

    <?= $form->field($model, 'IcomFunc') ?>

    <?= $form->field($model, 'IcomDesc') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
