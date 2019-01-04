<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\User;
use backend\models\Tipos;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Proyectos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proyectos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ProNomb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProDesc')->textarea(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProObje')->textarea(['maxlength' => true]) ?>

    <?= $form->field($model, 'UsuId_fk')->dropDownList(ArrayHelper::map(User::find()->all(),'id','email'), ['prompt'=> 'Seleccione el Usuario'])?>

    <?= $form->field($model, 'Tiposid_fk1')->dropDownList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 17')->all(),'TiposId','TiposDesc'), ['prompt'=> 'Seleccione la Respuesta'])?>

    <?= $form->field($model, 'ProFechApro')->widget( DatePicker::className(),
            ['name' => 'check_issue_date',
            'value' => date('d-M-Y', strtotime('+2 days')),
            'options' => ['placeholder' => 'Seleccione la fecha de Caducidad'],
            'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true]]);
     ?>

    <?= $form->field($model, 'ProDocu')->textarea(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProFechInic')->widget( DatePicker::className(),
            ['name' => 'check_issue_date',
            'value' => date('d-M-Y', strtotime('+2 days')),
            'options' => ['placeholder' => 'Seleccione la fecha de Caducidad'],
            'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true]]);
     ?>

     <?= $form->field($model, 'ProFechFina')->widget( DatePicker::className(),
             ['name' => 'check_issue_date',
             'value' => date('d-M-Y', strtotime('+2 days')),
             'options' => ['placeholder' => 'Seleccione la fecha de Caducidad'],
             'pluginOptions' => [
             'format' => 'yyyy-mm-dd',
             'todayHighlight' => true]]);
      ?>

    <?= $form->field($model, 'TiposId_fk2')->dropDownList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 18')->all(),'TiposId','TiposDesc'), ['prompt'=> 'Seleccione el Estado del Proyecto'])?>

    <?= $form->field($model, 'ProFinProy')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
