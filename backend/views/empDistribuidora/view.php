<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Tipos;

/* @var $this yii\web\View */
/* @var $model backend\models\Empdistribuidora */

$this->title = $model->EDisId;
$this->params['breadcrumbs'][] = ['label' => 'Empresas Distribuidoras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empdistribuidora-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php
        if (SiteController::findCom(20)) {
          echo Html::a('Actualizar', ['update', 'id' => $model->EDisId], ['class' => 'btn btn-primary']);
        }
        ?>
        <!-- <?= Html::a('Delete', ['delete', 'id' => $model->EDisId], [
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
            'EDisId',
            'EDisNit',
            'EDisNomb',
            'EDisDire',
            'EDisCont',
            'EDisTele',
            'EDisCorr',
            ['attribute' => 'TiposId_fk',
             'value'=> $TiposId_fk['TiposDesc'],
            ],
        ],
    ]) ?>

</div>
