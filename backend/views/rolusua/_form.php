<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use backend\models\Roles;
use backend\models\User;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Rolusua */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rolusua-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'RolId_fk')->dropDownList(ArrayHelper::map(Roles::find()->all(),'RolId','RolNomb'), ['prompt'=> 'Seleccione el Rol'])?>

    <?= $form->field($model, 'UsuId_fk')->dropDownList(ArrayHelper::map(User::find()->all(),'id','email'), ['prompt'=> 'Seleccione el Usuario'])?>

    <?= $form->field($model, 'RUsuCadu')->widget( DatePicker::className(),
          	['name' => 'check_issue_date',
          	'value' => date('d-M-Y', strtotime('+2 days')),
          	'options' => ['placeholder' => 'Seleccione la fecha de Caducidad'],
          	'pluginOptions' => [
          	'format' => 'yyyy-mm-dd',
          	'todayHighlight' => true]]); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
