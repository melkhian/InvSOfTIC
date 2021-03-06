<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AuditoriasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="auditorias-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'AudId') ?>

    <?= $form->field($model, 'UsuId_fk') ?>

    <?= $form->field($model, 'AudMod') ?>

    <?= $form->field($model, 'AudAcci') ?>

    <?= $form->field($model, 'AudDatoAnte') ?>

    <?php // echo $form->field($model, 'AudDatoDesp') ?>

    <?php // echo $form->field($model, 'AudIp') ?>

    <?php // echo $form->field($model, 'AudFechHora') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
