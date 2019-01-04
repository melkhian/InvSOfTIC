<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Roles;
use backend\models\Intecoma;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Rolintecoma */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rolintecoma-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'RolId_fk')->dropDownList(ArrayHelper::map(Roles::find()->all(),'RolId','RolNomb'), ['prompt'=> 'Seleccione el Rol'])?>

    <?= $form->field($model, 'IComid_fk')->dropDownList(ArrayHelper::map(Intecoma::find()->all(),'IcomId','IcomFunc'), ['prompt'=> 'Seleccione el Rol'])?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
