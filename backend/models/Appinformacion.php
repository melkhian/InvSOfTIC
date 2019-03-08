<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "appinformacion".
 *
 * @property int $AInfId Id
 * @property string $AInfNombServBd Nombre Servidor de BD
 * @property string $AInfUsua Usuario
 * @property string $AInfNombBd Nombre BD
 * @property string $AInfRuta Ruta
 * @property string $AInfEspaActu Espacio en disco (Actual)
 * @property string $AInfProy Proyección a 3 años
 * @property string $TiposId_fk25 Método de backup
 * @property string $AInfOtroCual25 Cuál
 * @property string $AInfPoliBack Política de backup
 * @property string $TiposId_fk26 Periocidad
 * @property string $TiposId_fk27 Medio de almacenamiento
 * @property string $AInfOtroCual27 Cuál
 * @property string $TiposId_fk28 Licenciamiento de BD
 * @property string $AInfOtroCual28 Cuál
 * @property string $AInfCantLice Cantidad de licencias
 * @property int $AppId_fk Aplicación
 *
 * @property Aplicaciones $appIdFk
 */
class Appinformacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'appinformacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AInfNombServBd', 'AInfUsua', 'AInfNombBd', 'AInfRuta', 'AInfEspaActu', 'AInfProy', 'TiposId_fk25', 'AInfOtroCual25', 'AInfPoliBack', 'TiposId_fk26', 'TiposId_fk27', 'AInfOtroCual27', 'TiposId_fk28', 'AInfOtroCual28', 'AInfCantLice'], 'required'],
            [['AppId_fk'], 'integer'],
            [['AInfNombServBd', 'AInfUsua', 'AInfNombBd', 'AInfRuta', 'AInfOtroCual25', 'AInfPoliBack', 'AInfOtroCual27', 'AInfOtroCual28'], 'string', 'max' => 100],
            [['AInfEspaActu', 'AInfProy', 'TiposId_fk25', 'TiposId_fk26', 'TiposId_fk27', 'TiposId_fk28', 'AInfCantLice'], 'string', 'max' => 50],
            [['AppId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Aplicaciones::className(), 'targetAttribute' => ['AppId_fk' => 'AppId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'AInfId' => 'Id',
            'AInfNombServBd' => 'Nombre Servidor de BD',
            'AInfUsua' => 'Usuario',
            'AInfNombBd' => 'Nombre BD',
            'AInfRuta' => 'Ruta',
            'AInfEspaActu' => 'Espacio en disco (Actual)',
            'AInfProy' => 'Proyección a 3 años',
            'TiposId_fk25' => 'Método de backup',
            'AInfOtroCual25' => 'Cuál',
            'AInfPoliBack' => 'Política de backup',
            'TiposId_fk26' => 'Periocidad',
            'TiposId_fk27' => 'Medio de almacenamiento',
            'AInfOtroCual27' => 'Cuál',
            'TiposId_fk28' => 'Licenciamiento de BD',
            'AInfOtroCual28' => 'Cuál',
            'AInfCantLice' => 'Cantidad de licencias',
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
