<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Tipos;

/* @var $this yii\web\View */
/* @var $model backend\models\Appmodulos */

$this->title = $model->AModId;
$this->params['breadcrumbs'][] = ['label' => 'Módulo por Aplicación', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appmodulos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>

        <?php 
        if (SiteController::findCom(14)) {
            echo Html::a('Actualizar', ['update', 'id' => $model->AModId], ['class' => 'btn btn-primary']);
        // Html::a('Actualizar', ['update', 'id' => $model->AModId], ['class' => 'btn btn-primary']) 
        }
        ?>
        <!-- <?= Html::a('Delete', ['delete', 'id' => $model->AModId], [
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
        $TiposId_fk= Tipos::findOne($model->TiposId_fk);
    ?>
    <!-- FIN -->

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'AModId',
            'AppId_fk',
            'AModNomb',
            'AModDesc',
            ['attribute' => 'TiposId_fk',
             'value'=> $TiposId_fk['TiposDesc'],
            ],
            // 'TiposId_fk',
            'AModObse',
        ],
    ]) ?>

</div>
