<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AppbasedatosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appbasedatos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'ABasId') ?>

    <?= $form->field($model, 'ABasMane') ?>

    <?= $form->field($model, 'ABasVersBD') ?>

    <?= $form->field($model, 'ABasPuer1') ?>

    <?= $form->field($model, 'ABasObse2') ?>

    <?php // echo $form->field($model, 'AppId_fk') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
