<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Roles;
use backend\models\Intecoma;

/* @var $this yii\web\View */
/* @var $model backend\models\Rolintecoma */

$this->title = $model->RIComId;
$this->params['breadcrumbs'][] = ['label' => 'Rol por Funcionalidad', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rolintecoma-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php
        if (SiteController::findCom(44)) {
        echo Html::a('Actualizar', ['update', 'id' => $model->RIComId], ['class' => 'btn btn-primary']);
      }
        ?>
        <!-- <?= Html::a('Delete', ['delete', 'id' => $model->RIComId], [
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
        $RolId_fk= Roles::findOne($model->RolId_fk);
        $IComid_fk= Intecoma::findOne($model->IComid_fk);
    ?>
    <!-- FIN -->

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'RIComId',
            ['attribute' => 'RolId_fk',
             'value'=> $RolId_fk['RolNomb'],
            ],
            ['attribute' => 'IComid_fk',
             'value'=> $IComid_fk['IcomFunc'],
            ],
        ],
    ]) ?>

</div>
