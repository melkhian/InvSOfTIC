<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ProyectosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proyectos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'ProId') ?>

    <?= $form->field($model, 'ProNomb') ?>

    <?= $form->field($model, 'ProDesc') ?>

    <?= $form->field($model, 'ProObje') ?>

    <?= $form->field($model, 'UsuId_fk') ?>

    <?php // echo $form->field($model, 'Tiposid_fk1') ?>

    <?php // echo $form->field($model, 'ProFechApro') ?>

    <?php // echo $form->field($model, 'ProDocu') ?>

    <?php // echo $form->field($model, 'ProFechInic') ?>

    <?php // echo $form->field($model, 'ProFechFina') ?>

    <?php // echo $form->field($model, 'TiposId_fk2') ?>

    <?php // echo $form->field($model, 'ProFinProy') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
