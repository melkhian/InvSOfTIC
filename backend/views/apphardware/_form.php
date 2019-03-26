<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Apphardware */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="apphardware-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'AHarTipoHard')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AHarProc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AHarMemo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AHarEspaDisc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AHarObse')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppId_fk')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
