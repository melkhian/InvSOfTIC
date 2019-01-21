<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Tipos;
use backend\models\Empsoporte;
use backend\models\Empdistribuidora;
use backend\controllers\SiteController;
/* @var $this yii\web\View */
/* @var $model backend\models\Aplicaciones */

$this->title = $model->AppId;
$this->params['breadcrumbs'][] = ['label' => 'Aplicaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aplicaciones-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php
        if (SiteController::findCom(10)) {
          echo Html::a('Actualizar', ['update', 'id' => $model->AppId], ['class' => 'btn btn-primary']);
        }
        ?>
        <!-- <?= Html::a('Delete', ['delete', 'id' => $model->AppId], [
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
      $TiposId_fk1= Tipos::findOne($model->TiposId_fk1);
      $TiposId_fk2= Tipos::findOne($model->TiposId_fk2);
      $TiposId_fk3= Tipos::findOne($model->TiposId_fk3);
      $TiposId_fk4= Tipos::findOne($model->TiposId_fk4);
      $TiposId_fk5= Tipos::findOne($model->TiposId_fk5);
      $TiposId_fk6= Tipos::findOne($model->TiposId_fk6);
      $TiposId_fk7= Tipos::findOne($model->TiposId_fk7);
      $EDDesId_fk= Empdistribuidora::findOne($model->EDDesId_fk);
      $ESopId_fk= Empsoporte::findOne($model->ESopId_fk);
    ?>
    <!-- FIN -->

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'AppId',
            'AppNomb',
            'AppDesc',
            'AppVers',
            /*INICIO
            Reemplazo de tiposid_fk_1 a tiposdesc para ser mostrado en la consulta, en vez de un número muestre la descripción
            */
            ['attribute' => 'TiposId_fk1',
             'value'=> $TiposId_fk1['TiposDesc'],
            ],
            /*FIN*/
            'AppNumeLice',
            ['attribute' => 'TiposId_fk2',
             'value'=> $TiposId_fk2['TiposDesc'],
            ],
            ['attribute' => 'TiposId_fk3',
             'value'=> $TiposId_fk3['TiposDesc'],
            ],
            ['attribute' => 'EDDesId_fk',
             'value'=> $EDDesId_fk['EDisNomb'],
            ],
            ['attribute' => 'TiposId_fk4',
             'value'=> $TiposId_fk4['TiposDesc'],
            ],
            ['attribute' => 'TiposId_fk5',
             'value'=> $TiposId_fk5['TiposDesc'],
            ],
            'AppInteApp',
            ['attribute' => 'ESopId_fk',
             'value'=> $ESopId_fk['ESopNomb'],
            ],
            ['attribute' => 'TiposId_fk6',
             'value'=> $TiposId_fk6['TiposDesc'],
            ],
            ['attribute' => 'TiposId_fk7',
             'value'=> $TiposId_fk7['TiposDesc'],
            ],
            'AppVersBD',
            'AppBaseDato',
        ],
    ]) ?>

</div>
