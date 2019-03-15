<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "intecoma".
 *
 * @property int $IcomId Id
 * @property int $IntiId_fk Interfaz
 * @property int $ComId_fk Comando
 * @property string $IcomFunc Funcionalidad
 * @property string $IcomDesc Descripción
 *
 * @property Interfaces $intiIdFk
 * @property Comandos $comIdFk
 * @property Rolintecoma[] $rolintecomas
 */
class Intecoma extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'intecoma';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IntiId_fk', 'ComId_fk', 'IcomFunc'], 'required'],
            [['IntiId_fk', 'ComId_fk'], 'integer'],
            [['IcomFunc'], 'string', 'max' => 50],
            [['IcomDesc'], 'string', 'max' => 100],
            [['IntiId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Interfaces::className(), 'targetAttribute' => ['IntiId_fk' => 'IntId']],
            [['ComId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Comandos::className(), 'targetAttribute' => ['ComId_fk' => 'ComId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IcomId' => 'Id',
            'IntiId_fk' => 'Interfaz',
            'ComId_fk' => 'Comando',
            'IcomFunc' => 'Funcionalidad',
            'IcomDesc' => 'Descripción',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIntiIdFk()
    {
        return $this->hasOne(Interfaces::className(), ['IntId' => 'IntiId_fk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComIdFk()
    {
        return $this->hasOne(Comandos::className(), ['ComId' => 'ComId_fk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRolintecomas()
    {
        return $this->hasMany(Rolintecoma::className(), ['IComid_fk' => 'IcomId']);
    }

    //Cambió para mostrar en grilla los valores descriptivos de las llaves foráneas

    public function IntiId_fk()
    {
        $data = Interfaces::findOne($this->IntiId_fk);

        return $data['IntNomb'];
    }

    //Cambió para mostrar en grilla los valores descriptivos de las llaves foráneas

    public function ComId_fk()
    {
        $data = Comandos::findOne($this->ComId_fk);

        return $data['ComNomb'];
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

            if(!isset($changedAttributes['Icomid']))
            {
                $oldAttributes[$i] = "Id => ".$idSelect;
                $i++;
            }
            else
            {
                $oldAttributes[$i] = "Id => ".$changedAttributes['Icomid'];
                $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['IntiId_fk']))
            {

            }
            else
            {
                if ($changedAttributes['IntiId_fk'] != $rows['IntiId_fk'])
                {
                    $oldAttributes[$i] = "interfaz => ".$changedAttributes['IntiId_fk'];
                    $i++;
                }
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['ComId_fk']))
            {

            }
            else
            {
                if ($changedAttributes['ComId_fk'] != $rows['ComId_fk'])
                {
                $oldAttributes[$i] = "Comando => ".$changedAttributes['ComId_fk'];
                $i++;
                }
            }

            //---------------------------------------------------------------//        

            if(!isset($changedAttributes['IcomFunc']))
            {

            }
            else
            {
                if ($changedAttributes['IcomFunc'] != $rows['IcomFunc'])
                {
                $oldAttributes[$i] = "Funcionalidad => ".$changedAttributes['IcomFunc'];
                $i++;
                }
            }

            //---------------------------------------------------------------//  

            if(!isset($changedAttributes['IcomDesc']))
            {

            }
            else
            {
                if ($changedAttributes['IcomDesc'] != $rows['IcomDesc'])
                {
                $oldAttributes[$i] = "Descripción => ".$changedAttributes['IcomDesc'];
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
                if ($key == 'Icomid')
                {
                    $var[0] = "Id => ".$rows['Icomid'];
                }

                //---------------------------------------------------------------//

                if ($key == 'IntiId_fk' and $value != ($changedAttributes['IntiId_fk']))
                {
                    $var[1] = "Interfaz => ".$rows['IntiId_fk'];
                }

                //---------------------------------------------------------------//


                if ($key == 'ComId_fk' and $value != ($changedAttributes['ComId_fk']))
                {
                    $var[2] = "Comando => ".$rows['ComId_fk'];
                }

                //---------------------------------------------------------------//

                if ($key == 'IcomFunc' and isset($changedAttributes['IcomFunc']))
                {
                    $var[1] = "Funcionalidad => ".$rows['IcomFunc'];
                }

                //---------------------------------------------------------------//


                if ($key == 'IcomDesc' and isset($changedAttributes['IcomDesc']))
                {
                    $var[2] = "Descripción => ".$rows['IcomDesc'];
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
