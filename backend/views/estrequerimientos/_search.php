<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\EstrequerimientosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="estrequerimientos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'EReqId') ?>

    <?= $form->field($model, 'ReqId_fk') ?>

    <?= $form->field($model, 'TiposId_fk') ?>

    <?= $form->field($model, 'EReqEsta') ?>

    <?= $form->field($model, 'EReqFech') ?>

    <?php // echo $form->field($model, 'EReqFechSist') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
