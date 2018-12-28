<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\UserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'usuiden') ?>

    <?= $form->field($model, 'usuprimnomb') ?>

    <?= $form->field($model, 'ususegunomb') ?>

    <?= $form->field($model, 'usuprimapel') ?>

    <?php // echo $form->field($model, 'ususeguapel') ?>

    <?php // echo $form->field($model, 'usutelepers') ?>

    <?php // echo $form->field($model, 'username') ?>

    <?php // echo $form->field($model, 'usuteleofic') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'depid_fk') ?>

    <?php // echo $form->field($model, 'tiposid_fk1') ?>

    <?php // echo $form->field($model, 'tiposid_fk2') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'auth_key') ?>

    <?php // echo $form->field($model, 'password_hash') ?>

    <?php // echo $form->field($model, 'password_reset_token') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
