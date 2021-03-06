<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AppinteractuaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appinteractua-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'AIntId') ?>

    <?= $form->field($model, 'AIntOtroCual') ?>

    <?= $form->field($model, 'AppId_fk') ?>

    <?= $form->field($model, 'AppId_fk1') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
