<?php

namespace backend\models;

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

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $usuiden Número de Identificación
 * @property string $usuprimnomb Primer Nombre
 * @property string $ususegunomb Segundo Nombre
 * @property string $usuprimapel Primer Apellido
 * @property string $ususeguapel Segundo Apellido
 * @property string $usutelepers Teléfono Personal
 * @property string $username Usuario
 * @property string $usuteleofic Teléfono Oficina
 * @property string $email Correo
 * @property int $depid_fk Dependencia
 * @property int $tiposid_fk1 Cargo
 * @property int $tiposid_fk2 Tipo de Contrato
 * @property int $status Estado
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Proyectos[] $proyectos
 * @property Requerimientos[] $requerimientos
 * @property Rolusua[] $rolusuas
 */
class User extends \yii\db\ActiveRecord
{

private $var;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
  public function behaviors()
  {
      return [
          TimestampBehavior::className(),
      ];
  }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usuiden', 'usuprimnomb', 'usuprimapel', 'usutelepers', 'username', 'usuteleofic', 'email', 'depid_fk', 'tiposid_fk1', 'tiposid_fk2', 'status'], 'required'],
            [['depid_fk', 'tiposid_fk1', 'tiposid_fk2', 'status', 'created_at', 'updated_at'], 'integer'],
            [['usuiden', 'usutelepers', 'usuteleofic'], 'string', 'max' => 20],
            [['usuprimnomb', 'ususegunomb', 'usuprimapel', 'ususeguapel'], 'string', 'max' => 30],
            [['username', 'email'], 'string', 'max' => 255],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['usuiden'], 'unique'],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'usuiden' => 'Número de Identificación',
            'usuprimnomb' => 'Primer Nombre',
            'ususegunomb' => 'Segundo Nombre',
            'usuprimapel' => 'Primer Apellido',
            'ususeguapel' => 'Segundo Apellido',
            'usutelepers' => 'Teléfono Personal',
            'username' => 'Usuario',
            'usuteleofic' => 'Teléfono Oficina',
            'email' => 'Correo',
            'depid_fk' => 'Dependencia',
            'tiposid_fk1' => 'Cargo',
            'tiposid_fk2' => 'Tipo de Contrato',
            'status' => 'Estado',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */


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
      $data = User::RUsuId($id);
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

          //Agregar función Afterlogout
          Yii::$app->user->logout();
          $session = Yii::$app->session;
          $session->destroy();
          $session->open();

          Yii::$app->session->setFlash('fail', "A LA FECHA SU USUARIO HA CADUCADO");
          Yii::$app->request->bodyParams = [];
          $_POST = array();
          $_GET = array();
          // unset(Yii::$app->request->cookies['advanced-backend']);
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

    /**
     * @return \yii\db\ActiveQuery
     */

    public function getProyectos()
    {
        return $this->hasMany(Proyectos::className(), ['UsuId_fk' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequerimientos()
    {
        return $this->hasMany(Requerimientos::className(), ['UsuId_fk' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRolusuas()
    {
        return $this->hasMany(Rolusua::className(), ['UsuId_fk' => 'id']);
    }


    //Para todo lo relacionado con el Password

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = "";
    }
// NOTE:  Funciones creadas para cambiar en el Index el valor de las llaves foráneas y generar el filtrado por DropBox
// donde $data = Dependencias::findOne($this->depid_fk); relaciona el modelo Dependencias con el nombre de la llave foránea.
// y retorna el valor del campo a cambiar DepNomb
    public function depid_fk()
    {
        $data = Dependencias::findOne($this->depid_fk);

        return $data['DepNomb'];
    }

    public function tiposid_fk1()
    {
        $data = Tipos::findOne($this->tiposid_fk1);

        return $data['TiposDesc'];
    }

    public function status()
    {
        $data = Tipos::findOne($this->status);

        return $data['TiposDesc'];
    }

}
