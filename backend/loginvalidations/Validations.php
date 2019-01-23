<?php

namespace backend\loginvalidations;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\controllers\SiteController;

class Validations extends \yii\db\ActiveRecord
{

  public static function handleNewUser($event)

  {
    // echo "<pre>";
    // print_r($event->identity->id);
    // echo "</pre>";
    // exit();
    $id = $event->identity->id;
    $session = Yii::$app->session;
    $fecha_actual = strtotime(date("d-m-Y",time()));
    // $data = new User;
    $data = Validations::RUsuId($id);
    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";
    // exit();
    $fechaCad = strtotime($data);
    // echo "<pre>";
    // print_r($fechaCad);
    // echo "<br>";
    // print_r($fecha_actual);
    // echo "</pre>";
    // exit();
    if ($fecha_actual > $fechaCad) {
      //           $cookies = Yii::$app->response->cookies;
      // $cookies->remove('_csrf-backend');
      // unset($cookies['_csrf-backend']);
      //Agregar función Afterlogout
      Yii::$app->user->logout();

      $session = Yii::$app->session;
      $session->destroy();
      $session->open();

      Yii::$app->session->setFlash('fail', "A LA FECHA SU USUARIO HA CADUCADO");
      Yii::$app->request->bodyParams = [];
      $_POST = array();
      $_GET = array();

      // return $this->goHome();
      // unset($_POST['username']);

    }

  }

  public static function RUsuId($id)
  {
    // $IdUser = Yii::$app->user->identity->id;
    $query = (new \yii\db\Query())
    ->select('RUsuCadu')
    ->from('rolusua')
    ->innerJoin('user','user.id = rolusua.UsuId_fk')
    ->where(['id' => $id]);
    $command = $query->createCommand();
    $rows = $command->queryScalar();
    return $rows;


  }
}
