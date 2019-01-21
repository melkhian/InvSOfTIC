<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Tipos;
use backend\models\User;

/* @var $this yii\web\View */
/* @var $model backend\models\Proyectos */

$this->title = $model->ProId;
$this->params['breadcrumbs'][] = ['label' => 'Proyectos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proyectos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php
        if (SiteController::findCom(26)) {
        echo Html::a('Actualizar', ['update', 'id' => $model->ProId], ['class' => 'btn btn-primary']);
        }
        ?>
        <!-- <?= Html::a('Delete', ['delete', 'id' => $model->ProId], [
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
        $UsuId_fk= User::findOne($model->UsuId_fk);
        $Tiposid_fk1= Tipos::findOne($model->Tiposid_fk1);
        $TiposId_fk2= Tipos::findOne($model->TiposId_fk2);
    ?>
    <!-- FIN -->

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ProId',
            'ProNomb',
            'ProDesc',
            'ProObje',
            ['attribute' => 'UsuId_fk',
             'value'=> $UsuId_fk['username'],
            ],
            ['attribute' => 'Tiposid_fk1',
             'value'=> $Tiposid_fk1['TiposDesc'],
            ],
            'ProFechApro',
            'ProDocu',
            'ProFechInic',
            'ProFechFina',
            ['attribute' => 'TiposId_fk2',
             'value'=> $TiposId_fk2['TiposDesc'],
            ],
            'ProFinProy',
        ],
    ]) ?>

</div>
