<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Rolintecoma */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rolintecoma-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'RolId_fk')->textInput() ?>

    <?= $form->field($model, 'IComid_fk')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
