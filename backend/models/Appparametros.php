<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "appparametros".
 *
 * @property int $AParId Id
 * @property string $AParUrlFuen URL fuente
 * @property string $AParServ Servidor
 * @property string $AParPuer Puerto
 * @property string $AParDirec Directorio
 * @property string $AParObse Obervaciones
 * @property int $AppId_fk Aplicación
 *
 * @property Aplicaciones $appIdFk
 */
class Appparametros extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'appparametros';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AParUrlFuen', 'AParServ', 'AParPuer', 'AParDirec', 'AParObse'], 'required'],
            [['AppId_fk'], 'integer'],
            [['AParUrlFuen', 'AParServ'], 'string', 'max' => 100],
            [['AParPuer'], 'string', 'max' => 20],
            [['AParDirec'], 'string', 'max' => 50],
            [['AParObse'], 'string', 'max' => 200],
            [['AppId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Aplicaciones::className(), 'targetAttribute' => ['AppId_fk' => 'AppId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'AParId' => 'Id',
            'AParUrlFuen' => 'URL fuente',
            'AParServ' => 'Servidor',
            'AParPuer' => 'Puerto',
            'AParDirec' => 'Directorio',
            'AParObse' => 'Observaciones',
            'AppId_fk' => 'Aplicación',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAppIdFk()
    {
        return $this->hasOne(Aplicaciones::className(), ['AppId' => 'AppId_fk']);
    }
}
