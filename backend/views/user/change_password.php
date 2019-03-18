<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
// use kartik\alert\Alert;
$this->title = 'Actualizar contraseña de Usuario';
// $this->params['breadcrumbs'][] = ['label' => 'Inicio', 'url' => ['site/index']];
// $this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar contraseña de Usuario';
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
