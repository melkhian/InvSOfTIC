<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Tipo;

/* @var $this yii\web\View */
/* @var $model backend\models\Tipos */

$this->title = $model->TiposId;
$this->params['breadcrumbs'][] = ['label' => 'Tipos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php
        if (SiteController::findCom(50)) {
        echo Html::a('Actualizar', ['update', 'id' => $model->TiposId], ['class' => 'btn btn-primary']);
        }
        // if (SiteController::findCom(48)) {
        // echo Html::a('Crear Tipos', ['create'], ['class' => 'btn btn-success']);
        // }
        // else {
        //   $this->redirect(['site/error']);
        // }
       ?>
        <!-- <?= Html::a('Delete', ['delete', 'id' => $model->TiposId], [
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
        $TipoId_fk= Tipo::findOne($model->TipoId_fk);
    ?>
    <!-- FIN -->

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'TiposId',
            ['attribute' => 'TipoId_fk',
             'value'=> $TipoId_fk['TipoDesc'],
            ],
            'TiposDesc',
            'TiposValo',
        ],
    ]) ?>

</div>
