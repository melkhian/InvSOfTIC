<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Proyectos;

/* @var $this yii\web\View */
/* @var $model backend\models\Cambioalcance */

$this->title = $model->CAlcId;
$this->params['breadcrumbs'][] = ['label' => 'Cambios de Alcance', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cambioalcance-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->CAlcId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->CAlcId], [
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
        $ProId_fk= Proyectos::findOne($model->ProId_fk);
    ?>
    <!-- FIN -->

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'CAlcId',
            ['attribute' => 'ProId_fk',
             'value'=> $ProId_fk['ProNomb'],
            ],
            'CAlcDesc',
            'CAlcFechApro',
            'CAlcFechInic',
            'CAlcFechFina',
            'CAlcFechSist',
        ],
    ]) ?>

</div>
