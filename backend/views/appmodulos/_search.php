<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AppmodulosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appmodulos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'AModId') ?>

    <?= $form->field($model, 'AppId_fk') ?>

    <?= $form->field($model, 'AModNomb') ?>

    <?= $form->field($model, 'AModDesc') ?>

    <?= $form->field($model, 'TiposId_fk') ?>

    <?php // echo $form->field($model, 'AModObse') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
