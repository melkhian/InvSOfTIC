<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Tipos;
use backend\models\User;
use backend\models\Aplicaciones;

/* @var $this yii\web\View */
/* @var $model backend\models\Requerimientos */

$this->title = $model->ReqId;
$this->params['breadcrumbs'][] = ['label' => 'Requerimientos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="requerimientos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php
        if (SiteController::findCom(29)) {
        echo Html::a('Actualizar', ['update', 'id' => $model->ReqId], ['class' => 'btn btn-primary']);
        }
        ?>
        <!-- <?= Html::a('Delete', ['delete', 'id' => $model->ReqId], [
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
        $AppId_fk= Aplicaciones::findOne($model->AppId_fk);
        $TiposId_fk1= Tipos::findOne($model->TiposId_fk1);
        $Tiposid_fk2= Tipos::findOne($model->Tiposid_fk2);
        $TiposId_fk3= Tipos::findOne($model->TiposId_fk3);
        $TiposId_fk4= Tipos::findOne($model->TiposId_fk4);
        $UsuId_fk= User::findOne($model->UsuId_fk);
    ?>
    <!-- FIN -->

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ReqId',
            ['attribute' => 'AppId_fk',
             'value'=> $AppId_fk['AppNomb'],
            ],
            'ReqDesc',
            ['attribute' => 'TiposId_fk1',
             'value'=> $TiposId_fk1['TiposDesc'],
            ],
            ['attribute' => 'UsuId_fk',
             'value'=> $UsuId_fk['username'],
            ],
            ['attribute' => 'Tiposid_fk2',
             'value'=> $Tiposid_fk2['TiposDesc'],
            ],
            ['attribute' => 'TiposId_fk3',
             'value'=> $TiposId_fk3['TiposDesc'],
            ],
            'ReqFechTomaRequ',
            ['attribute' => 'TiposId_fk4',
             'value'=> $TiposId_fk4['TiposDesc'],
            ],
            'ReqFechSist',
        ],
    ]) ?>

</div>
