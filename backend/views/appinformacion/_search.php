<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AppinformacionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appinformacion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'AInfId') ?>

    <?= $form->field($model, 'AInfNombServBd') ?>

    <?= $form->field($model, 'AInfUsua') ?>

    <?= $form->field($model, 'AInfNombBd') ?>

    <?= $form->field($model, 'AInfRuta') ?>

    <?php // echo $form->field($model, 'AInfEspaActu') ?>

    <?php // echo $form->field($model, 'AInfProy') ?>

    <?php // echo $form->field($model, 'TiposId_fk25') ?>

    <?php // echo $form->field($model, 'AInfOtroCual25') ?>

    <?php // echo $form->field($model, 'AInfPoliBack') ?>

    <?php // echo $form->field($model, 'TiposId_fk26') ?>

    <?php // echo $form->field($model, 'TiposId_fk27') ?>

    <?php // echo $form->field($model, 'AInfOtroCual27') ?>

    <?php // echo $form->field($model, 'TiposId_fk28') ?>

    <?php // echo $form->field($model, 'AInfOtroCual28') ?>

    <?php // echo $form->field($model, 'AInfCantLice') ?>

    <?php // echo $form->field($model, 'AppId_fk') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
