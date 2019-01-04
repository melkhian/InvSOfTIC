<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\User */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

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
            'depid_fk',
            'tiposid_fk1',
            'tiposid_fk2',
            'status',
            'auth_key',
            'password_hash',
            'password_reset_token',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
