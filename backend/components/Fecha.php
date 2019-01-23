<?php
namespace backend\components;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\User;

/**
 *
 */
class Fecha extends \yii\base\Behavior
{
  public function events(){

    return [\yii\web\application::EVENT_AFTER_LOGIN => 'afterLogin'];
  }

  public static function afterLogin($event){

    $id = $event->identity->id;
    $session = Yii::$app->session;
    $fecha_actual = strtotime(date("d-m-Y",time()));

    $data = User::RUsuId($id);
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    // exit();
    $fechaCad = strtotime($data);
    echo "<pre>";
    print_r($fechaCad);
    echo "<br>";
    print_r($fecha_actual);
    echo "</pre>";

      if ($fecha_actual > $fechaCad) {
        // $session->remove('id');
        // var_dump($event);
        Yii::$app->user->logout();
        exit();
        //Agregar función Afterlogout
        // Yii::$app->user->logout();
        echo "string";
        // die();
      }
  }
}



 ?>
