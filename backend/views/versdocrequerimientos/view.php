<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Requerimientos;

/* @var $this yii\web\View */
/* @var $model backend\models\Versdocrequerimientos */

$this->title = $model->VDReqId;
$this->params['breadcrumbs'][] = ['label' => 'Versiones de Requerimientos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="versdocrequerimientos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php
        if (SiteController::findCom(35)) {
        echo Html::a('Actualizar', ['update', 'id' => $model->VDReqId], ['class' => 'btn btn-primary']);
        }
        ?>
        <!-- <?= Html::a('Delete', ['delete', 'id' => $model->VDReqId], [
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
    ?>
    <!-- FIN -->

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'VDReqId',
            ['attribute' => 'ReqId_fk',
             'value'=> $ReqId_fk['ReqDesc'],
            ],
            'VDReqDocu',
            'VDReqFechSist',
        ],
    ]) ?>

</div>
