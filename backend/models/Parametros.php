<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%parametros}}".
 *
 * @property int $ParId Id
 * @property string $ParContenido Contenido
 * @property string $ParHead Imagen del Header
 * @property string $ParFoot Imagen del Footer
 * @property int $ParMult Número de multisesiones permitidas
 * @property int $ParFall Número de intentos fallidos antes de bloquear Usuario
 * @property int $TiposId_fk Estado del Aplicativo
 * @property string $ParNemo Nemotecnia configurable de Contraseña
 * @property int $ParTiemExpi Tiempo Expiración
 *
 * @property Tipos $tiposIdFk
 */
class Parametros extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%parametros}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ParContenido', 'ParHead', 'ParFoot', 'ParMult', 'ParFall', 'TiposId_fk', 'ParNemo', 'ParTiemExpi'], 'required'],
            [['ParMult', 'ParFall', 'TiposId_fk', 'ParTiemExpi'], 'integer'],
            [['ParContenido', 'ParHead', 'ParFoot'], 'string', 'max' => 200],
            [['ParNemo'], 'string', 'max' => 50],
            [['TiposId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk' => 'TiposId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
          'ParId' => 'Id',
          'ParContenido' => 'Par Contenido',
           'ParHead' => 'Imagen del Header',
           'ParFoot' => 'Imagen del Footer',
           'ParMult' => 'Número de multisesiones permitidas',
           'ParFall' => 'Número de intentos fallidos antes de bloquear Usuario',
           'TiposId_fk' => 'Estado del Aplicativo',
           'ParNemo' => 'Nemotecnia configurable de Contraseña',
           'ParTiemExpi' => 'Tiempo de Expiración de Sesión',
            // 'ParId' => 'Par ID',
            // 'ParContenido' => 'Par Contenido',
            // 'ParHead' => 'Par Head',
            // 'ParFoot' => 'Par Foot',
            // 'ParMult' => 'Par Mult',
            // 'ParFall' => 'Par Fall',
            // 'TiposId_fk' => 'Tipos Id Fk',
            // 'ParNemo' => 'Par Nemo',
            // 'ParTiemExpi' => 'Par Tiem Expi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk']);
    }

//Cambió para mostrar en grilla los valores descriptivos de las llaves foráneas

   public function TiposId_fk()
   {
       $data = Tipos::findOne($this->TiposId_fk);

       return $data['TiposDesc'];
   }

    public function afterSave($insert, $changedAttributes)
   {
       parent::afterSave($insert, $changedAttributes);
       if (!$insert)
       {

           $AudAcci = 'update';
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

           if(!isset($changedAttributes['ParId']))
           {
               $oldAttributes[$i] = "Id => ".$idSelect;
               $i++;
           }
           else
           {
               $oldAttributes[$i] = "Id => ".$changedAttributes['ParId'];
               $i++;
           }

           //---------------------------------------------------------------//

           if(!isset($changedAttributes['ParContenido']))
           {

           }
           else
           {
               if ($changedAttributes['ParContenido'] != $rows['ParContenido'])
               {
                   $oldAttributes[$i] = "Header => ".$changedAttributes['ParContenido'];
                   $i++;
               }
           }

           //---------------------------------------------------------------//

           if(!isset($changedAttributes['ParHead']))
           {

           }
           else
           {
               if ($changedAttributes['ParHead'] != $rows['ParHead'])
               {
                   $oldAttributes[$i] = "Header => ".$changedAttributes['ParHead'];
                   $i++;
               }
           }

           //---------------------------------------------------------------//

           if(!isset($changedAttributes['ParFoot']))
           {

           }
           else
           {
               if ($changedAttributes['ParFoot'] != $rows['ParFoot'])
               {
               $oldAttributes[$i] = "Footer => ".$changedAttributes['ParFoot'];
               $i++;
               }
           }

           //---------------------------------------------------------------//

           if(!isset($changedAttributes['ParMult']))
           {

           }
           else
           {
               if ($changedAttributes['ParMult'] != $rows['ParMult'])
               {
               $oldAttributes[$i] = "MultiSe => ".$changedAttributes['ParMult'];
               $i++;
               }
           }

           //---------------------------------------------------------------//

           if(!isset($changedAttributes['ParFall']))
           {

           }
           else
           {
               if ($changedAttributes['ParFall'] != $rows['ParFall'])
               {
               $oldAttributes[$i] = "Intentos => ".$changedAttributes['ParFall'];
               $i++;
               }
           }

           //---------------------------------------------------------------//

           if(!isset($changedAttributes['TiposId_fk']))
           {

           }
           else
           {
               if ($changedAttributes['TiposId_fk'] != $rows['TiposId_fk'])
               {
               $oldAttributes[$i] = "Estado => ".$changedAttributes['TiposId_fk'];
               $i++;
               }
           }

           //---------------------------------------------------------------//

           if(!isset($changedAttributes['ParNemo']))
           {

           }
           else
           {
               if ($changedAttributes['ParNemo'] != $rows['ParNemo'])
               {
               $oldAttributes[$i] = "Nemotecnia => ".$changedAttributes['ParNemo'];
               $i++;
               }
           }

           //---------------------------------------------------------------//

           if(!isset($changedAttributes['ParTiemExpi']))
           {

           }
           else
           {
               if ($changedAttributes['ParTiemExpi'] != $rows['ParTiemExpi'])
               {
               $oldAttributes[$i] = "tiemexp => ".$changedAttributes['ParTiemExpi'];
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
               if ($key == 'ParId')
               {
                   $var[0] = "Id => ".$rows['ParId'];
               }

               //---------------------------------------------------------------//

               if ($key == 'ParContenido' and isset($changedAttributes['ParContenido']))
               {
                   $var[1] = "Header => ".$rows['ParContenido'];
               }

               //---------------------------------------------------------------//

               if ($key == 'ParHead' and isset($changedAttributes['ParHead']))
               {
                   $var[2] = "Header => ".$rows['ParHead'];
               }

               //---------------------------------------------------------------//


               if ($key == 'ParFoot' and isset($changedAttributes['ParFoot']))
               {
                   $var[3] = "Footer => ".$rows['ParFoot'];
               }

               //---------------------------------------------------------------//

               if ($key == 'ParMult' and $value != ($changedAttributes['ParMult']))
               {
                   $var[4] = "MultiSe => ".$rows['ParMult'];
               }

               //---------------------------------------------------------------//


               if ($key == 'ParFall' and $value != ($changedAttributes['ParFall']))
               {
                   $var[5] = "Intentos => ".$rows['ParFall'];
               }

               //---------------------------------------------------------------//

               if ($key == 'TiposId_fk' and $value != ($changedAttributes['TiposId_fk']))
               {
                   $var[6] = "Estado => ".$rows['TiposId_fk'];
               }

               //---------------------------------------------------------------//

               if ($key == 'ParNemo' and isset($changedAttributes['ParNemo']))
               {
                   $var[7] = "Nemotecnia => ".$rows['ParNemo'];
               }

               //---------------------------------------------------------------//


               if ($key == 'ParTiemExpi' and $value != ($changedAttributes['ParTiemExpi']))
               {
                   $var[8] = "tiemexp => ".$rows['ParTiemExpi'];
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
           $AudAcci = 'create';
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
