<?php

use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Aplicaciones */

$this->title = $model->AppId;
$this->params['breadcrumbs'][] = ['label' => 'Aplicaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aplicaciones-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>

      <?php
      if (SiteController::findCom(10)) {
        echo Html::a('Actualizar', ['update', 'id' => $model->AppId], ['class' => 'btn btn-primary']);
      }
      ?>
        <!-- <?= Html::a('Update', ['update', 'id' => $model->AppId], ['class' => 'btn btn-primary']) ?> -->
        <!-- <?= Html::a('Delete', ['delete', 'id' => $model->AppId], [

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
            'AppId',
            'AppNomb',
            'AppDesc',
            'AppSigl',
            'AppVers',
            'ESopId1',
            'AppUrl',
            'TiposId_fk1',
            'TiposId_fk2',
            'AppNumeDocuAdqu',
            'AppValoAdqu',
            'AppFechAdqu',
            'TiposId_fk3',
            'AppNombProc',
            'AppEnti',
            [
            'attribute'=>'AppEntiImag',
            // 'label'=>'File',
            'format'=>'raw',
            'value' => function ($model) {
                        $str = explode(',',$model->AppEntiImag);
                        $html = '';
                        // print_r(sizeof($str));
                        // die();
                        for ($i=0; $i <sizeof($str) ; $i++) {
                          $j = $i +1;
                        $html .= Html::a('(Archivo descargable '. $j.')', $str[$i]) . ' ';
                        }
                        return $html;
                      },
            ],
            'ESopId2',
            'AppNombCont',
            'AppCarg',
            'AppCorr',
            'AppTeleOfic',
            'AppTelePers',
            'TiposId_fk4',
            'AppNombFunc',
            'AppCarg2',
            'AppCorr2',
            'AppTeleOfic2',
            'AppTelePers2',
            'AppAcueNiveServ',
            'TiposId_fk5',
            'AppFechPues',
            'AppServPues',
            'AppFechPues1',
            'AppServPues1',
            'AppFechPues2',
            'AppServPues2',
            'TiposId_fk6',
            'TiposId_fk7',
            'TiposId_fk8',
            'AppServWebVers',
            'AppOtroCual8',
            'TiposId_fk9',
            'AppOtroCual9',
            'TiposId_fk10',
            'AppOtroCual10',
            'TiposId_fk11',
            'TiposId_fk12',
            'AppOtroCual12',
            'TiposId_fk13',
            'TiposId_fk14',
            'AppOtroCual14',
            'TiposId_fk15',
            'TiposId_fk16',
            'AppOtroCual16',
            'TiposId_fk17',
            'TiposId_fk18',
            'AppOtroCual18',
            'TiposId_fk19',
            'TiposId_fk20',
            'AppOtroCual20',
            'TiposId_fk56',
            'AppNumeLice',
            'TiposId_fk21',
            'AppOtroCual21',
            'TiposId_fk22',
            'TiposId_fk23',
            'AppVersDist',
            'TiposId_fk24',
            'AppObse4',
            'AppDireRaiz',
            'AppObse5',
            'AppObse6',
            'TiposId_fk29',
            'TiposId_fk30',
            'TiposId_fk31',
            'TiposId_fk32',
            'TiposId_fk33',
            'TiposId_fk34',
            'TiposId_fk35',
            'TiposId_fk36',
            'TiposId_fk37',
            'TiposId_fk38',
            'TiposId_fk39',
            'TiposId_fk40',
            'TiposId_fk41',
            'TiposId_fk42',
            'TiposId_fk43',
            'TiposId_fk44',
            'TiposId_fk45',
            'TiposId_fk46',
            'TiposId_fk47',
            'TiposId_fk48',
            'TiposId_fk49',
            'TiposId_fk50',
            'TiposId_fk51',
            'TiposId_fk52',
            'TiposId_fk53',
            'TiposId_fk54',
            'AppUbic',
            'TiposId_fk55',
            'AppUbicDocu',
            'AppUbicUlti',
            'AppObse7',
            'AppActa',
            'AppFechApro',
        ],
    ]) ?>

</div>
