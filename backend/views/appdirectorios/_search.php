<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AppdirectoriosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appdirectorios-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'ADirId') ?>

    <?= $form->field($model, 'ADirDirec') ?>

    <?= $form->field($model, 'ADirDesc') ?>

    <?= $form->field($model, 'AppId_fk') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
