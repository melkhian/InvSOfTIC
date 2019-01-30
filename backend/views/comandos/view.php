<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Comandos */

$this->title = $model->ComId;
$this->params['breadcrumbs'][] = ['label' => 'Comandos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comandos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php
        if (SiteController::findCom(56)) {
        echo Html::a('Actualizar', ['update', 'id' => $model->ComId], ['class' => 'btn btn-primary']);
      }
        ?>
        <!-- <?= Html::a('Delete', ['delete', 'id' => $model->ComId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?> -->
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ComId',
            'ComNomb',
            'ComDesc',
        ],
    ]) ?>

</div>
