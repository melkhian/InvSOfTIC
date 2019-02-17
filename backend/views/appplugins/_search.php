<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AppPluginsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="app-plugins-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'APluId') ?>

    <?= $form->field($model, 'APluNomb') ?>

    <?= $form->field($model, 'APluLice') ?>

    <?= $form->field($model, 'ApluDesc') ?>

    <?= $form->field($model, 'AppId_fk') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
