<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Tipos;
use backend\models\Requerimientos;

/* @var $this yii\web\View */
/* @var $model backend\models\Estrequerimientos */

$this->title = $model->EReqId;
$this->params['breadcrumbs'][] = ['label' => 'Estados de Requerimiento', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estrequerimientos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php
        if (SiteController::findCom(35)) {
        echo Html::a('Actualizar', ['update', 'id' => $model->EReqId], ['class' => 'btn btn-primary']);
        }
        ?>
        <!-- <?= Html::a('Delete', ['delete', 'id' => $model->EReqId], [
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
        $ReqId_fk= Requerimientos::findOne($model->ReqId_fk);
        $TiposId_fk= Tipos::findOne($model->TiposId_fk);
    ?>
    <!-- FIN -->

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'EReqId',
            ['attribute' => 'ReqId_fk',
             'value'=> $ReqId_fk['ReqDesc'],
            ],
            ['attribute' => 'TiposId_fk',
             'value'=> $TiposId_fk['TiposDesc'],
            ],
            'EReqEsta',
            'EReqFech',
            'EReqFechSist',
        ],
    ]) ?>

</div>
