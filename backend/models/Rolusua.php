<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rolusua".
 *
 * @property int $RUsuId Id
 * @property int $RolId_fk Rol
 * @property int $UsuId_fk Usuario
 * @property string $RUsuCadu Fecha de Caducidad
 *
 * @property Roles $rolIdFk
 * @property User $usuIdFk
 */
class Rolusua extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rolusua';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['RolId_fk', 'UsuId_fk', 'RUsuCadu'], 'required'],
            [['RolId_fk', 'UsuId_fk'], 'integer'],
            [['RUsuCadu'], 'safe'],
            [['RolId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Roles::className(), 'targetAttribute' => ['RolId_fk' => 'RolId']],
            [['UsuId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['UsuId_fk' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'RUsuId' => 'Id',
            'RolId_fk' => 'Rol',
            'UsuId_fk' => 'Usuario',
            'RUsuCadu' => 'Fecha de Caducidad',
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
    public function getUsuIdFk()
    {
        return $this->hasOne(User::className(), ['id' => 'UsuId_fk']);
    }

    //Cambió para mostrar en grilla los valores descriptivos de las llaves foráneas

    public function RolId_fk()
    {
        $data = Roles::findOne($this->RolId_fk);

        return $data['RolNomb'];
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

            if(!isset($changedAttributes['RUsuId']))
            {
                $oldAttributes[$i] = "Id => ".$idSelect;
                $i++;
            }
            else
            {
                $oldAttributes[$i] = "Id => ".$changedAttributes['RUsuId'];
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

            if(!isset($changedAttributes['UsuId_fk']))
            {

            }
            else
            {
                if ($changedAttributes['UsuId_fk'] != $rows['UsuId_fk'])
                {
                $oldAttributes[$i] = "Funcionalidad => ".$changedAttributes['UsuId_fk'];
                $i++;
                }
            }

            //---------------------------------------------------------------//            

             if(!isset($changedAttributes['RUsuCadu']))
            {

            }
            else
            {
                if ($changedAttributes['RUsuCadu'] != $rows['RUsuCadu'])
                {
                $oldAttributes[$i] = "Funcionalidad => ".$changedAttributes['RUsuCadu'];
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
                if ($key == 'RUsuId')
                {
                    $var[0] = "Id => ".$rows['RUsuId'];
                }

                //---------------------------------------------------------------//

                if ($key == 'RolId_fk' and $value != ($changedAttributes['RolId_fk']))
                {
                    $var[1] = "Rol => ".$rows['RolId_fk'];
                }

                //---------------------------------------------------------------//


                if ($key == 'UsuId_fk' and isset($changedAttributes['UsuId_fk']))
                {
                    $var[2] = "Descripción => ".$rows['UsuId_fk'];
                }

                //---------------------------------------------------------------//

                if ($key == 'RUsuCadu' and isset($changedAttributes['RUsuCadu']))
                {
                    $var[3] = "Descripción => ".$rows['RUsuCadu'];
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
