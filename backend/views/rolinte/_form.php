<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Intecoma;
use backend\models\Roles;
/* @var $this yii\web\View */
/* @var $model backend\models\Rolinte */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rolinte-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'INTECOMID')->textInput() ?> -->

    <?= $form->field($model, 'INTECOMID')->dropDownList(
            ArrayHelper::map( Intecoma::find()->asArray()->all(),'INTECOMID','INTECOMADESC'),
            ['prompt'=>'-->Select Intecoma']
            );?>

    <!-- <?= $form->field($model, 'ROLID')->textInput(['maxlength' => true]) ?> -->

    <?= $form->field($model, 'ROLID')->dropDownList(
            ArrayHelper::map( Roles::find()->asArray()->all(),'ROLID','ROLNOM'),
            ['prompt'=>'-->Select Rol']
            );?>

    <!-- <?= $form->field($model, 'ROLID')->textInput(['maxlength' => true]) ?> -->

    <?= $form->field($model, 'ROLINTEDESC')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
