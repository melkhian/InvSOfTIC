<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AplicacionesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aplicaciones-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'AppId') ?>

    <?= $form->field($model, 'AppNomb') ?>

    <?= $form->field($model, 'AppDesc') ?>

    <?= $form->field($model, 'AppVers') ?>

    <?= $form->field($model, 'TiposId_fk1') ?>

    <?php // echo $form->field($model, 'AppNumeLice') ?>

    <?php // echo $form->field($model, 'TiposId_fk2') ?>

    <?php // echo $form->field($model, 'TiposId_fk3') ?>

    <?php // echo $form->field($model, 'EDDesId_fk') ?>

    <?php // echo $form->field($model, 'TiposId_fk4') ?>

    <?php // echo $form->field($model, 'TiposId_fk5') ?>

    <?php // echo $form->field($model, 'AppInteApp') ?>

    <?php // echo $form->field($model, 'ESopId_fk') ?>

    <?php // echo $form->field($model, 'TiposId_fk6') ?>

    <?php // echo $form->field($model, 'TiposId_fk7') ?>

    <?php // echo $form->field($model, 'AppVersBD') ?>

    <?php // echo $form->field($model, 'AppBaseDato') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
