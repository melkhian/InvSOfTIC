<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Roles */

$this->title = $model->RolId;
$this->params['breadcrumbs'][] = ['label' => 'Roles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="roles-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php
        if (SiteController::findCom(26)) {
        echo Html::a('Actualizar', ['update', 'id' => $model->RolId], ['class' => 'btn btn-primary']);
        }
        ?>
        <!-- <?= Html::a('Delete', ['delete', 'id' => $model->RolId], [
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
            'RolId',
            'RolNomb',
            'RolDesc',
        ],
    ]) ?>

</div>
