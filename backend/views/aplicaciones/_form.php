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
                    'content' => $this->render('Tabs/datos', ['model' => $model, 'form' => $form]),
                    'active' => true,
                ],
                [
                    'label' => 'II',
                    'content' => $this->render('Tabs/poblacion', ['model' => $model, 'form' => $form]),
                ],
                [
                    'label' => 'III',
                    'content' => $this->render('Tabs/soporte', ['model' => $model, 'form' => $form]),
                ],
                [
                    'label' => 'IV',
                    'content' => $this->render('Tabs/soporteInterno', ['model' => $model, 'form' => $form]),
                ],
                [
                    'label' => 'Acuerdo de Niveles de Servicio',
                    'content' => $this->render('Tabs/acuerdos', ['model' => $model, 'form' => $form]),
                ],

                // NOTE: label 'VII' contiene un modelo extra, esto es para generar el modelo 1:N
                [
                    'label' => 'VII',
                    'content' => $this->render('Tabs/datosApp', ['model' => $model, 'modelsAppmodulos' => $modelsAppmodulos, 'form' => $form]),
                ],
                [
                    'label' => 'VIII',
                    'content' => $this->render('Tabs/reqSoftware', ['model' => $model, 'form' => $form]),
                ],
                [
                    'label' => 'IX',
                    'content' => $this->render('Tabs/reqHardware', ['model' => $model, 'form' => $form]),
                ],
                [
                    'label' => 'X',
                    'content' => $this->render('Tabs/archConfiguracion', ['model' => $model, 'modelsApparchivos' => $modelsApparchivos, 'form' => $form]),
                ],
                [
                    'label' => 'VIII',
                    'content' => $this->render('Tabs/paraConfiguracion', ['model' => $model, 'modelsAppparametros' => $modelsAppparametros, 'form' => $form]),
                ],
                [
                    'label' => 'XI',
                    'content' => $this->render('Tabs/infoBase', ['model' => $model, 'form' => $form]),
                ],

                // NOTE: label 'XII' contiene un modelo extra, esto es para generar el modelo 1:N
                [
                    'label' => 'XII',
                    'content' => $this->render('Tabs/appPlugins', ['model' => $model, 'modelsAppplugins' => $modelsAppplugins, 'form' => $form]),
                ],

                // NOTE: label 'XIII' contiene un modelo extra, esto es para generar el modelo 1:N
                [
                    'label' => 'XIII',
                    'content' => $this->render('Tabs/appDirectorios', ['model' => $model, 'modelsAppdirectorios' => $modelsAppdirectorios, 'form' => $form]),
                ],

                // NOTE: label 'XIV' contiene un modelo extra, esto es para generar el modelo 1:N
                [
                    'label' => 'XIV',
                    'content' => $this->render('Tabs/appUsuarios', ['model' => $model, 'modelsAppusuarios' => $modelsAppusuarios, 'form' => $form]),
                ],

                [
                    'label' => 'XV',
                    'content' => $this->render('Tabs/documentacion', ['model' => $model, 'form' => $form]),
                ],
                [
                    'label' => 'XVI',
                    'content' => $this->render('Tabs/funcAprueba', ['model' => $model, 'form' => $form]),
                ],
            ]]);
     ?>

    <?php ActiveForm::end(); ?>

</div>
