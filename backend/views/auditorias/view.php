<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Auditorias */

$this->title = $model->AudId;
$this->params['breadcrumbs'][] = ['label' => 'Auditorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auditorias-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?
        if (SiteController::findCom(65))
        echo Html::a('Actualizar', ['update', 'id' => $model->AudId], ['class' => 'btn btn-primary']) ?>
        <?php 
        // Html::a('Delete', ['delete', 'id' => $model->AudId], [
        //     'class' => 'btn btn-danger',
        //     'data' => [
        //         'confirm' => 'Are you sure you want to delete this item?',
        //         'method' => 'post',
        //     ],
        // ]) 
        ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'AudId',
            'UsuId_fk',
            'AudAcci',
            'AudDatoAnte',
            'AudDatoDesp',
            'AudIp',
            'AudFechHora',
        ],
    ]) ?>

</div>
