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
      // NOTE: Se eliminan campos como Password_hash, auth_key, created_at, update_at de los REQUERIDOS, esto cuando se genera el modelo desde GII.
        return [
            [['usuiden', 'usuprimnomb', 'usuprimapel', 'usutelepers', 'username', 'usuteleofic', 'email', 'depid_fk', 'tiposid_fk1', 'tiposid_fk2', 'status'], 'required'],
            [['depid_fk', 'tiposid_fk1', 'tiposid_fk2', 'status', 'created_at', 'updated_at'], 'integer'],
            [['usuiden', 'usutelepers', 'usuteleofic'], 'string', 'max' => 20],
            [['usuprimnomb', 'ususegunomb', 'usuprimapel', 'ususeguapel'], 'string', 'max' => 30],
            [['username', 'email'], 'string', 'max' => 255],
            [['username'], 'unique'],
            [['email'], 'unique'],
            ['email', 'email'],
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

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);
        if (!$insert)
        {

            $AudAcci =  'update';
            $table = $this->getTableSchema();
            $pk = $table->primaryKey; //---------------------- [ADepID]
            $idSelect = $_GET['id'];
            $UsuId_fk = Yii::$app->user->identity->id;
            $AudMod = Yii::$app->controller->id; //------------------ [appdependencias]
            $AudIp = Yii::$app->getRequest()->getUserIP();
            $AudFechHora = new \yii\db\Expression('NOW()');
            $connection = Yii::$app->db;

            // print_r($pk);
            // die();
            $MaxId = (new \yii\db\Query())
            ->select($pk)
            ->from($AudMod)
            ->orderBy($pk[0]." DESC")
            ->createCommand()
            ->execute();


            $queryAll = (new \yii\db\Query())
            ->select('*')
            ->from($AudMod)
            ->where([$pk[0] => $idSelect])
            ->createCommand();
            $rows = $queryAll->queryOne();
            $resultAll = implode(",", $rows);

            $i=0;

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['id']))
            {
                $oldAttributes[$i] = "Id => ".$idSelect;
                $i++;
            }
            else
            {
                $oldAttributes[$i] = "Id => ".$changedAttributes['id'];
                $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['usuiden']))
            {

            }
            else
            {
                if ($changedAttributes['usuiden'] != $rows['usuiden'])
                {
                    $oldAttributes[$i] = "Identificación => ".$changedAttributes['usuiden'];
                    $i++;
                }
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['usuprimnomb']))
            {

            }
            else
            {
                $oldAttributes[$i] = "1nombre => ".$changedAttributes['usuprimnomb'];
                $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['ususegunomb']))
            {

            }
            else
            {
                if ($changedAttributes['ususegunomb'] != $rows['ususegunomb'])
                {
                    $oldAttributes[$i] = "2nombre => ".$changedAttributes['ususegunomb'];
                    $i++;
                }
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['usuprimapel']))
            {

            }
            else
            {
                if ($changedAttributes['usuprimapel'] != $rows['usuprimapel'])
                {
                    $oldAttributes[$i] = "1apel => ".$changedAttributes['usuprimapel'];
                    $i++;
                }
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['ususeguapel']))
            {

            }
            else
            {
                $oldAttributes[$i] = "2apel => ".$changedAttributes['ususeguapel'];
                $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['usutelepers']))
            {

            }
            else
            {
                if ($changedAttributes['usutelepers'] != $rows['usutelepers'])
                {
                    $oldAttributes[$i] = "Telefono => ".$changedAttributes['usutelepers'];
                    $i++;
                }
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['username']))
            {

            }
            else
            {
                $oldAttributes[$i] = "usuario => ".$changedAttributes['username'];
                $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['usuteleofic']))
            {

            }
            else
            {
                $oldAttributes[$i] = "telofi => ".$changedAttributes['usuteleofic'];
                $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['email']))
            {

            }
            else
            {
                $oldAttributes[$i] = "email => ".$changedAttributes['email'];
                $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['depid_fk']))
            {

            }
            else
            {
              if ($changedAttributes['depid_fk'] != $rows['depid_fk'])
                {
                  $oldAttributes[$i] = "dependencia => ".$changedAttributes['depid_fk'];
                  $i++;
                }
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk1s']))
            {

            }
            else
            {
                $oldAttributes[$i] = "Cargo => ".$changedAttributes['TiposId_fk1s'];
                $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk2']))
            {

            }
            else
            {
                $oldAttributes[$i] = "tipoCargo => ".$changedAttributes['TiposId_fk2'];
                $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['status']))
            {

            }
            else
            {
                if ($changedAttributes['status'] != $rows['status'])
                {
                  $oldAttributes[$i] = "Estado => ".$changedAttributes['status'];
                  $i++;
                }
            }

            //---------------------------------------------------------------//

            if (!isset($oldAttributes))
            {
                $total = 'no change';
            }
            else
            {
                $total = implode(",",$oldAttributes);
            }

            // ------------------------------------------------------------------//
            // print_r($rows['AppId_fk']);

            foreach ($rows as $key => $value)
            {
                if ($key == 'id')
                {
                    $var[0] = "Id => ".$rows['id'];
                }

                //---------------------------------------------------------------//

                if ($key == 'usuiden' and isset($changedAttributes['usuiden']))
                {
                    $var[1] = "Nombre => ".$rows['usuiden'];
                }

                //---------------------------------------------------------------//


                if ($key == 'usuprimnomb' and isset($changedAttributes['usuprimnomb']))
                {
                    $var[2] = "1nombre => ".$rows['usuprimnomb'];
                }

                //---------------------------------------------------------------//

                if ($key == 'ususegunomb' and isset($changedAttributes['ususegunomb']))
                {
                    $var[3] = "2nombre => ".$rows['ususegunomb'];
                }

                //---------------------------------------------------------------//

                if ($key == 'usuprimapel' and isset($changedAttributes['usuprimapel']))
                {
                    $var[4] = "1apel => ".$rows['usuprimapel'];
                }

                //---------------------------------------------------------------//

                if ($key == 'ususeguapel' and isset($changedAttributes['ususeguapel']))
                {
                    $var[5] = "2apel => ".$rows['ususeguapel'];
                }

                //---------------------------------------------------------------//

                if ($key == 'usutelepers' and isset($changedAttributes['usutelepers']))
                {
                    $var[6] = "celular => ".$rows['usutelepers'];
                }

                //---------------------------------------------------------------//

                if ($key == 'username' and isset($changedAttributes['username']))
                {
                    $var[7] = "usuario => ".$rows['username'];
                }

                //---------------------------------------------------------------//

                if ($key == 'usuteleofic' and isset($changedAttributes['usuteleofic']))
                {
                    $var[8] = "telefono => ".$rows['usuteleofic'];
                }

                //---------------------------------------------------------------//

                if ($key == 'email' and isset($changedAttributes['email']))
                {
                    $var[9] = "email => ".$rows['email'];
                }

                //---------------------------------------------------------------//

                if ($key == 'depid_fk')
                {
                    $var[10] = "dependencia => ".$rows['depid_fk'];
                }

                //---------------------------------------------------------------//

                if ($key == 'tiposid_fk1')
                {
                    $var[11] = "cargo => ".$rows['tiposid_fk1'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk2')
                {
                    $var[12] = "tipo => ".$rows['TiposId_fk2'];
                }

                //---------------------------------------------------------------//

                if ($key == 'status')
                {
                    $var[13] = "estado => ".$rows['status'];
                }

                //---------------------------------------------------------------//


            }
            // echo '<pre>';
            // print_r($oldAttributes);
            // print_r($var);
            // echo '</pre>';
            // die();
            if (!isset($var))
            {
                $result = 'No Change';
            }
            else
            {
               $result = implode(",",$var);
            }

                //---------------------------------------------------------------//

            $connection->createCommand()->insert('auditorias',
                                    // ['AudId'=> $AudId],
                                    [
                                        'UsuId_fk' => Yii::$app->user->identity->id,
                                        'AudMod' => $AudMod,
                                        'AudAcci' => $AudAcci,
                                        'AudDatoAnte' => $total,
                                        'AudDatoDesp' => $result,
                                        'AudIp'=> $AudIp,
                                        'AudFechHora'=> $AudFechHora,
                                    ])
                                    ->execute();

        }
        if ($insert)
        {
            $connection = Yii::$app->db;
            $AudAcci =  'create';
            $table = $this->getTableSchema();
            $pk = $table->primaryKey;
            $UsuId_fk = Yii::$app->user->identity->id;
            $AudMod = Yii::$app->controller->id; //------------------ [appdependencias]
            $AudIp = Yii::$app->getRequest()->getUserIP();
            $AudFechHora = new \yii\db\Expression('NOW()');

        //---------------------------------------------------------------------------//


            $MaxId = (new \yii\db\Query())
            ->select($pk)
            ->from('user')
            ->orderBy($pk[0]." DESC")
            ->createCommand()
            ->execute();

            //---------------------------------------------//

            $queryId = (new \yii\db\Query())
            ->select($pk)
            ->from('user')
            ->where([$pk[0] => $MaxId])
            ->createCommand();
            $rows1 = $queryId->queryOne();
            // $resultId = implode(",", $rows1);

            foreach ($rows1 as $key => $value)
            {
                if ($key == $pk[0])
                {
                    $var[0] = "Id => ".$rows1[$pk[0]];
                }
            }

            $resultId = implode(",", $var);

            //-----------------------------------------------//

            $connection->createCommand()->insert('auditorias',
                                    // ['AudId'=> $AudId],
                                    [
                                        'UsuId_fk' => Yii::$app->user->identity->id,
                                        'AudMod' => $AudMod,
                                        'AudAcci' => $AudAcci,
                                        'AudDatoAnte' => ' ',
                                        'AudDatoDesp' => $resultId,
                                        'AudIp'=> $AudIp,
                                        'AudFechHora'=> $AudFechHora,
                                    ])
                                    ->execute();
        }
    }

}
