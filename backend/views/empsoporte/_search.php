<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\EmpsoporteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="empsoporte-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'ESopId') ?>

    <?= $form->field($model, 'ESopNit') ?>

    <?= $form->field($model, 'ESopNomb') ?>

    <?= $form->field($model, 'ESopDire') ?>

    <?= $form->field($model, 'ESopCont') ?>

    <?php // echo $form->field($model, 'TiposId_fk1') ?>

    <?php // echo $form->field($model, 'ESopTelePers') ?>

    <?php // echo $form->field($model, 'ESopTeleOfic') ?>

    <?php // echo $form->field($model, 'ESopCorr') ?>

    <?php // echo $form->field($model, 'TiposId_fk2') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
