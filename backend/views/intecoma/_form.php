<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Interfaces;
use backend\models\Comandos;
/* @var $this yii\web\View */
/* @var $model backend\models\Intecoma */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="intecoma-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'INTEID')->textInput() ?> -->

    <?= $form->field($model, 'INTEID')->dropDownList(
            ArrayHelper::map( Interfaces::find()->asArray()->all(),'INTEID','INTENOM'),
            ['prompt'=>'-->Select Interfaz']
            );?>


    <!-- <?= $form->field($model, 'COMAID')->textInput() ?> -->

    <?= $form->field($model, 'COMAID')->dropDownList(
            ArrayHelper::map( Comandos::find()->asArray()->all(),'COMAID','COMANOM'),
            ['prompt'=>'-->Select Comando']
            );?>

    <?= $form->field($model, 'INTECOMADESC')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
