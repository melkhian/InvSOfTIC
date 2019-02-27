<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
// use kartik\alert\Alert;
 ?>
 <div class="user-change_password">

   <?php $form = ActiveForm::begin(); ?>

   <?= $form->field($user, 'currentPassword')->passwordInput() ?>

   <?= $form->field($user, 'newPassword')->passwordInput() ?>

   <?= $form->field($user, 'newPasswordConfirm')->passwordInput() ?>

   <div class="form-group">
       <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
   </div>

   <?php ActiveForm::end(); ?>

 </div>
