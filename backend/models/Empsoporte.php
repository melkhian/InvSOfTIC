<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "empsoporte".
 *
 * @property int $ESopId Id
 * @property string $ESopNit NIT
 * @property string $ESopNomb Nombre
 * @property string $ESopDire Dirección
 * @property string $ESopCont Persona Contacto
 * @property int $TiposId_fk1 Cargo de la persona contacto
 * @property string $ESopTelePers Teléfono Contacto
 * @property string $ESopTeleOfic Número de teléfono oficina del contacto
 * @property string $ESopCorr Correo Contacto
 * @property int $TiposId_fk2 Tipo de Empresa
 *
 * @property Aplicaciones[] $aplicaciones
 * @property Aplicaciones[] $aplicaciones0
 * @property Tipos $tiposIdFk1
 * @property Tipos $tiposIdFk2
 */
class Empsoporte extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'empsoporte';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ESopNit', 'ESopNomb', 'ESopDire', 'ESopCont', 'TiposId_fk1', 'ESopTelePers', 'ESopTeleOfic', 'ESopCorr', 'TiposId_fk2'], 'required'],
            [['TiposId_fk1', 'TiposId_fk2'], 'integer'],
            [['ESopNit'], 'string', 'max' => 30],
            [['ESopNomb', 'ESopDire', 'ESopCont', 'ESopCorr'], 'string', 'max' => 50],
            [['ESopTelePers', 'ESopTeleOfic'], 'string', 'max' => 50],
            [['TiposId_fk1'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk1' => 'TiposId']],
            [['TiposId_fk2'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk2' => 'TiposId']],
            [['ESopNit', 'ESopCorr'], 'unique'],
            [['ESopCorr'], 'email'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ESopId' => 'Id',
            'ESopNit' => 'NIT',
            'ESopNomb' => 'Nombre',
            'ESopDire' => 'Dirección',
            'ESopCont' => 'Persona Contacto',
            'TiposId_fk1' => 'Cargo de la persona contacto',
            'ESopTelePers' => 'Teléfono Contacto',
            'ESopTeleOfic' => 'Teléfono oficina del contacto',
            'ESopCorr' => 'Correo Contacto',
            'TiposId_fk2' => 'Tipo de Empresa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAplicaciones()
    {
        return $this->hasMany(Aplicaciones::className(), ['ESopId1' => 'ESopId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAplicaciones0()
    {
        return $this->hasMany(Aplicaciones::className(), ['ESopId2' => 'ESopId']);
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
    public function getTiposIdFk2()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk2']);
    }

    public function TiposId_fk1()
        {
            $data = Tipos::findOne($this->TiposId_fk1);

            return $data['TiposDesc'];
        }

            public function TiposId_fk2()
        {
            $data = Tipos::findOne($this->TiposId_fk2);

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

            if(!isset($changedAttributes['ESopId']))
            {
                $oldAttributes[$i] = "Id => ".$idSelect;
                $i++;
            }
            else
            {
                $oldAttributes[$i] = "Id => ".$changedAttributes['ESopId'];
                $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['ESopNit']))
            {

            }
            else
            {
                if ($changedAttributes['ESopNit'] != $rows['ESopNit'])
                {
                    $oldAttributes[$i] = "nit => ".$changedAttributes['ESopNit'];
                    $i++;
                }
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['ESopNomb']))
            {

            }
            else
            {
                $oldAttributes[$i] = "nombre => ".$changedAttributes['ESopNomb'];
                $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['ESopDire']))
            {

            }
            else
            {
                if ($changedAttributes['ESopDire'] != $rows['ESopDire'])
                {
                    $oldAttributes[$i] = "direccion => ".$changedAttributes['ESopDire'];
                    $i++;
                }
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['ESopCont']))
            {

            }
            else
            {
                if ($changedAttributes['ESopCont'] != $rows['ESopCont'])
                {
                    $oldAttributes[$i] = "contacto => ".$changedAttributes['ESopCont'];
                    $i++;
                }
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['tiposid_fk1']))
            {

            }
            else
            {
                $oldAttributes[$i] = "cargo => ".$changedAttributes['tiposid_fk1'];
                $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['ESopTelePers']))
            {

            }
            else
            {
                if ($changedAttributes['ESopTelePers'] != $rows['ESopTelePers'])
                {
                    $oldAttributes[$i] = "Telefono => ".$changedAttributes['ESopTelePers'];
                    $i++;
                }
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['ESopTeleOfic']))
            {

            }
            else
            {
                $oldAttributes[$i] = "oficina => ".$changedAttributes['ESopTeleOfic'];
                $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['ESopCorr']))
            {

            }
            else
            {
                $oldAttributes[$i] = "correo => ".$changedAttributes['ESopCorr'];
                $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk2']))
            {

            }
            else
            {
                if ($changedAttributes['TiposId_fk2'] != $rows['TiposId_fk2'])
                {
                    $oldAttributes[$i] = "tipo => ".$changedAttributes['TiposId_fk2'];
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
                if ($key == 'ESopId')
                {
                    $var[0] = "Id => ".$rows['ESopId'];
                }

                //---------------------------------------------------------------//

                if ($key == 'ESopNit' and isset($changedAttributes['ESopNit']))
                {
                    $var[1] = "nit => ".$rows['ESopNit'];
                }

                //---------------------------------------------------------------//


                if ($key == 'ESopNomb' and isset($changedAttributes['ESopNomb']))
                {
                    $var[2] = "nombre => ".$rows['ESopNomb'];
                }

                //---------------------------------------------------------------//

                if ($key == 'ESopDire' and isset($changedAttributes['ESopDire']))
                {
                    $var[3] = "direccion => ".$rows['ESopDire'];
                }

                //---------------------------------------------------------------//

                if ($key == 'ESopCont' and isset($changedAttributes['ESopCont']))
                {
                    $var[4] = "contacto => ".$rows['ESopCont'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk1' and $value != $changedAttributes['TiposId_fk1'])
                {
                    $var[5] = "cargo => ".$rows['TiposId_fk1'];
                }

                //---------------------------------------------------------------//

                if ($key == 'ESopTelePers' and isset($changedAttributes['ESopTelePers']))
                {
                    $var[6] = "celular => ".$rows['ESopTelePers'];
                }

                //---------------------------------------------------------------//

                if ($key == 'ESopTeleOfic' and isset($changedAttributes['ESopTeleOfic']))
                {
                    $var[7] = "telefono => ".$rows['ESopTeleOfic'];
                }

                //---------------------------------------------------------------//

                if ($key == 'ESopCorr' and isset($changedAttributes['ESopCorr']))
                {
                    $var[8] = "correo => ".$rows['ESopCorr'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk2' and $value != ($changedAttributes['TiposId_fk2']))
                {
                    $var[9] = "tipo => ".$rows['TiposId_fk2'];
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
}
