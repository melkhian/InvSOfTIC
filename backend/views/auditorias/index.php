<?php
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
use backend\models\User;
use backend\models\Auditorias;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\AuditoriasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Auditorias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auditorias-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php
        if (SiteController::findCom(63)){
        echo Html::a('Crear Auditorias', ['create'], ['class' => 'btn btn-success']);
        }
        else {
          // $this->redirect(['site/error']);
        }
        if (SiteController::findCom(64)) {
          $view = '{view}';
        } else {
          $view = '';
        }
        if (SiteController::findCom(65)) {
          $update = '{update}';
        } else {
          $update = '';
        }
        ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        // 'format' => 'raw',
        'columns' => [            

            'AudId',
            // 'UsuId_fk',
            ['attribute'=>'UsuId_fk',
             'value'=> function($model){return $model->UsuId_fk();},
             'filter' => Html::activeDropDownList($searchModel, 'UsuId_fk', ArrayHelper::map(User::find()->all(),'id','username'),['class'=>'form-control','prompt' => 'Seleccione el Tipo']),
            ],
            'AudAcci',
            [
            'attribute' => 'AudDatoAnte',
            'label' => 'yourLabel',
            'value' => function($model) { return "Id =>"  . " " . $model->AudDatoAnte[0];},
            ],
            'AudDatoAnte',
            'AudDatoDesp',
            'AudMod',
            // ['attribute'=>'AudMod',
            //  'value'=> function($model){return $model->AudMod();},
            //  'filter' => Html::activeDropDownList($searchModel, 'AudMod', ArrayHelper::map(Auditorias::find()->all(),'AudMod','AudMod'),['class'=>'form-control','prompt' => 'Seleccione el Tipo']),
            // ],
            //'AudIp',
            //'AudFechHora',

            ['class' => 'yii\grid\ActionColumn',
             'template' => "$view $update"],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
