<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AplicacionesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aplicaciones-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'AppId') ?>

    <?= $form->field($model, 'AppNomb') ?>

    <?= $form->field($model, 'AppDesc') ?>

    <?= $form->field($model, 'AppSigl') ?>

    <?= $form->field($model, 'AppVers') ?>

    <?php // echo $form->field($model, 'ESopId1') ?>

    <?php // echo $form->field($model, 'AppUrl') ?>

    <?php // echo $form->field($model, 'TiposId_fk1') ?>

    <?php // echo $form->field($model, 'TiposId_fk2') ?>

    <?php // echo $form->field($model, 'AppNumeDocuAdqu') ?>

    <?php // echo $form->field($model, 'AppValoAdqu') ?>

    <?php // echo $form->field($model, 'AppFechAdqu') ?>

    <?php // echo $form->field($model, 'TiposId_fk3') ?>

    <?php // echo $form->field($model, 'AppNombProc') ?>

    <?php // echo $form->field($model, 'AppEnti') ?>

    <?php // echo $form->field($model, 'ESopId2') ?>

    <?php // echo $form->field($model, 'AppNombCont') ?>

    <?php // echo $form->field($model, 'AppCarg') ?>

    <?php // echo $form->field($model, 'AppCorr') ?>

    <?php // echo $form->field($model, 'AppTeleOfic') ?>

    <?php // echo $form->field($model, 'AppTelePers') ?>

    <?php // echo $form->field($model, 'TiposId_fk4') ?>

    <?php // echo $form->field($model, 'AppNombFunc') ?>

    <?php // echo $form->field($model, 'AppCarg2') ?>

    <?php // echo $form->field($model, 'AppCorr2') ?>

    <?php // echo $form->field($model, 'AppTeleOfic2') ?>

    <?php // echo $form->field($model, 'AppTelePers2') ?>

    <?php // echo $form->field($model, 'AppAcueNiveServ') ?>

    <?php // echo $form->field($model, 'TiposId_fk5') ?>

    <?php // echo $form->field($model, 'AppFechPues') ?>

    <?php // echo $form->field($model, 'AppServPues') ?>

    <?php // echo $form->field($model, 'AppFechPues1') ?>

    <?php // echo $form->field($model, 'AppServPues1') ?>

    <?php // echo $form->field($model, 'AppFechPues2') ?>

    <?php // echo $form->field($model, 'AppServPues2') ?>

    <?php // echo $form->field($model, 'TiposId_fk6') ?>

    <?php // echo $form->field($model, 'TiposId_fk7') ?>

    <?php // echo $form->field($model, 'TiposId_fk8') ?>

    <?php // echo $form->field($model, 'AppServWebVers') ?>

    <?php // echo $form->field($model, 'AppOtroCual8') ?>

    <?php // echo $form->field($model, 'TiposId_fk9') ?>

    <?php // echo $form->field($model, 'AppOtroCual9') ?>

    <?php // echo $form->field($model, 'TiposId_fk10') ?>

    <?php // echo $form->field($model, 'AppOtroCual10') ?>

    <?php // echo $form->field($model, 'TiposId_fk11') ?>

    <?php // echo $form->field($model, 'TiposId_fk12') ?>

    <?php // echo $form->field($model, 'AppOtroCual12') ?>

    <?php // echo $form->field($model, 'TiposId_fk13') ?>

    <?php // echo $form->field($model, 'TiposId_fk14') ?>

    <?php // echo $form->field($model, 'AppOtroCual14') ?>

    <?php // echo $form->field($model, 'TiposId_fk15') ?>

    <?php // echo $form->field($model, 'TiposId_fk16') ?>

    <?php // echo $form->field($model, 'AppOtroCual16') ?>

    <?php // echo $form->field($model, 'TiposId_fk17') ?>

    <?php // echo $form->field($model, 'TiposId_fk18') ?>

    <?php // echo $form->field($model, 'AppOtroCual18') ?>

    <?php // echo $form->field($model, 'TiposId_fk19') ?>

    <?php // echo $form->field($model, 'TiposId_fk20') ?>

    <?php // echo $form->field($model, 'AppOtroCual20') ?>

    <?php // echo $form->field($model, 'TiposId_fk56') ?>

    <?php // echo $form->field($model, 'AppNumeLice') ?>

    <?php // echo $form->field($model, 'TiposId_fk21') ?>

    <?php // echo $form->field($model, 'AppOtroCual21') ?>

    <?php // echo $form->field($model, 'TiposId_fk22') ?>

    <?php // echo $form->field($model, 'TiposId_fk23') ?>

    <?php // echo $form->field($model, 'AppVersDist') ?>

    <?php // echo $form->field($model, 'TiposId_fk24') ?>

    <?php // echo $form->field($model, 'AppObse8') ?>

    <?php // echo $form->field($model, 'AppObse4') ?>

    <?php // echo $form->field($model, 'AppDireRaiz') ?>

    <?php // echo $form->field($model, 'AppObse5') ?>

    <?php // echo $form->field($model, 'AppObse6') ?>

    <?php // echo $form->field($model, 'TiposId_fk29') ?>

    <?php // echo $form->field($model, 'TiposId_fk30') ?>

    <?php // echo $form->field($model, 'TiposId_fk31') ?>

    <?php // echo $form->field($model, 'TiposId_fk32') ?>

    <?php // echo $form->field($model, 'TiposId_fk33') ?>

    <?php // echo $form->field($model, 'TiposId_fk34') ?>

    <?php // echo $form->field($model, 'TiposId_fk35') ?>

    <?php // echo $form->field($model, 'TiposId_fk36') ?>

    <?php // echo $form->field($model, 'TiposId_fk37') ?>

    <?php // echo $form->field($model, 'TiposId_fk38') ?>

    <?php // echo $form->field($model, 'TiposId_fk39') ?>

    <?php // echo $form->field($model, 'TiposId_fk40') ?>

    <?php // echo $form->field($model, 'TiposId_fk41') ?>

    <?php // echo $form->field($model, 'TiposId_fk42') ?>

    <?php // echo $form->field($model, 'TiposId_fk43') ?>

    <?php // echo $form->field($model, 'TiposId_fk44') ?>

    <?php // echo $form->field($model, 'TiposId_fk45') ?>

    <?php // echo $form->field($model, 'TiposId_fk46') ?>

    <?php // echo $form->field($model, 'TiposId_fk47') ?>

    <?php // echo $form->field($model, 'TiposId_fk48') ?>

    <?php // echo $form->field($model, 'TiposId_fk49') ?>

    <?php // echo $form->field($model, 'TiposId_fk50') ?>

    <?php // echo $form->field($model, 'TiposId_fk51') ?>

    <?php // echo $form->field($model, 'TiposId_fk52') ?>

    <?php // echo $form->field($model, 'TiposId_fk53') ?>

    <?php // echo $form->field($model, 'TiposId_fk54') ?>

    <?php // echo $form->field($model, 'AppUbic') ?>

    <?php // echo $form->field($model, 'TiposId_fk55') ?>

    <?php // echo $form->field($model, 'AppUbicDocu') ?>

    <?php // echo $form->field($model, 'AppUbicUlti') ?>

    <?php // echo $form->field($model, 'AppObse7') ?>

    <?php // echo $form->field($model, 'AppActa') ?>

    <?php // echo $form->field($model, 'AppFechApro') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
