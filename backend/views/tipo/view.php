<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Tipo */

$this->title = $model->TipoId;
$this->params['breadcrumbs'][] = ['label' => 'Tipo', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php
        if (SiteController::findCom(47)) {
        echo Html::a('Actualizar', ['update', 'id' => $model->TipoId], ['class' => 'btn btn-primary']);
      }
      // if (SiteController::findCom(45)) {
      // echo Html::a('Crear Tipo', ['create'], ['class' => 'btn btn-success']);
      // }
      // else {
      //   $this->redirect(['site/error']);
      // }
        ?>
        <!-- <?= Html::a('Delete', ['delete', 'id' => $model->TipoId], [
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
            'TipoId',
            'TipoDesc',
        ],
    ]) ?>

</div>
