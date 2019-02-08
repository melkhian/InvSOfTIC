<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\User;
use backend\models\Roles;
/* @var $this yii\web\View */
/* @var $model backend\models\Rolusua */

$this->title = $model->RUsuId;
$this->params['breadcrumbs'][] = ['label' => 'Rol por Usuario', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rolusua-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php
        if (SiteController::findCom(44)) {
        echo Html::a('Actualizar', ['update', 'id' => $model->RUsuId], ['class' => 'btn btn-primary']);
        }
        ?>
        <!-- <?= Html::a('Delete', ['delete', 'id' => $model->RUsuId], [
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
        $UsuId_fk= User::findOne($model->UsuId_fk);
    ?>
    <!-- FIN -->

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'RUsuId',
            ['attribute' => 'RolId_fk',
             'value'=> $RolId_fk['RolNomb'],
            ],
            ['attribute' => 'UsuId_fk',
             'value'=> $UsuId_fk['username'],
            ],
            'RUsuCadu',
        ],
    ]) ?>

</div>
