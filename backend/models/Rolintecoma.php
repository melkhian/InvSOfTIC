<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rolintecoma".
 *
 * @property int $RIComId Id
 * @property int $RolId_fk Rol
 * @property int $IComid_fk Funcionalidad
 *
 * @property Roles $rolIdFk
 * @property Intecoma $iComidFk
 */
class Rolintecoma extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rolintecoma';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['RolId_fk', 'IComid_fk'], 'required'],
            [['RolId_fk', 'IComid_fk'], 'integer'],
            [['RolId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Roles::className(), 'targetAttribute' => ['RolId_fk' => 'RolId']],
            [['IComid_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Intecoma::className(), 'targetAttribute' => ['IComid_fk' => 'IcomId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'RIComId' => 'Id',
            'RolId_fk' => 'Rol',
            'IComid_fk' => 'Funcionalidad',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRolIdFk()
    {
        return $this->hasOne(Roles::className(), ['RolId' => 'RolId_fk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIComidFk()
    {
        return $this->hasOne(Intecoma::className(), ['IcomId' => 'IComid_fk']);
    }

    //Cambió para mostrar en grilla los valores descriptivos de las llaves foráneas

    public function RolId_fk()
    {
        $data = Roles::findOne($this->RolId_fk);

        return $data['RolNomb'];
    }

    public function IComid_fk()
    {
        $data = Intecoma::findOne($this->IComid_fk);

        return $data['IcomFunc'];
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

            if(!isset($changedAttributes['RIComId']))
            {
                $oldAttributes[$i] = "Id => ".$idSelect;
                $i++;
            }
            else
            {
                $oldAttributes[$i] = "Id => ".$changedAttributes['RIComId'];
                $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['RolId_fk']))
            {

            }
            else
            {
                if ($changedAttributes['RolId_fk'] != $rows['RolId_fk'])
                {
                    $oldAttributes[$i] = "Rol => ".$changedAttributes['RolId_fk'];
                    $i++;
                }
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['IComid_fk']))
            {

            }
            else
            {
                if ($changedAttributes['IComid_fk'] != $rows['IComid_fk'])
                {
                $oldAttributes[$i] = "Funcionalidad => ".$changedAttributes['IComid_fk'];
                $i++;
                }
            }

            //---------------------------------------------------------------//            

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
                if ($key == 'RIComId')
                {
                    $var[0] = "Id => ".$rows['RIComId'];
                }

                //---------------------------------------------------------------//

                if ($key == 'RolId_fk' and $value != ($changedAttributes['RolId_fk']))
                {
                    $var[1] = "Rol => ".$rows['RolId_fk'];
                }

                //---------------------------------------------------------------//


                if ($key == 'IComid_fk' and $value != ($changedAttributes['IComid_fk']))
                {
                    $var[2] = "Descripción => ".$rows['IComid_fk'];
                }

                //---------------------------------------------------------------//
                
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
