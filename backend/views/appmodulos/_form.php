<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Aplicaciones;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Appmodulos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appmodulos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'AppId_fk')->dropDownList(ArrayHelper::map(Aplicaciones::find()->all(),'AppId','AppNomb'), ['prompt'=> 'Seleccione la Aplicación'])?>

    <?= $form->field($model, 'AModDesc')->textarea(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
