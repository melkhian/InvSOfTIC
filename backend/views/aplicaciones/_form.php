<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Tabs;
use yii\helpers\ArrayHelper;
use backend\models\Tipos;

/* @var $this yii\web\View */
/* @var $model backend\models\Aplicaciones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aplicaciones-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>
    <?= Tabs::widget([
            'items' => [
                [
                    'label' => 'I',
                    'content' => $this->render('datos', ['model' => $model, 'form' => $form]),
                    'active' => true
                ],
                [
                    'label' => 'II',
                    'content' => $this->render('poblacion', ['model' => $model, 'form' => $form]),
                ],
                [
                    'label' => 'III',
                    'content' => $this->render('soporte', ['model' => $model, 'form' => $form]),
                ],
                [
                    'label' => 'IV',
                    'content' => $this->render('soporteInterno', ['model' => $model, 'form' => $form]),
                ],
                [
                    'label' => 'Acuerdo de Niveles de Servicio',
                    'content' => $this->render('acuerdos', ['model' => $model, 'form' => $form]),
                ],
                [
                    'label' => 'VII',
                    'content' => $this->render('datosApp', ['model' => $model, 'form' => $form]),
                ],
                [
                    'label' => 'VIII',
                    'content' => $this->render('reqSoftware', ['model' => $model, 'form' => $form]),
                ],
                [
                    'label' => 'IX',
                    'content' => $this->render('reqHardware', ['model' => $model, 'form' => $form]),
                ],
                [
                    'label' => 'X',
                    'content' => $this->render('archConfiguracion', ['model' => $model, 'form' => $form]),
                ],
                [
                    'label' => 'VIII',
                    'content' => $this->render('paraConfiguracion', ['model' => $model, 'form' => $form]),
                ],
                [
                    'label' => 'XI',
                    'content' => $this->render('infoBase', ['model' => $model, 'form' => $form]),
                ],

                [
                    'label' => 'XV',
                    'content' => $this->render('documentacion', ['model' => $model, 'form' => $form]),
                ],
                [
                    'label' => 'XVI',
                    'content' => $this->render('funcAprueba', ['model' => $model, 'form' => $form]),
                ],
            ]]);
     ?>

    <?php ActiveForm::end(); ?>

</div>
