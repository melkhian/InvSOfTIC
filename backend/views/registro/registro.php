<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \app\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Dependencias;
use backend\models\Tipos;
use backend\models\User;
//New
/*use yii\helpers\ArrayHelper;
use backend\models\SignupForm;
use yii\bootstrap\ActiveField;*/
//Fin new

$this->title = 'Registro';
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['/user']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if ($msgreg !== null){  ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times; </button>
            <h4> Información </h4>
            <?php print $msgreg; ?>
            <?php } ?>
        </div>
    <p>Por favor, rellene los siguientes campos para registrar un funcionario:</p>

    <div class="row">
        <div class="col-lg-5">
           <!--Antes id = form-signup-->
            <?php  $form = ActiveForm::begin(['id' => 'form-registro']);  ?>


                <?= $form->field($model, 'usuiden')->textInput(['maxlength' => true, 'autofocus' => true]) ?>

                <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'usuprimnomb')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'ususegunomb')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'usuprimapel')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'ususeguapel')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'usutelepers')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'usuteleofic')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'depid_fk')->dropDownList(ArrayHelper::map(Dependencias::find()->all(),'DepId','DepNomb'), ['prompt'=> 'Seleccione la Dependencia'])?>

                <?= $form->field($model, 'tiposid_fk1')->dropDownList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 1')->all(),'TiposId','TiposDesc'), ['prompt'=> 'Seleccione el Cargo'])?>

                <?= $form->field($model, 'tiposid_fk2')->dropDownList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 2')->all(),'TiposId','TiposDesc'), ['prompt'=> 'Seleccione el Tipo de Contrato'])?>

                <?= $form->field($model, 'status')->dropDownList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 3')->all(),'TiposId','TiposDesc'), ['prompt'=> 'Seleccione el Estado'])?>
                <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>


                <?= $form->field($model, 'password')->passwordInput() ?>
                  <?= $form->field($model, 'password_copy')->passwordInput() ?>
                <div class="form-group">
                    <?= Html::submitButton('Registrar', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                    <?= Html::resetButton('Reset', ['class' => 'btn btn-primary']) ?>

                    <!--?= Html::a( 'Restroceder', Yii::$app->request->referrer, ['class' => 'btn btn-primary']) ?>-->
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
