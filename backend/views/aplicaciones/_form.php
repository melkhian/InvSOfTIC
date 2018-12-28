<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Aplicaciones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aplicaciones-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'AppNomb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppDesc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppVers')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk1')->textInput() ?>

    <?= $form->field($model, 'AppNumeLice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk2')->textInput() ?>

    <?= $form->field($model, 'TiposId_fk3')->textInput() ?>

    <?= $form->field($model, 'EDDesId_fk')->textInput() ?>

    <?= $form->field($model, 'TiposId_fk4')->textInput() ?>

    <?= $form->field($model, 'TiposId_fk5')->textInput() ?>

    <?= $form->field($model, 'AppInteApp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ESopId_fk')->textInput() ?>

    <?= $form->field($model, 'TiposId_fk6')->textInput() ?>

    <?= $form->field($model, 'TiposId_fk7')->textInput() ?>

    <?= $form->field($model, 'AppVersBD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppBaseDato')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
