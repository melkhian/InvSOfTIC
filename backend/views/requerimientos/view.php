<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Tipos;
use backend\models\User;
use backend\models\Aplicaciones;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;
use yii\bootstrap\Tabs;

/* @var $this yii\web\View */
/* @var $model backend\models\Requerimientos */

$this->title = $model->ReqId;
$this->params['breadcrumbs'][] = ['label' => 'Requerimientos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="requerimientos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php
        if (SiteController::findCom(29)) {
        echo Html::a('Actualizar', ['update', 'id' => $model->ReqId], ['class' => 'btn btn-primary']);
        }
        ?>
        <!-- <?= Html::a('Delete', ['delete', 'id' => $model->ReqId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?> -->
    </p>
    <!-- INICIO
        Obtengo el nombre de la llave foránea dentro del modelo para luego cambiar su valor a una descripción en la lista desplegable de Tipos
    -->

        <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>

        <?= Tabs::widget([
                'items' => [
                    [

                        'label' => 'Requerimiento',
                        'content' => $this->render('TabsViews/requerimiento', ['model' => $model, 'form' => $form]),
                    ],
                    [

                        'label' => 'Versión',
                        'content' => $this->render('TabsViews/version', ['model' => $model,'modelsVersdocrequerimientos' => $modelsVersdocrequerimientos, 'form' => $form]),
                    ],
                    [

                        'label' => 'Estado',
                        'content' => $this->render('TabsViews/estado', ['model' => $model,'modelsEstrequerimientos' => $modelsEstrequerimientos, 'form' => $form]),
                    ],

                ]]);
         ?>


        <?php ActiveForm::end(); ?>


</div>
