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

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'auth_key') ?>

    <?= $form->field($model, 'password_hash') ?>

    <?= $form->field($model, 'password_reset_token') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'usuiden') ?>

    <?php // echo $form->field($model, 'usuprimnomb') ?>

    <?php // echo $form->field($model, 'ususegunomb') ?>

    <?php // echo $form->field($model, 'usuprimapel') ?>

    <?php // echo $form->field($model, 'ususeguapel') ?>

    <?php // echo $form->field($model, 'usutelepers') ?>

    <?php // echo $form->field($model, 'usuteleofic') ?>

    <?php // echo $form->field($model, 'depid_fk') ?>

    <?php // echo $form->field($model, 'tiposid_fk1') ?>

    <?php // echo $form->field($model, 'tiposid_fk2') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
