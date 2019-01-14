<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Aplicaciones;

/* @var $this yii\web\View */
/* @var $model backend\models\Appmodulos */

$this->title = $model->AModId;
$this->params['breadcrumbs'][] = ['label' => 'Módulos por Aplicativos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appmodulos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->AModId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->AModId], [
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
        $AppId_fk= Aplicaciones::findOne($model->AppId_fk);

    ?>
    <!-- FIN -->

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'AModId',
            /*INICIO
            Reemplazo de tiposid_fk_1 a tiposdesc para ser mostrado en la consulta, en vez de un número muestre la descripción
            */
            ['attribute' => 'AppId_fk',
             'value'=> $AppId_fk['AppNomb'],
            ],
            /*FIN*/
            'AModDesc',
        ],
    ]) ?>

</div>
