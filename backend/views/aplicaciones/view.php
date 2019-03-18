<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Tabs;
use yii\helpers\ArrayHelper;
use backend\models\Tipos;
use wbraganca\dynamicform\DynamicFormWidget;

// NOTE: Dentro de los TABS hay checkbox, estos deben de configurarce en Aplicaciones (Modelo) y AplicacionesController, por medio de implode y explode. Esto es para
// Guardarlos como arreglo en la BD

/* @var $this yii\web\View */
/* @var $model backend\models\Aplicaciones */
/* @var $form yii\widgets\ActiveForm */
$this->title = $model->AppNomb;
$this->params['breadcrumbs'][] = ['label' => 'Aplicaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- INICIO INCLUDE para mostrar u ocultar los campos dependientes cuando se selecciona Otro en las opciones de los checkBoxList -->
<?php include 'otros.php';?>
<!-- FIN INCLUDE -->
<body onload="Init()"></body>

<div class="aplicaciones-form">

  <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(['id' => 'dynamic-form', 'options' => ['enctype' => 'multipart/form-data']]); ?>
    <div class="form-group">

    </div>
    <?= Tabs::widget([
            'items' => [
                [
                    'label' => 'Datos',
                    'content' => $this->render('TabsView/datos', ['model' => $model, 'form' => $form]),
                    'active' => true,
                ],
                [
                    'label' => 'Población',
                    'content' => $this->render('TabsView/poblacion', ['model' => $model, 'form' => $form]),
                ],
                [
                    'label' => 'Sop. Desarrollador',
                    'content' => $this->render('TabsView/soporte', ['model' => $model, 'form' => $form]),
                ],
                [
                    'label' => 'Sop. Interno',
                    'content' => $this->render('TabsView/soporteInterno', ['model' => $model, 'form' => $form]),
                ],
                [
                    'label' => 'Acuerdo',
                    'content' => $this->render('TabsView/acuerdos', ['model' => $model, 'form' => $form]),
                ],

                // NOTE: label 'VII' contiene modelos extra, esto es para generar los modelos 1:N
                [
                    'label' => 'Datos Aplicación',
                    'content' => $this->render('TabsView/datosApp', ['model' => $model, 'modelsAppmodulos' => $modelsAppmodulos, 'modelsAppinteractua' => $modelsAppinteractua, 'form' => $form]),
                ],
                [
                // NOTE: label 'VIII' contiene modelos extra, esto es para generar los modelos 1:N
                    'label' => 'Req. Software',
                    'content' => $this->render('TabsView/reqSoftware', ['model' => $model,'modelsAppaplicaciones' => $modelsAppaplicaciones, 'modelsAppbasedatos' => $modelsAppbasedatos, 'form' => $form]),
                ],
                [
                    'label' => 'Req. Hardware',
                    'content' => $this->render('TabsView/reqHardware', ['model' => $model, 'modelsApphardware' => $modelsApphardware, 'form' => $form]),
                ],
                [
                    'label' => 'Archivos',
                    'content' => $this->render('TabsView/archConfiguracion', ['model' => $model, 'modelsApparchivos' => $modelsApparchivos, 'form' => $form]),
                ],
                [
                    'label' => 'Parámetros',
                    'content' => $this->render('TabsView/paraConfiguracion', ['model' => $model, 'modelsAppparametros' => $modelsAppparametros, 'form' => $form]),
                ],
                // NOTE: label 'XI' contiene un modelo extra, esto es para generar el modelo 1:N
                [
                    'label' => 'Info. BD',
                    'content' => $this->render('TabsView/infoBase', ['model' => $model, 'modelsAppinformacion' => $modelsAppinformacion, 'form' => $form]),
                ],

                // NOTE: label 'XII' contiene un modelo extra, esto es para generar el modelo 1:N
                [
                    'label' => 'Plugins',
                    'content' => $this->render('TabsView/appPlugins', ['model' => $model, 'modelsAppplugins' => $modelsAppplugins, 'form' => $form]),
                ],

                // NOTE: label 'XIII' contiene un modelo extra, esto es para generar el modelo 1:N
                [
                    'label' => 'Directorios',
                    'content' => $this->render('TabsView/appDirectorios', ['model' => $model, 'modelsAppdirectorios' => $modelsAppdirectorios, 'form' => $form]),
                ],

                // NOTE: label 'XIV' contiene un modelo extra, esto es para generar el modelo 1:N
                [
                    'label' => 'Usuarios',
                    'content' => $this->render('TabsView/appUsuarios', ['model' => $model, 'modelsAppusuarios' => $modelsAppusuarios, 'form' => $form]),
                ],

                [
                    'label' => 'Documentación',
                    'content' => $this->render('TabsView/documentacion', ['model' => $model, 'form' => $form]),
                ],

                // NOTE: label 'XVI' contiene un modelo extra, esto es para generar el modelo 1:N
                [
                    'label' => 'Aceptación',
                    'content' => $this->render('TabsView/funcAprueba', ['model' => $model, 'modelsAppaceptacion' => $modelsAppaceptacion, 'form' => $form]),
                ],
            ]]);
     ?>

    <?php ActiveForm::end(); ?>

</div>
