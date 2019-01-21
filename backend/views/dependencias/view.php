<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Tipos;
use backend\controllers\SiteController;
/* @var $this yii\web\View */
/* @var $model backend\models\Dependencias */

$this->title = $model->DepId;
$this->params['breadcrumbs'][] = ['label' => 'Dependencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dependencias-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php
        if(SiteController::findCom(7)){
        echo Html::a('Actualizar', ['update', 'id' => $model->DepId], ['class' => 'btn btn-primary']);
        }
        ?>
        <!-- <?= Html::a('Delete', ['delete', 'id' => $model->DepId], [
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
    <?php
        $tiposid_fk1= Tipos::findOne($model->TiposId_fk1);
        $tiposid_fk2= Tipos::findOne($model->TiposId_fk2);
    ?>
    <!-- FIN -->

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'DepId',
            'DepNomb',
            'DepEnca',
            /*INICIO
            Reemplazo de tiposid_fk_1 a tiposdesc para ser mostrado en la consulta, en vez de un número muestre la descripción
            */
            ['attribute' => 'TiposId_fk1',
             'value'=> $tiposid_fk1['TiposDesc'],
            ],
            /*FIN*/
            'DepTele',
            'DepDire',
            ['attribute' => 'TiposId_fk2',
             'value'=> $tiposid_fk2['TiposDesc'],
            ],
            'DepCorr',
        ],
    ]) ?>

</div>
