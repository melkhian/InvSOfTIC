<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ApphardwareSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="apphardware-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'AHarId') ?>

    <?= $form->field($model, 'AHarTipoHard') ?>

    <?= $form->field($model, 'AHarProc') ?>

    <?= $form->field($model, 'AHarMemo') ?>

    <?= $form->field($model, 'AHarEspaDisc') ?>

    <?php // echo $form->field($model, 'AHarObse') ?>

    <?php // echo $form->field($model, 'AppId_fk') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
