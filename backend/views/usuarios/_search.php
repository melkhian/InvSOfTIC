<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\UsuariosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuarios-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'USUID') ?>

    <?= $form->field($model, 'USUNOMB1') ?>

    <?= $form->field($model, 'USUNOMB2') ?>

    <?= $form->field($model, 'USUAPEL1') ?>

    <?= $form->field($model, 'USUAPEL2') ?>

    <?php // echo $form->field($model, 'USUIDEN') ?>

    <?php // echo $form->field($model, 'USUCARG') ?>

    <?php // echo $form->field($model, 'USUCORR') ?>

    <?php // echo $form->field($model, 'USUTELEPERS') ?>

    <?php // echo $form->field($model, 'USUTELEOFIC') ?>

    <?php // echo $form->field($model, 'USUESTA') ?>

    <?php // echo $form->field($model, 'USUCONT') ?>

    <?php // echo $form->field($model, 'DEPID') ?>

    <?php // echo $form->field($model, 'AUTHKEY') ?>

    <?php // echo $form->field($model, 'ACCESSTOKEN') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
