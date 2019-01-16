<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Inicio de Sesión';

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
];

$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
];
?>

<div class="login-box">
    <div class="login-logo">
        <b>INVSOFTIC</b>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Ingrese sus credenciales para iniciar sesión</p>

        <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>

        <?= $form
            ->field($model, 'username', $fieldOptions1)
            ->label(false)
            ->textInput(['placeholder' => 'Usuario']) ?>

        <?= $form
            ->field($model, 'password', $fieldOptions2)
            ->label(false)
            ->passwordInput(['placeholder' => 'Contraseña']) ?>

        <?= $form
            ->field($model, 'reCaptcha')
            ->widget(\himiklab\yii2\recaptcha\ReCaptcha::className(),['siteKey' => '6LeFaIUUAAAAAECJuHYgZkEe3PUBRRoBOHHgSiy_']) ?>


        <div class="row">

            <!-- /.col -->
            <div class="col-xs-12">
                <?= Html::submitButton('Ingresar', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
            </div>
            <!-- /.col -->
        </div>

        <?php ActiveForm::end(); ?>

        <!-- /.social-auth-links -->
        <br><br>
        <a href="#"><b>Olvidé mi contraseña</b></a><br>

    </div>
    <!-- /.login-box-body -->
</div><!-- /.login-box -->
