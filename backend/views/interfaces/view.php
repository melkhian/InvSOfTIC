<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Interfaces */

$this->title = $model->IntId;
$this->params['breadcrumbs'][] = ['label' => 'Interfaces', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="interfaces-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php
        if (SiteController::findCom(26)) {
        echo Html::a('Actualizar', ['update', 'id' => $model->IntId], ['class' => 'btn btn-primary']);
      }
        ?>
        <!-- <?= Html::a('Delete', ['delete', 'id' => $model->IntId], [
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
            'IntId',
            'IntNomb',
            'IntDesc',
        ],
    ]) ?>

</div>
