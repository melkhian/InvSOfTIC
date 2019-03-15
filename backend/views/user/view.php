<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Tipos;
use backend\models\Dependencias;
use backend\controllers\SiteController;
/* @var $this yii\web\View */
/* @var $model backend\models\User */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php
        if (SiteController::findCom(3)) {
        echo Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']);
        }
        ?>
        <!-- <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
        $depid_fk= Dependencias::findOne($model->depid_fk);
        $tiposid_fk1= Tipos::findOne($model->tiposid_fk1);
        $tiposid_fk2= Tipos::findOne($model->tiposid_fk2);
        $status= Tipos::findOne($model->status);
    ?>
    <!-- FIN -->

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'usuiden',
            'usuprimnomb',
            'ususegunomb',
            'usuprimapel',
            'ususeguapel',
            'usutelepers',
            'username',
            'usuteleofic',
            'email:email',
            /*INICIO
            Reemplazo de tiposid_fk_1 a tiposdesc para ser mostrado en la consulta, en vez de un número muestre la descripción
            */
            ['attribute' => 'depid_fk',
             'value'=> $depid_fk['DepNomb'],
            ],
            /*FIN*/
            ['attribute' => 'tiposid_fk1',
             'value'=> $tiposid_fk1['TiposDesc'],
            ],
            ['attribute' => 'tiposid_fk2',
             'value'=> $tiposid_fk2['TiposDesc'],
            ],
            ['attribute' => 'status',
             'value'=> $status['TiposDesc'],
            ],
            // 'auth_key',
            // 'password_hash',
            // 'password_reset_token',
            // 'created_at',
            // 'updated_at',
        ],
    ]) ?>

</div>
