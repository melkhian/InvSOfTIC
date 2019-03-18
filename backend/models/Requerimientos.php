<?php

namespace backend\models;
use backend\models\AuditTrail;
use Yii;

/**
 * This is the model class for table "requerimientos".
 *
 * @property int $ReqId Id
 * @property int $AppId_fk Aplicación
 * @property string $ReqDesc Descripción
 * @property int $TiposId_fk1 Tipo de Requerimiento
 * @property int $UsuId_fk Funcionario que Aprueba
 * @property int $Tiposid_fk2 ¿Funcionario Aprueba?
 * @property int $TiposId_fk3 ¿Usuario Aprueba?
 * @property string $ReqFechTomaRequ Fecha toma de Requerimiento
 * @property string $ReqFechSist Fecha del sistema
 * @property int $TiposId_fk4 Prioridad
 *
 * @property Estrequerimientos[] $estrequerimientos
 * @property Aplicaciones $appIdFk
 * @property Tipos $tiposIdFk1
 * @property Tipos $tiposidFk2
 * @property Tipos $tiposIdFk3
 * @property Tipos $tiposIdFk4
 * @property User $usuIdFk
 * @property Versdocrequerimientos[] $versdocrequerimientos
 */
class Requerimientos extends \yii\db\ActiveRecord
{

    // public function behaviors()
    // {
    //     return [
    //         'sammaye\audittrail\LoggableBehavior'
    //     ];
    // }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'requerimientos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AppId_fk', 'ReqDesc', 'TiposId_fk1', 'UsuId_fk', 'Tiposid_fk2', 'TiposId_fk3', 'ReqFechTomaRequ', 'ReqFechSist', 'TiposId_fk4'], 'required'],
            [['AppId_fk', 'TiposId_fk1', 'UsuId_fk', 'Tiposid_fk2', 'TiposId_fk3', 'TiposId_fk4'], 'integer'],
            [['ReqFechTomaRequ', 'ReqFechSist'], 'safe'],
            [['ReqDesc'], 'string', 'max' => 50],
            [['AppId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Aplicaciones::className(), 'targetAttribute' => ['AppId_fk' => 'AppId']],
            [['TiposId_fk1'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk1' => 'TiposId']],
            [['Tiposid_fk2'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['Tiposid_fk2' => 'TiposId']],
            [['TiposId_fk3'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk3' => 'TiposId']],
            [['TiposId_fk4'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk4' => 'TiposId']],
            [['UsuId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['UsuId_fk' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ReqId' => 'Id',
            'AppId_fk' => 'Aplicación',
            'ReqDesc' => 'Descripción',
            'TiposId_fk1' => 'Tipo de Requerimiento',
            'UsuId_fk' => 'Funcionario que Aprueba',
            'Tiposid_fk2' => '¿Funcionario Aprueba?',
            'TiposId_fk3' => '¿Usuario Aprueba?',
            'ReqFechTomaRequ' => 'Fecha toma de Requerimiento',
            'ReqFechSist' => 'Fecha del sistema ',
            'TiposId_fk4' => 'Prioridad',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstrequerimientos()
    {
        return $this->hasMany(Estrequerimientos::className(), ['ReqId_fk' => 'ReqId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
     public function getAppIdFk()
     {
         return $this->hasOne(Aplicaciones::className(), ['AppId' => 'AppId_fk']);
     }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk1()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposidFk2()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'Tiposid_fk2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk3()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk3']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk4()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk4']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuIdFk()
    {
        return $this->hasOne(User::className(), ['id' => 'UsuId_fk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVersdocrequerimientos()
    {
        return $this->hasMany(Versdocrequerimientos::className(), ['ReqId_fk' => 'ReqId']);
    }

    //Cambió para mostrar en grilla los valores descriptivos de las llaves foráneas

    public function AppId_fk()
    {
        $data = Aplicaciones::findOne($this->AppId_fk);

        return $data['AppNomb'];
    }

    //Cambió para mostrar en grilla los valores descriptivos de las llaves foráneas

    public function TiposId_fk1()
      {
          $data = Tipos::findOne($this->TiposId_fk1);

          return $data['TiposDesc'];
      }

      public function Tiposid_fk2()
      {
          $data = Tipos::findOne($this->Tiposid_fk2);

          return $data['TiposDesc'];
      }

      public function TiposId_fk3()
      {
          $data = Tipos::findOne($this->TiposId_fk3);

          return $data['TiposDesc'];
      }

      public function TiposId_fk4()
      {
          $data = Tipos::findOne($this->TiposId_fk4);

          return $data['TiposDesc'];
      }

      //Cambió para mostrar en grilla los valores descriptivos de las llaves foráneas

      public function UsuId_fk()
      {
          $data = User::findOne($this->UsuId_fk);

          return $data['username'];
      }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);
        if (!$insert)
        {

            $AudAcci =  'update';
            $table = $this->getTableSchema();
            $pk = $table->primaryKey; //---------------------- [ADepID]
            // echo "<pre>";
            // print_r($table);
            // echo "</pre>";
            // die();
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

            if(!isset($changedAttributes['ReqId']))
            {
                $oldAttributes[$i] = "Id => ".$idSelect;
                $i++;
            }
            else
            {
                $oldAttributes[$i] = "Id => ".$changedAttributes['ReqId'];
                $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['ProId_fk']))
            {

            }
            else
            {
                if ($changedAttributes['ProId_fk'] != $rows['ProId_fk'])
                {
                    $oldAttributes[$i] = "proyecto => ".$changedAttributes['ProId_fk'];
                    $i++;
                }
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['ReqDesc']))
            {

            }
            else
            {
                $oldAttributes[$i] = "Descripción => ".$changedAttributes['ReqDesc'];
                $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk1']))
            {

            }
            else
            {
                if ($changedAttributes['TiposId_fk1'] != $rows['TiposId_fk1'])
                {
                    $oldAttributes[$i] = "tipo => ".$changedAttributes['TiposId_fk1'];
                    $i++;
                }
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['UsuId_fk']))
            {

            }
            else
            {
                if ($changedAttributes['UsuId_fk'] != $rows['UsuId_fk'])
                {
                    $oldAttributes[$i] = "Funcionario => ".$changedAttributes['UsuId_fk'];
                    $i++;
                }
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk2']))
            {

            }
            else
            {
                $oldAttributes[$i] = "Aprueba => ".$changedAttributes['TiposId_fk2'];
                $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk3']))
            {

            }
            else
            {
                if ($changedAttributes['TiposId_fk3'] != $rows['TiposId_fk3'])
                {
                    $oldAttributes[$i] = "UsuApro => ".$changedAttributes['TiposId_fk3'];
                    $i++;
                }
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['ReqFechTomaRequ']))
            {

            }
            else
            {
                $oldAttributes[$i] = "Fecha => ".$changedAttributes['ReqFechTomaRequ'];
                $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['ReqFechSist']))
            {

            }
            else
            {
                $oldAttributes[$i] = "fechasis => ".$changedAttributes['ReqFechSist'];
                $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk4']))
            {

            }
            else
            {
                if ($changedAttributes['TiposId_fk4'] != $rows['TiposId_fk4'])
                {
                    $oldAttributes[$i] = "Prioridad => ".$changedAttributes['TiposId_fk4'];
                    $i++;
                }
            }

            //---------------------------------------------------------------//

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
                if ($key == 'ReqId')
                {
                    $var[0] = "Id => ".$rows['ReqId'];
                }

                //---------------------------------------------------------------//

                if ($key == 'ProId_fk' and $value != ($changedAttributes['ProId_fk']))
                {
                    $var[1] = "proyecto => ".$rows['ProId_fk'];
                }

                //---------------------------------------------------------------//


                if ($key == 'ReqDesc' and isset($changedAttributes['ReqDesc']))
                {
                    $var[2] = "Descripción => ".$rows['ReqDesc'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk1' and $value != ($changedAttributes['TiposId_fk1']))
                {
                    $var[3] = "tipo => ".$rows['TiposId_fk1'];
                }

                //---------------------------------------------------------------//

                if ($key == 'usuIdFk' and isset($changedAttributes['usuIdFk']))
                {
                    $var[4] = "Funcionario => ".$rows['usuIdFk'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk2' and $value != $changedAttributes['TiposId_fk2'])
                {
                    $var[5] = "Aprueba => ".$rows['TiposId_fk2'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk3' and $value != ($changedAttributes['TiposId_fk3']))
                {
                    $var[6] = "UsuApro => ".$rows['TiposId_fk3'];
                }

                //---------------------------------------------------------------//

                if ($key == 'ReqFechTomaRequ' and isset($changedAttributes['ReqFechTomaRequ']))
                {
                    $var[7] = "fecha => ".$rows['ReqFechTomaRequ'];
                }

                //---------------------------------------------------------------//

                if ($key == 'ReqFechSist' and isset($changedAttributes['ReqFechSist']))
                {
                    $var[8] = "fechasis => ".$rows['ReqFechSist'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk4' and $value != ($changedAttributes['TiposId_fk4']))
                {
                    $var[9] = "Prioridad => ".$rows['TiposId_fk4'];
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
            ->from($AudMod)
            ->orderBy($pk[0]." DESC")
            ->createCommand()
            ->execute();

            //---------------------------------------------//

            $queryId = (new \yii\db\Query())
            ->select($pk)
            ->from($AudMod)
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
    // public function behaviors()
    // {
    //     return array(
    //     // Classname => path to Class
    //     'ActiveRecordLogableBehavior'=>
    //         'application.behaviors.ActiveRecordLogableBehavior',
    //     );
    // }

}
?>
