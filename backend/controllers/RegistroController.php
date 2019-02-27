<?php

namespace backend\controllers;
//error_reporting(E_ERROR | E_WARNING | E_PARSE);
use Yii;
use backend\controllers\SiteController;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
//New add
use yii\web\Response;
use backend\models\User;
use backend\models\Roles;
use yii\helpers\Html;
use yii\web\NotFoundHttpException;
//use mPDF;
//End add
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\models\LoginForm;
use backend\models\PasswordResetRequestForm;
use backend\models\ResetPasswordForm;
use backend\models\RegistroForm;
use backend\models\ContactForm;

date_default_timezone_set('America/Bogota');
/**
 * Site controller
 */
class RegistroController extends Controller{

      public function actionRegistro(){

      $model = new RegistroForm();
      $msgreg = null;
          if ($model->load(Yii::$app->request->post())) {
              if ($user = $model->registro()) {
                

              //
              //   Yii::$app->mailer->compose('bienvenido.php',[
              //     'cedula' => $model->usuiden,
              //     'nombres' => $model->usuprimnomb,
              //     'usuario' => $model->username,
              //     'password' => $model->password,
              //   ])
              //      //->attach($ruta)
              //      //->attachContent('Contenido adjunto', ['fileName' => 'attach.txt', 'contentType' => 'text/plain']);
              //      ->setTo($model->email) // para
              //      ->setFrom([Yii::$app->params['adminEmail'] => Yii::$app->name]) // de
              //      //->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name ]) // de
              //      ->setSubject("Portal Personerias - Bienvenido/a") // asunto
              //      //->setTextBody($mensaje) // cuerpo del mensaje
              //      ->send();
              //
                $msgreg = 'Usuario registrado correctamente';

                $model->usuiden  ='';
                $model->usuprimnomb  ='';
                $model->ususegunomb  ='';
                $model->usuprimapel  ='';
                $model->ususeguapel  ='';
                $model->usutelepers  ='';
                $model->username  ='';
                $model->usuteleofic  ='';
                $model->email  ='';
                $model->depid_fk  ='';
                $model->tiposid_fk1  ='';
                $model->tiposid_fk2  ='';
                $model->status  ='';
                $model->password = '';

                return $this->render('registro', ['model' => $model, 'msgreg' => $msgreg]);
                return $this->refresh();
              }
            }
        return $this->render('registro', [
          'model' => $model,
          'msgreg' => $msgreg,
          ]);
      }

      // public function findVar($var)
      // {
      //   $IdUser = Yii::$app->user->identity->id;
      //   // $var = 'Usuarios';
      //   $query = (new \yii\db\Query())
      //   ->select('intId')
      //   ->from('user')
      //   ->innerJoin('rolusua','rolusua.usuid_fk = user.id')
      //   ->innerJoin('roles','roles.rolid = rolusua.rolid_fk')
      //   ->innerJoin('rolintecoma','rolintecoma.rolid_fk = roles.rolid')
      //   ->innerJoin('intecoma','intecoma.icomid = rolintecoma.icomid_fk')
      //   ->innerJoin('interfaces','interfaces.intid = intecoma.IntiId_fk')
      //   ->where([
      //     'id' => $IdUser,
      //     'IntId' => $var]);
      //     $command = $query->createCommand();
      //     $rows = $command->queryScalar();
      //     return $rows;
      // }
    }
 ?>
