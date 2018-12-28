<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Proyectos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proyectos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ProNomb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProDesc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProObje')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UsuId_fk')->textInput() ?>

    <?= $form->field($model, 'Tiposid_fk1')->textInput() ?>

    <?= $form->field($model, 'ProFechApro')->textInput() ?>

    <?= $form->field($model, 'ProDocu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProFechInic')->textInput() ?>

    <?= $form->field($model, 'ProFechFina')->textInput() ?>

    <?= $form->field($model, 'TiposId_fk2')->textInput() ?>

    <?= $form->field($model, 'ProFinProy')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
