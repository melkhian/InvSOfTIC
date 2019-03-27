<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%auditorias}}".
 *
 * @property int $AudId Id
 * @property int $UsuId_fk Usuario
 * @property string $AudMod Modelo
 * @property string $AudAcci Acción
 * @property string $AudDatoAnte Dato Anterior
 * @property string $AudDatoDesp Dato Actual
 * @property string $AudIp Ip
 * @property string $AudFechHora Fecha Acción
 *
 * @property User $usuIdFk
 */
class Auditorias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%auditorias}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['UsuId_fk', 'AudMod', 'AudAcci', 'AudDatoAnte', 'AudDatoDesp', 'AudIp', 'AudFechHora'], 'required'],
            [['UsuId_fk'], 'integer'],
            [['AudFechHora'], 'safe'],
            [['AudMod'], 'string', 'max' => 200],
            [['AudAcci', 'AudIp'], 'string', 'max' => 100],
            [['AudDatoDesp', 'AudDatoAnte'], 'string', 'max' => 5000],
            [['UsuId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['UsuId_fk' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'AudId' => 'Id',
            'UsuId_fk' => 'Usuario',
            'AudMod' => 'Modelo',
            'AudAcci' => 'Acción',
            'AudDatoAnte' => 'Dato Anterior',
            'AudDatoDesp' => 'Dato Actual',
            'AudIp' => 'Ip',
            'AudFechHora' => 'Fecha Acción',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuIdFk()
    {
        return $this->hasOne(User::className(), ['id' => 'UsuId_fk']);
    }

        public function UsuId_fk()
    {
        $data = User::findOne($this->UsuId_fk);

        return $data['username'];
    }

    //     public function AudMod()
    // {
    //     $data = Auditorias::findOne($this->AudMod);

    //     return $data['AudMod'];
    // }

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

            if(!isset($changedAttributes['AudId']))
            {
                $oldAttributes[$i] = "Id => ".$idSelect;
                $i++;
            }
            else
            {
                $oldAttributes[$i] = "Id => ".$changedAttributes['AudId'];
                $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['UsuId_fk']))
            {

            }
            else
            {
                if ($changedAttributes['UsuId_fk'] != $rows['UsuId_fk'])
                {
                    $oldAttributes[$i] = "Usuario => ".$changedAttributes['UsuId_fk'];
                    $i++;
                }
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AudMod']))
            {

            }
            else
            {
                if ($changedAttributes['AudMod'] != $rows['AudMod'])
                {
                $oldAttributes[$i] = "Modelo => ".$changedAttributes['AudMod'];
                $i++;
                }
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AudAcci']))
            {

            }
            else
            {
                if ($changedAttributes['AudAcci'] != $rows['AudAcci'])
                {
                $oldAttributes[$i] = "Acción => ".$changedAttributes['AudAcci'];
                $i++;
                }
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AudDatoAnte']))
            {

            }
            else
            {
                if ($changedAttributes['AudDatoAnte'] != $rows['AudDatoAnte'])
                {
                $oldAttributes[$i] = "DA => ".$changedAttributes['AudDatoAnte'];
                $i++;
                }
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AudDatoDesp']))
            {

            }
            else
            {
                if ($changedAttributes['AudDatoDesp'] != $rows['AudDatoDesp'])
                {
                $oldAttributes[$i] = "DD => ".$changedAttributes['AudDatoDesp'];
                $i++;
                }
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AudIp']))
            {

            }
            else
            {
                if ($changedAttributes['AudIp'] != $rows['AudIp'])
                {
                $oldAttributes[$i] = "Ip => ".$changedAttributes['AudIp'];
                $i++;
                }
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AudFechHora']))
            {

            }
            else
            {
                if ($changedAttributes['AudFechHora'] != $rows['AudFechHora'])
                {
                $oldAttributes[$i] = "Fecha => ".$changedAttributes['AudFechHora'];
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
                if ($key == 'AudId')
                {
                    $var[0] = "Id => ".$rows['AudId'];
                }

                //---------------------------------------------------------------//

                if ($key == 'UsuId_fk' and $value != ($changedAttributes['UsuId_fk']))
                {
                    $var[1] = "User => ".$rows['UsuId_fk'];
                }

                //---------------------------------------------------------------//


                if ($key == 'AudMod' and isset($changedAttributes['AudMod']))
                {
                    $var[2] = "Modelo => ".$rows['AudMod'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AudAcci' and isset($changedAttributes['AudAcci']))
                {
                    $var[3] = "Accion => ".$rows['AudAcci'];
                }

                //---------------------------------------------------------------//


                if ($key == 'AudDatoAnte' and isset($changedAttributes['AudDatoAnte']))
                {
                    $var[4] = "DA => ".$rows['AudDatoAnte'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AudDatoDesp' and isset($changedAttributes['AudDatoDesp']))
                {
                    $var[5] = "DD => ".$rows['AudDatoDesp'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AudIp' and isset($changedAttributes['AudIp']))
                {
                    $var[6] = "Ip => ".$rows['AudIp'];
                }

                //---------------------------------------------------------------//


                if ($key == 'AudFechHora' and isset($changedAttributes['AudFechHora']))
                {
                    $var[7] = "Fecha => ".$rows['AudFechHora'];
                }

                //--------------------------------------------------------------

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
}
