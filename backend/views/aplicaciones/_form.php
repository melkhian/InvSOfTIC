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
    <?= Tabs::widget([
            'items' => [
                [
                    'label' => 'Datos Generales',
                    'content' => $this->render('datos', ['model' => $model, 'form' => $form]),
                    'active' => true
                ],
                [
                    'label' => 'Población Objetivo',
                    'content' => $this->render('poblacion', ['model' => $model, 'form' => $form]),
                ],
                [
                    'label' => 'Soporte del Desarrollador',
                    'content' => $this->render('soporte', ['model' => $model, 'form' => $form]),
                ],
                [
                    'label' => 'Soporte Funcional Interno',
                    'content' => $this->render('soporteInterno', ['model' => $model, 'form' => $form]),
                ],
                [
                    'label' => 'Acuerdo de Niveles de Servicio',
                    'content' => $this->render('acuerdos', ['model' => $model, 'form' => $form]),
                ],
                [
                    'label' => 'Datos Básicos Aplicación',
                    'content' => $this->render('datosApp', ['model' => $model, 'form' => $form]),
                ],
                [
                    'label' => 'Requerimientos de Software para el Servidor',
                    'content' => $this->render('reqSoftware', ['model' => $model, 'form' => $form]),
                ],
                [
                    'label' => 'Requerimientos de Hardware para el Servidor',
                    'content' => $this->render('reqHardware', ['model' => $model, 'form' => $form]),
                ],
                [
                    'label' => 'Archivos de Configuración',
                    'content' => $this->render('archConfiguracion', ['model' => $model, 'form' => $form]),
                ],
                [
                    'label' => 'Parámetros de Configuración',
                    'content' => $this->render('paraConfiguracion', ['model' => $model, 'form' => $form]),
                ],
                [
                    'label' => 'Información de Base de Datos Asociada/s a la aplicación',
                    'content' => $this->render('infoBase', ['model' => $model, 'form' => $form]),
                ],

                [
                    'label' => 'Documentación',
                    'content' => $this->render('documentacion', ['model' => $model, 'form' => $form]),
                ],
                [
                    'label' => 'Aceptación',
                    'content' => $this->render('funcAprueba', ['model' => $model, 'form' => $form]),
                ],
            ]]);
     ?>

    <?php ActiveForm::end(); ?>

</div>
