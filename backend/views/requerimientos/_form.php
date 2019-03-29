<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Aplicaciones;
use backend\models\User;
use backend\models\Tipos;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;
use yii\bootstrap\Tabs;

/* @var $this yii\web\View */
/* @var $model backend\models\Requerimientos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="requerimientos-form">

    <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?= Tabs::widget([
            'items' => [
                [

                    'label' => 'Requerimiento',
                    'content' => $this->render('Tabs/requerimiento', ['model' => $model, 'form' => $form]),
                ],
                [

                    'label' => 'Versión',
                    'content' => $this->render('Tabs/version', ['model' => $model,'modelsVersdocrequerimientos' => $modelsVersdocrequerimientos, 'form' => $form]),
                ],
                [

                    'label' => 'Estado',
                    'content' => $this->render('Tabs/estado', ['model' => $model,'modelsEstrequerimientos' => $modelsEstrequerimientos, 'form' => $form]),
                ],

            ]]);
     ?>


    <?php ActiveForm::end(); ?>

</div>
