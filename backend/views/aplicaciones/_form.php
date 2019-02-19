<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Tabs;
use yii\helpers\ArrayHelper;
use backend\models\Tipos;
use wbraganca\dynamicform\DynamicFormWidget;

/* @var $this yii\web\View */
/* @var $model backend\models\Aplicaciones */
/* @var $form yii\widgets\ActiveForm */
?>
<!-- INICIO INCLUDE para mostrar u ocultar los campos dependientes cuando se selecciona Otro en las opciones de los checkBoxList -->
<?php include 'otros.php';?>
<!-- FIN INCLUDE -->
<body onload="Init()"></body>

<div class="aplicaciones-form">

    <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>
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

                // NOTE: label 'VII' contiene un modelo extra, esto es para generar el modelo 1:N
                [
                    'label' => 'VII',
                    'content' => $this->render('datosApp', ['model' => $model, 'modelsAppmodulos' => $modelsAppmodulos, 'form' => $form]),
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

                // NOTE: label 'XII' contiene un modelo extra, esto es para generar el modelo 1:N
                [
                    'label' => 'XII',
                    'content' => $this->render('appPlugins', ['model' => $model, 'modelsAppplugins' => $modelsAppplugins, 'form' => $form]),
                ],

                // NOTE: label 'XIII' contiene un modelo extra, esto es para generar el modelo 1:N
                [
                    'label' => 'XIII',
                    'content' => $this->render('appDirectorios', ['model' => $model, 'modelsAppdirectorios' => $modelsAppdirectorios, 'form' => $form]),
                ],

                // NOTE: label 'XIV' contiene un modelo extra, esto es para generar el modelo 1:N
                [
                    'label' => 'XIV',
                    'content' => $this->render('appUsuarios', ['model' => $model, 'modelsAppusuarios' => $modelsAppusuarios, 'form' => $form]),
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
