<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Aplicaciones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aplicaciones-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'AppNomb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppDesc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppSigl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppVers')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ESopId1')->textInput() ?>

    <?= $form->field($model, 'AppUrl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppNumeDocuAdqu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppValoAdqu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppFechAdqu')->textInput() ?>

    <?= $form->field($model, 'TiposId_fk3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppNombProc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppEnti')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ESopId2')->textInput() ?>

    <?= $form->field($model, 'TiposId_fk4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UsuId_fk')->textInput() ?>

    <?= $form->field($model, 'AppAcueNiveServ')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppFechPues')->textInput() ?>

    <?= $form->field($model, 'AppServPues')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk6')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk7')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk8')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppVersServ')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk9')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppOtroCual1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppOtroCual2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk11')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk12')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppOtroCual3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk13')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk14')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppOtroCual4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk15')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk16')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk17')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk18')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppOtroCual6')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk19')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppCual')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk20')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppDondUbic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppTipoLice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppNumeLice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk21')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk22')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk23')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppVersDist')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk24')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppLengServ')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppVersApli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppBibl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppObse1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppMane')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppVersBD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppPuer1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppObse2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppTipoHard')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppProc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppMemo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppEspaDisc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppObse3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppDirec1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppNombArch')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppVari')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppNombVari')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppDescPara')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppObse4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppUrlFuen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppServ')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppPuer2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppDirec2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppNombServBd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppUsua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppNombBd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppRuta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppEspaActu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppProy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk25')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppOtroCual7')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppPoliBack')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk26')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk27')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppOtroCual8')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk28')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppOtroCual9')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppCantLice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk29')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk30')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk31')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk32')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk33')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk34')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk35')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk36')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk37')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk38')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk39')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk40')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk41')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk42')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk43')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk44')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk45')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk46')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk47')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk48')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk49')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk50')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk51')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk52')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk53')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk54')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppUbic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk55')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppUbicDocu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppUbicUlti')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppObse7')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppFuncApru')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
