<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Interfaces;
use backend\models\Comandos;

/* @var $this yii\web\View */
/* @var $model backend\models\Intecoma */

$this->title = $model->IcomId;
$this->params['breadcrumbs'][] = ['label' => 'Interfaz por Comando', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="intecoma-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->IcomId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IcomId], [
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
        $IntiId_fk= Interfaces::findOne($model->IntiId_fk);
        $ComId_fk= Comandos::findOne($model->ComId_fk);
    ?>
    <!-- FIN -->

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IcomId',
            ['attribute' => 'IntiId_fk',
             'value'=> $IntiId_fk['IntNomb'],
            ],
            ['attribute' => 'ComId_fk',
             'value'=> $ComId_fk['ComNomb'],
            ],
            'IcomFunc',
            'IcomDesc',
        ],
    ]) ?>

</div>
