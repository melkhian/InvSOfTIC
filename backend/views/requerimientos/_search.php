<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RequerimientosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="requerimientos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'ReqId') ?>

    <?= $form->field($model, 'AppId_fk') ?>

    <?= $form->field($model, 'ReqDesc') ?>

    <?= $form->field($model, 'TiposId_fk1') ?>

    <?= $form->field($model, 'UsuId_fk') ?>

    <?php // echo $form->field($model, 'Tiposid_fk2') ?>

    <?php // echo $form->field($model, 'TiposId_fk3') ?>

    <?php // echo $form->field($model, 'ReqFechTomaRequ') ?>

    <?php // echo $form->field($model, 'ReqFechSist') ?>

    <?php // echo $form->field($model, 'TiposId_fk4') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
