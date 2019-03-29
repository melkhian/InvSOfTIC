<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "versdocrequerimientos".
 *
 * @property int $VDReqId
 * @property int $ReqId_fk Requerimiento
 * @property string $VDReqDocu Ruta ubicación de la Versión
 * @property string $VDReqFechSist Fecha sistema
 *
 * @property Requerimientos $reqIdFk
 */
class Versdocrequerimientos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'versdocrequerimientos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['VDReqDocu', 'VDReqFechSist'], 'required'],
            [['ReqId_fk'], 'integer'],
            [['VDReqFechSist'], 'safe'],
            [['VDReqDocu'], 'string', 'max' => 500],
            [['ReqId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Requerimientos::className(), 'targetAttribute' => ['ReqId_fk' => 'ReqId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'VDReqId' => 'Id',
            'ReqId_fk' => 'Requerimiento',
            'VDReqDocu' => 'Ruta ubicación de la Versión',
            'VDReqFechSist' => 'Fecha sistema',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReqIdFk()
    {
        return $this->hasOne(Requerimientos::className(), ['ReqId' => 'ReqId_fk']);
    }

    //Cambió para mostrar en grilla los valores descriptivos de las llaves foráneas

    public function ReqId_fk()
    {
        $data = Requerimientos::findOne($this->ReqId_fk);

        return $data['ReqDesc'];
    }

     public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);
        $insert = $_REQUEST['r'];

        if ($insert == 'requerimientos/update')
        {

            $AudAcci =  'update';
            $table = $this->getTableSchema();
            $pk = $table->primaryKey; //---------------------- [ADepID]
            $idSelect = $_GET['id'];
            $UsuId_fk = Yii::$app->user->identity->id;
            // $AudMod = Yii::$app->controller->id; //------------------ [appdependencias]
            $AudMod = 'versdocrequerimientos';
            $AudIp = Yii::$app->getRequest()->getUserIP();
            $AudFechHora = new \yii\db\Expression('NOW()');
            $connection = Yii::$app->db;

            // print_r($pk);
            // die();
            $MaxId = (new \yii\db\Query())
            ->select($pk)
            ->from('versdocrequerimientos')
            ->orderBy($pk[0]." DESC")
            ->createCommand()
            ->execute();


            $queryAll = (new \yii\db\Query())
            ->select('*')
            ->from('versdocrequerimientos')
            ->where(['VDReqId' => $idSelect])
            ->createCommand();
            $rows = $queryAll->queryAll();
            // $resultAll = implode(",", $rows);
            // print_r($idSelect);
            // die();
            $i=0;

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['VDReqId']))
            {
                $oldAttributes[$i] = "Id => ".$idSelect;
                $i++;
            }
            else
            {
                $oldAttributes[$i] = "Id => ".$changedAttributes['VDReqId'];
                $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['ReqId_fk']))
            {

            }
            else
            {
                if ($changedAttributes['ReqId_fk'] != $rows['ReqId_fk'])
                {
                    $oldAttributes[$i] = "Requerimiento => ".$changedAttributes['ReqId_fk'];
                    $i++;
                }
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['VDReqDocu']))
            {

            }
            else
            {
                $oldAttributes[$i] = "Ruta => ".$changedAttributes['VDReqDocu'];
                $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['VDReqFechSist']))
            {

            }
            else
            {
                if ($changedAttributes['VDReqFechSist'] != $rows['VDReqFechSist'])
                {
                    $oldAttributes[$i] = "fechasis => ".$changedAttributes['VDReqFechSist'];
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
            // print_r($rows);
            // die();

            foreach ($rows as $key => $value)
            {
                if ($key == 'VDReqId')
                {
                    $var[0] = "Id => ".$rows['VDReqId'];
                }

                //---------------------------------------------------------------//

                if ($key == 'ReqId_fk' and $value != ($changedAttributes['ReqId_fk']))
                {
                    $var[1] = "Requerimiento => ".$rows['ReqId_fk'];
                }

                //---------------------------------------------------------------//


                if ($key == 'VDReqDocu' and isset($changedAttributes['VDReqDocu']))
                {
                    $var[2] = "Ruta => ".$rows['VDReqDocu'];
                }

                //---------------------------------------------------------------//

                if ($key == 'VDReqFechSist' and isset($changedAttributes['VDReqFechSist']))
                {
                    $var[3] = "fechasis => ".$rows['VDReqFechSist'];
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

        if ($insert == 'requerimientos/create')
        {
            $connection = Yii::$app->db;
            $AudAcci =  'create';
            $table = $this->getTableSchema();
            $pk = $table->primaryKey;
            $UsuId_fk = Yii::$app->user->identity->id;
            // $AudMod = Yii::$app->controller->id; //------------------ [appdependencias]
            $AudMod = 'versdocrequerimientos';
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
