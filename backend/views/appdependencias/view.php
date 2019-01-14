<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Aplicaciones;
use backend\models\Dependencias;

/* @var $this yii\web\View */
/* @var $model backend\models\Appdependencias */

$this->title = $model->ADepId;
$this->params['breadcrumbs'][] = ['label' => 'Aplicativo por Dependencia', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appdependencias-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->ADepId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ADepId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <!-- INICIO
        Obtengo el nombre de la llave foránea dentro del modelo para luego cambiar su valor a una descripción en la lista desplegable de Tipos
    -->
    <?php
        $DepId_fk= Dependencias::findOne($model->DepId_fk);
        $AppId_fk= Aplicaciones::findOne($model->AppId_fk);
    ?>
    <!-- FIN -->

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ADepId',
            /*INICIO
            Reemplazo de tiposid_fk_1 a tiposdesc para ser mostrado en la consulta, en vez de un número muestre la descripción
            */
            ['attribute' => 'DepId_fk',
             'value'=> $DepId_fk['DepNomb'],
            ],
            /*FIN*/
            ['attribute' => 'AppId_fk',
             'value'=> $AppId_fk['AppNomb'],
            ],
            'ADepCantUsua',
            'ADepFechSist',
        ],
    ]) ?>

</div>
