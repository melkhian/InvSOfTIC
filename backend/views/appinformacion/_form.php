<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Appinformacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appinformacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'AInfNombServBd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AInfUsua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AInfNombBd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AInfRuta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AInfEspaActu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AInfProy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk25')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AInfOtroCual25')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AInfPoliBack')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk26')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk27')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AInfOtroCual27')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk28')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AInfOtroCual28')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AInfCantLice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppId_fk')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
