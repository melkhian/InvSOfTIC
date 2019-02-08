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
    $id = $event->identity->id;
    $session = Yii::$app->session;

    $fecha_actual = strtotime(date("d-m-Y",time()));
    $data = Validations::RUsuId($id);
    // $status = Validations::status($id);
    $fechaCad = strtotime($data);
    //Función para comparar la fecha actual con la fecha de caducidad de Rolusua
    if ($fecha_actual > $fechaCad) {

      Yii::$app->user->logout();

      $session = Yii::$app->session;

      $session->open();
      Yii::$app->request->bodyParams = [];
      $_POST = array();
      $_GET = array();
      Yii::$app->session->setFlash('fail', "A LA FECHA SU ROL HA CADUCADO");
    }

    // if ($status != 10) {
    //
    //   Yii::$app->user->logout();
    //
    //   $session = Yii::$app->session;
    //
    //   $session->open();
    //   Yii::$app->request->bodyParams = [];
    //   $_POST = array();
    //   $_GET = array();
    //   Yii::$app->session->setFlash('fail', "SU USUARIO SE ENCUENTRA DESHABILITADO");
    // }

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

  // public static function status($id)
  // {
  //   // $IdUser = Yii::$app->user->identity->id;
  //   $query = (new \yii\db\Query())
  //   ->select('status')
  //   ->from('user')
  //   ->where(['id' => $id]);
  //   $command = $query->createCommand();
  //   $rows = $command->queryScalar();
  //   return $rows;
  // }
}
