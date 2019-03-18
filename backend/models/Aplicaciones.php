<?php

namespace backend\models;

use Yii;
/**
* This is the model class for table "aplicaciones".
*
* @property int $AppId Id
* @property string $AppNomb Nombre
* @property string $AppDesc Descripción
* @property string $AppSigl Sigla o Acrónimo
* @property string $AppVers Versión de la aplicación
* @property int $ESopId1 Desarrollador o Proveedor
* @property string $AppUrl URL de acceso
* @property string $TiposId_fk1 Tipo de adquisición
* @property string $TiposId_fk2 Documento de adquisición
* @property string $AppNumeDocuAdqu Número de documento de adquisición
* @property string $AppValoAdqu Valor de adquisición
* @property string $AppFechAdqu Fecha Adquisición
* @property string $TiposId_fk3 Tipo Software
* @property string $AppNombProc Nombre del Proceso
* @property string $AppEnti Entidad o Dependencias Usuarias
* @property string $AppEntiImag Imagen
* @property int $ESopId2 Empresa Soporte
* @property string $AppNombCont Nombre del contacto
* @property string $AppCarg Cargo del contacto
* @property string $AppCorr Correo electrónico
* @property string $AppTeleOfic Teléfono oficina
* @property string $AppTelePers Teléfono personal
* @property string $TiposId_fk4 Entidad, Área
* @property string $AppNombFunc Funcionario
* @property string $AppCarg2 Cargo del funcionario
* @property string $AppCorr2 Correo electrónico
* @property string $AppTeleOfic2 Teléfono oficina
* @property string $AppTelePers2 Teléfono personal
* @property string $AppAcueNiveServ Acuerdos de niveles de servicio
* @property string $TiposId_fk5 Tipo de Puesta
* @property string $AppFechPues Fecha de puesta
* @property string $AppServPues Servidor de puesta
* @property string $AppFechPues1 Fecha salida de calidad
* @property string $AppServPues1 Servidor de calidad
* @property string $AppFechPues2 Fecha salida de producción
* @property string $AppServPues2 Servidor de producción
* @property string $TiposId_fk6 Ámbito de aplicación
* @property string $TiposId_fk7 Propósito de Aplicación
* @property string $TiposId_fk8 Servidor Web
* @property string $AppServWebVers Versión
* @property string $AppOtroCual8 Cuál
* @property string $TiposId_fk9 Código ejecutado en el cliente
* @property string $AppOtroCual9 Cuál
* @property string $TiposId_fk10 Código ejecutado en el servidor
* @property string $AppOtroCual10 Cuál
* @property string $TiposId_fk11 ¿Requiere base de datos?
* @property string $TiposId_fk12 ¿Cuál?
* @property string $AppOtroCual12 Cuál
* @property string $TiposId_fk13 ¿Maneja varios idiomas?
* @property string $TiposId_fk14 ¿Cuál?
* @property string $AppOtroCual14 Cuál
* @property string $TiposId_fk15 ¿Utiliza Manejador de Reportes?
* @property string $TiposId_fk16 ¿Cuál?
* @property string $AppOtroCual16 Cuál
* @property string $TiposId_fk17 ¿Permite exportar datos?
* @property string $TiposId_fk18 ¿Cuál?
* @property string $AppOtroCual18 Cuál
* @property string $TiposId_fk19 ¿Interactúa con otra aplicación?
* @property string $TiposId_fk20 ¿Se tiene código fuente?
* @property string $AppOtroCual20 ¿Dónde está ubicado?
* @property string $TiposId_fk56 Tipo de Licencia
* @property string $AppNumeLice Número de Licencias
* @property string $TiposId_fk21 Interface del Aplicativo
* @property string $AppOtroCual21 Cuál
* @property string $TiposId_fk22 ¿Tiene ayudas en línea?
* @property string $TiposId_fk23 Tipo de SO
* @property string $AppVersDist Versión/Distribución
* @property string $TiposId_fk24 Tipo Arquitectura
* @property string $AppObse8 Observaciones
* @property string $AppObse4 Observaciones
* @property string $AppDireRaiz Directorio Raíz
* @property string $AppObse5 Observaciones
* @property string $AppObse6 Observaciones
* @property string $TiposId_fk29 Plan de Proyecto ¿Se entregó?
* @property string $TiposId_fk30 Plan de Proyecto ¿Se aprobó?
* @property string $TiposId_fk31 Plan de Proyecto Medio
* @property string $TiposId_fk32 Definición y Alcance ¿Se entregó?
* @property string $TiposId_fk33 Definición y Alcance ¿Se aprobó?
* @property string $TiposId_fk34 Definición y Alcance Medio
* @property string $TiposId_fk35 Documento de requerimientos ¿Se entregó?
* @property string $TiposId_fk36 Documento de requerimientos ¿Se aprobó?
* @property string $TiposId_fk37 Documento de requerimientos
* @property string $TiposId_fk38 Documento de Diseño ¿Se entregó?
* @property string $TiposId_fk39 Documento de Diseño ¿Se aprobó?
* @property string $TiposId_fk40 Documento de Diseño Medio
* @property string $TiposId_fk41 Documento de Pruebas ¿Se entregó?
* @property string $TiposId_fk42 Documento de Pruebas ¿Se aprobó?
* @property string $TiposId_fk43 Documento de Pruebas Medio
* @property string $TiposId_fk44 Manual Técnico y de Instalación ¿Se entregó?
* @property string $TiposId_fk45 Manual Técnico y de Instalación ¿Se aprobó?
* @property string $TiposId_fk46 Manual Técnico y de Instalación Medio
* @property string $TiposId_fk47 Manual de Administración ¿Se entregó?
* @property string $TiposId_fk48 Manual de Administración ¿Se aprobó?
* @property string $TiposId_fk49 Manual de Administración Medio
* @property string $TiposId_fk50 Manual de Usuario ¿Se entregó?
* @property string $TiposId_fk51 Manual de Usuario ¿Se aprobó?
* @property string $TiposId_fk52 Manual de Usuario Medio
* @property string $TiposId_fk53 ¿Se entregó Medio digital con la información de la aplicación? ¿Se entregó?
* @property string $TiposId_fk54 ¿Se entregó Medio digital con la información de la aplicación? ¿Se aprobó?
* @property string $AppUbic Ubicación
* @property string $TiposId_fk55 Contenido del medio digital
* @property string $AppUbicDocu Ubicación Documentación
* @property string $AppUbicUlti Ubicación última versión del código fuente
* @property string $AppObse7 Observaciones
* @property string $AppActa Archivo acta
* @property string $AppFechApro Fecha de aceptación
*
* @property Empsoporte $eSopId1
* @property Empsoporte $eSopId2
* @property Appaceptacion[] $appaceptacions
* @property Appaplicaciones[] $appaplicaciones
* @property Apparchivos[] $apparchivos
* @property Appbasedatos[] $appbasedatos
* @property Appdependencias[] $appdependencias
* @property Appdirectorios[] $appdirectorios
* @property Apphardware[] $apphardwares
* @property Appinformacion[] $appinformacions
* @property Appinteractua[] $appinteractuas
* @property Appinteractua[] $appinteractuas0
* @property Appmodulos[] $appmodulos
* @property Appparametros[] $appparametros
* @property Appplugins[] $appplugins
* @property Appusuarios[] $appusuarios
* @property Requerimientos[] $requerimientos
*/
class Aplicaciones extends \yii\db\ActiveRecord
{
  /**
  * @inheritdoc
  */
  // NOTE: Variables para el proceso de carga de archivos por parte del usuario
  public $file;

  public static function tableName()
  {
    return 'aplicaciones';
  }

  /**
  * @inheritdoc
  */
  public function rules()

    {
        return [
            [['AppNomb', 'AppDesc', 'AppSigl', 'AppVers', 'ESopId1', 'AppUrl', 'TiposId_fk1', 'TiposId_fk2', 'AppNumeDocuAdqu', 'AppValoAdqu', 'AppFechAdqu', 'TiposId_fk3', 'AppNombProc', 'AppEnti', 'ESopId2', 'AppNombCont', 'AppCarg'], 'required'],
            [['AppCorr', 'AppTeleOfic', 'AppTelePers', 'TiposId_fk4', 'AppNombFunc', 'AppCarg2', 'AppCorr2', 'AppTeleOfic2', 'AppTelePers2', 'AppAcueNiveServ', 'TiposId_fk5', 'TiposId_fk6', 'TiposId_fk7'], 'required'],
            [['TiposId_fk8', 'AppServWebVers','TiposId_fk9', 'TiposId_fk10', 'TiposId_fk11', 'TiposId_fk13', 'TiposId_fk15'], 'required'],
            [['TiposId_fk17', 'TiposId_fk19', 'TiposId_fk20', 'AppNumeLice', 'TiposId_fk21', 'TiposId_fk22', 'TiposId_fk23', 'AppVersDist'], 'required'],
            // [['TiposId_fk24', 'AppObse8','AppObse4'], 'required'],
            [['AppDireRaiz','AppObse3', 'AppObse5', 'AppObse6', 'TiposId_fk29'], 'required'],
            [['TiposId_fk30', 'TiposId_fk31', 'TiposId_fk32', 'TiposId_fk33', 'TiposId_fk34', 'TiposId_fk35', 'TiposId_fk36', 'TiposId_fk37', 'TiposId_fk38', 'TiposId_fk39', 'TiposId_fk40', 'TiposId_fk41', 'TiposId_fk42', 'TiposId_fk43', 'TiposId_fk44'], 'required'],
            [['TiposId_fk45', 'TiposId_fk46', 'TiposId_fk47', 'TiposId_fk48', 'TiposId_fk49', 'TiposId_fk50', 'TiposId_fk51', 'TiposId_fk52', 'TiposId_fk53', 'TiposId_fk54', 'AppUbic', 'TiposId_fk55', 'AppUbicDocu', 'AppUbicUlti', 'AppObse7', 'AppActa'], 'required'],
            [['ESopId1', 'ESopId2'], 'integer'],
            [['AppFechAdqu', 'AppFechPues', 'AppFechPues1', 'AppFechPues2', 'AppFechApro'], 'safe'],
            [['AppNomb', 'AppUrl', 'AppValoAdqu', 'AppNombProc', 'AppNombCont', 'AppCarg', 'AppCorr', 'TiposId_fk4', 'AppNombFunc', 'AppServPues', 'AppServPues1', 'AppServPues2', 'AppOtroCual9', 'AppOtroCual10', 'AppOtroCual12', 'AppOtroCual14', 'AppOtroCual18',
             'TiposId_fk56', 'AppNumeLice', 'AppOtroCual21', 'AppVersDist', 'AppDireRaiz', 'AppActa'], 'string', 'max' => 100],
            [['AppDesc', 'AppEnti', 'AppAcueNiveServ'], 'string', 'max' => 500],
            [['AppSigl', 'AppVers', 'AppNumeDocuAdqu', 'AppTeleOfic', 'AppTelePers', 'AppCarg2', 'AppCorr2', 'AppTeleOfic2', 'AppTelePers2', 'AppServWebVers', 'AppOtroCual8', 'AppOtroCual16'], 'string', 'max' => 50],
            [['TiposId_fk1', 'TiposId_fk2', 'TiposId_fk3', 'TiposId_fk5', 'TiposId_fk6', 'TiposId_fk7', 'TiposId_fk8', 'TiposId_fk9', 'TiposId_fk10', 'TiposId_fk11', 'TiposId_fk12', 'TiposId_fk13', 'TiposId_fk14', 'TiposId_fk15', 'TiposId_fk16', 'TiposId_fk17', 'TiposId_fk18', 'TiposId_fk19', 'TiposId_fk20', 'TiposId_fk21', 'TiposId_fk22', 'TiposId_fk23', 'TiposId_fk24','TiposId_fk29', 'TiposId_fk30', 'TiposId_fk31', 'TiposId_fk32', 'TiposId_fk33', 'TiposId_fk34', 'TiposId_fk35', 'TiposId_fk36', 'TiposId_fk37', 'TiposId_fk38', 'TiposId_fk39', 'TiposId_fk40', 'TiposId_fk41', 'TiposId_fk42', 'TiposId_fk43', 'TiposId_fk44', 'TiposId_fk45', 'TiposId_fk46', 'TiposId_fk47', 'TiposId_fk48', 'TiposId_fk49', 'TiposId_fk50', 'TiposId_fk51', 'TiposId_fk52', 'TiposId_fk53', 'TiposId_fk54', 'TiposId_fk55'], 'string', 'max' => 20],
            [['AppOtroCual20','AppObse3',  'AppObse4', 'AppObse5', 'AppObse6', 'AppUbic', 'AppUbicDocu', 'AppUbicUlti', 'AppObse7', 'AppObse8', 'AppEntiImag'], 'string', 'max' => 500],
            [['file'],'file', 'skipOnEmpty' => true, 'maxFiles' => 10,'extensions' => 'pdf, doc, docx'],
            // [['file'], 'required'],
            [['ESopId1'], 'exist', 'skipOnError' => true, 'targetClass' => Empsoporte::className(), 'targetAttribute' => ['ESopId1' => 'ESopId']],
            [['ESopId2'], 'exist', 'skipOnError' => true, 'targetClass' => Empsoporte::className(), 'targetAttribute' => ['ESopId2' => 'ESopId']],
        ];
    }

  /**
  * @inheritdoc
  */
  public function attributeLabels()
  {
    return [
      'AppId' => 'Id',
      'AppNomb' => 'Nombre',
      'AppDesc' => 'Descripción',
      'AppSigl' => 'Sigla o Acrónimo',
      'AppVers' => 'Versión de la aplicación',
      'ESopId1' => 'Desarrollador o Proveedor',
      'AppUrl' => 'URL de acceso',
      'TiposId_fk1' => 'Tipo de adquisición',
      'TiposId_fk2' => 'Documento de adquisición',
      'AppNumeDocuAdqu' => 'Número de documento de adquisición',
      'AppValoAdqu' => 'Valor de adquisición',
      'AppFechAdqu' => 'Fecha Adquisición',
      'TiposId_fk3' => 'Tipo Software',
      'AppNombProc' => 'Nombre del Proceso',
      'AppEnti' => 'Entidad o Dependencias Usuarias',
      'file' => 'Subir archivo',
      'AppEntiImag' => 'Entidad o Dependencias Usuarias (Archivo)',
      'ESopId2' => 'Empresa Soporte',
      'AppNombCont' => 'Nombre del contacto',
      'AppCarg' => 'Cargo del contacto',
      'AppCorr' => 'Correo electrónico',
      'AppTeleOfic' => 'Teléfono oficina',
      'AppTelePers' => 'Teléfono personal',
      'TiposId_fk4' => 'Entidad, Área',
      'AppNombFunc' => 'Funcionario',
      'AppCarg2' => 'Cargo del funcionario',
      'AppCorr2' => 'Correo electrónico',
      'AppTeleOfic2' => 'Teléfono oficina',
      'AppTelePers2' => 'Teléfono personal',
      'AppAcueNiveServ' => 'Acuerdos de niveles de servicio',
      'TiposId_fk5' => 'Tipo de Puesta ',
      'AppFechPues' => 'Fecha salida de desarrollo',
      'AppServPues' => 'Servidor de desarrollo',
      'AppFechPues1' => 'Fecha salida de calidad',
      'AppServPues1' => 'Servidor de calidad',
      'AppFechPues2' => 'Fecha salida de producción',
      'AppServPues2' => 'Servidor de producción',
      'TiposId_fk6' => 'Ámbito de aplicación',
      'TiposId_fk7' => 'Propósito de Aplicación',
      'TiposId_fk8' => 'Servidor Web',
      'AppServWebVers' => 'Versión',
      'AppOtroCual8' => 'Cuál',
      'TiposId_fk9' => 'Código ejecutado en el cliente',
      'AppOtroCual9' => 'Cuál',
      'TiposId_fk10' => 'Código ejecutado en el servidor ',
      'AppOtroCual10' => 'Cuál',
      'TiposId_fk11' => '¿Requiere base de datos?',
      'TiposId_fk12' => '¿Cuál?',
      'AppOtroCual12' => 'Cuál',
      'TiposId_fk13' => '¿Maneja varios idiomas?',
      'TiposId_fk14' => '¿Cuál?',
      'AppOtroCual14' => 'Cuál',
      'TiposId_fk15' => '¿Utiliza Manejador de Reportes?',
      'TiposId_fk16' => '¿Cuál?',
      'AppOtroCual16' => 'Cuál',
      'TiposId_fk17' => '¿Permite exportar datos?',
      'TiposId_fk18' => '¿Cuál?',
      'AppOtroCual18' => 'Cuál',
      'TiposId_fk19' => '¿Interactúa con otra aplicación?',
      'TiposId_fk20' => '¿Se tiene código fuente?',
      'AppOtroCual20' => '¿Dónde está ubicado?',
      'TiposId_fk56' => 'Tipo de Licencia',
      'AppNumeLice' => 'Número de Licencias',
      'TiposId_fk21' => 'Interface del Aplicativo',
      'AppOtroCual21' => 'Cuál',
      'TiposId_fk22' => '¿Tiene ayudas en línea?',
      'TiposId_fk23' => 'Tipo de SO',
      'AppVersDist' => 'Versión/Distribución',
      'TiposId_fk24' => 'Tipo Arquitectura',
      'AppObse8' => 'Observaciones',
      'AppObse3' => 'Observaciones',
      'AppObse4' => 'Observaciones',
      'AppDireRaiz' => 'Directorio Raíz',
      'AppObse5' => 'Observaciones',
      'AppObse6' => 'Observaciones',
      'TiposId_fk29' => 'Plan de Proyecto ¿Se entregó?',
      'TiposId_fk30' => 'Plan de Proyecto ¿Se aprobó?',
      'TiposId_fk31' => 'Plan de Proyecto Medio',
      'TiposId_fk32' => 'Definición y Alcance ¿Se entregó?',
      'TiposId_fk33' => 'Definición y Alcance ¿Se aprobó?',
      'TiposId_fk34' => 'Definición y Alcance Medio ',
      'TiposId_fk35' => 'Documento de requerimientos ¿Se entregó?',
      'TiposId_fk36' => 'Documento de requerimientos ¿Se aprobó?',
      'TiposId_fk37' => 'Documento de requerimientos',
      'TiposId_fk38' => 'Documento de Diseño ¿Se entregó? ',
      'TiposId_fk39' => 'Documento de Diseño ¿Se aprobó?',
      'TiposId_fk40' => 'Documento de Diseño Medio',
      'TiposId_fk41' => 'Documento de Pruebas ¿Se entregó?',
      'TiposId_fk42' => 'Documento de Pruebas ¿Se aprobó?',
      'TiposId_fk43' => 'Documento de Pruebas Medio',
      'TiposId_fk44' => 'Manual Técnico y de Instalación ¿Se entregó?',
      'TiposId_fk45' => 'Manual Técnico y de Instalación ¿Se aprobó?',
      'TiposId_fk46' => 'Manual Técnico y de Instalación Medio',
      'TiposId_fk47' => 'Manual de Administración ¿Se entregó?',
      'TiposId_fk48' => 'Manual de Administración ¿Se aprobó?',
      'TiposId_fk49' => 'Manual de Administración Medio',
      'TiposId_fk50' => 'Manual de Usuario ¿Se entregó?',
      'TiposId_fk51' => 'Manual de Usuario ¿Se aprobó?',
      'TiposId_fk52' => 'Manual de Usuario Medio',
      'TiposId_fk53' => '¿Se entregó Medio digital con la información de la aplicación? ¿Se entregó?',
      'TiposId_fk54' => '¿Se entregó Medio digital con la información de la aplicación? ¿Se aprobó?',
      'AppUbic' => 'Ubicación:',
      'TiposId_fk55' => 'Contenido del medio digital',
      'AppUbicDocu' => 'Ubicación Documentación',
      'AppUbicUlti' => 'Ubicación última versión del código fuente',
      'AppObse7' => 'Observaciones',
      'AppActa' => 'Archivo acta',
      'AppFechApro' => 'Fecha de aceptación',

    ];
  }

  public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);

        if (!$insert)
        {
            $AudAcci =  'update';
            $table = $this->getTableSchema();
            $pk = $table->primaryKey; //---------------------- [APPID]
            $idSelect = $_GET['id'];  //---------------------- [ID] Item Seleccionado
            $UsuId_fk = Yii::$app->user->identity->id; //----- [ID USER]
            $AudMod = Yii::$app->controller->id; //------------------ [appdependencias]
            $AudIp = Yii::$app->getRequest()->getUserIP();//-- [IP USER]
            $AudFechHora = new \yii\db\Expression('NOW()');//- [FECHA]
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


            $i=0;       // variable iteradora
            //$changeAtributes son los datos que cambiaron
            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppId']))
            {
                $oldAttributes[$i] = "Id => ".$idSelect;
                $i++;
            }
            else
            {
                $oldAttributes[$i] = "Id => ".$changedAttributes['AppId'];
                $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppNomb']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Nombre => ".$changedAttributes['AppNomb'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppDesc']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Desc => ".$changedAttributes['AppDesc'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppSigl']))
            {

            }
            else
            {
                $oldAttributes[$i] = "Sigla => ".$changedAttributes['AppSigl'];
                $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppVers']))
            {

            }
            else
            {
                $oldAttributes[$i] = "Versión de la aplicación => ".$changedAttributes['AppVers'];
                $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['ESopId1']))
            {

            }
            else
            {
              if ($changedAttributes['ESopId1'] != $rows['ESopId1'])
              {
                $oldAttributes[$i] = "Desarrollador => ".$changedAttributes['ESopId1'];
                $i++;
              }
            }
            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppUrl ']))
            {

            }
            else
            {
                $oldAttributes[$i] = "Url => ".$changedAttributes['AppUrl '];
                $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk1 ']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Tipo adqui  => ".$changedAttributes['TiposId_fk1 '];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk2']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Doc adqui  => ".$changedAttributes['TiposId_fk2'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppNumeDocuAdqu']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "AppNumeDocuAdqu  => ".$changedAttributes['AppNumeDocuAdqu'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppValoAdqu']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "AppValoAdqu  => ".$changedAttributes['AppValoAdqu'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppFechAdqu']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "AppFechAdqu  => ".$changedAttributes['AppFechAdqu'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk3']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Tipo software  => ".$changedAttributes['TiposId_fk3'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppNombProc']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "AppNombProc => ".$changedAttributes['AppNombProc'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppEnti']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "AppEnti => ".$changedAttributes['AppEnti'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['ESopId2']))
            {

            }
            else
            {
              if ($changedAttributes['ESopId2'] != $rows['ESopId2'])
              {
                $oldAttributes[$i] = "Soporte => ".$changedAttributes['ESopId2'];
                $i++;
              }
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk4']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Entidad => ".$changedAttributes['TiposId_fk4'];
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
                $oldAttributes[$i] = "Funcionario => ".$changedAttributes['UsuId_fk'];
                $i++;
              }
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppAcueNiveServ']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Acuerdos => ".$changedAttributes['AppAcueNiveServ'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk5']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Tipo de Puesta => ".$changedAttributes['TiposId_fk5'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppFechPues']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Fecha de puesta => ".$changedAttributes['AppFechPues'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppServPues']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Servidor de puesta => ".$changedAttributes['AppServPues'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk6']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Ámbito de aplicación => ".$changedAttributes['TiposId_fk6'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk7']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Propósito de Aplicación => ".$changedAttributes['TiposId_fk7'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk8']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Servidor Web => ".$changedAttributes['TiposId_fk8'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppServWebVers']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Versión => ".$changedAttributes['AppServWebVers'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppOtroCual8']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Cual => ".$changedAttributes['AppOtroCual8'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk9']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Código ejecutado en el cliente => ".$changedAttributes['TiposId_fk9'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppOtroCual9']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Cuál => ".$changedAttributes['AppOtroCual9'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk10']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Código ejecutado en el servidor => ".$changedAttributes['TiposId_fk10'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppOtroCual10']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Cuál => ".$changedAttributes['AppOtroCual10'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk11']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Requiere base de datos => ".$changedAttributes['TiposId_fk11'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk12']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Cuál => ".$changedAttributes['TiposId_fk12'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppOtroCual12']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Cuál => ".$changedAttributes['AppOtroCual12'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk13']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Maneja varios idiomas => ".$changedAttributes['TiposId_fk13'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk14']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Cuál => ".$changedAttributes['TiposId_fk14'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppOtroCual14']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Cuál => ".$changedAttributes['AppOtroCual14'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk15']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Utiliza Manejador de Reportes => ".$changedAttributes['TiposId_fk15'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk16']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Cuál => ".$changedAttributes['TiposId_fk16'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppOtroCual16']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Cuál => ".$changedAttributes['AppOtroCual16'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk17']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Permite exportar datos => ".$changedAttributes['TiposId_fk17'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk18']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Cuál => ".$changedAttributes['TiposId_fk18'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppOtroCual18']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Cuál => ".$changedAttributes['AppOtroCual18'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk19']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Interactúa con otra aplicación => ".$changedAttributes['TiposId_fk19'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppOtroCual19']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Cuál => ".$changedAttributes['AppOtroCual19'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk20']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Se tiene código fuente => ".$changedAttributes['TiposId_fk20'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppOtroCual20']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Dónde está ubicado => ".$changedAttributes['AppOtroCual20'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppTipoLice']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Tipo de Licencia => ".$changedAttributes['AppTipoLice'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppNumeLice']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Número de Licencia => ".$changedAttributes['AppNumeLice'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk21']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Interface del Aplicativo => ".$changedAttributes['TiposId_fk21'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk22']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Tiene ayudas en línea => ".$changedAttributes['TiposId_fk22'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk23']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Tipo de SO => ".$changedAttributes['TiposId_fk23'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppVersDist']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Versión/Distribución  => ".$changedAttributes['AppVersDist'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk24']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Tipo Arquitectura => ".$changedAttributes['TiposId_fk24'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppLengServ']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Lenguaje/Servicio => ".$changedAttributes['AppLengServ'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppVersApli']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Versión => ".$changedAttributes['AppVersApli'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppBibl']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Bibliotecas => ".$changedAttributes['AppBibl'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppObse1']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Observaciones => ".$changedAttributes['AppObse1'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppMane']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Manejador => ".$changedAttributes['AppMane'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppVersBD']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Versión => ".$changedAttributes['AppVersBD'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppPuer1']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Puerto => ".$changedAttributes['AppPuer1'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppObse2']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Observaciones => ".$changedAttributes['AppObse2'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppTipoHard']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Tipo Hardware => ".$changedAttributes['AppTipoHard'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppProc']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Procesador => ".$changedAttributes['AppProc'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppMemo']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Memoria => ".$changedAttributes['AppMemo'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppEspaDisc']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Espacio en Disco => ".$changedAttributes['AppEspaDisc'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppObse3']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Observaciones => ".$changedAttributes['AppObse3'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppObse4']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Observaciones => ".$changedAttributes['AppObse4'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppNombServBd']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Nombre Servidor de BD => ".$changedAttributes['AppNombServBd'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppUsua']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Usuario => ".$changedAttributes['AppUsua'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppNombBd']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Nombre BD => ".$changedAttributes['AppNombBd'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppRuta']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Ruta => ".$changedAttributes['AppRuta'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppEspaActu']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Espacio en disco (Actual) => ".$changedAttributes['AppEspaActu'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppProy']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Proyección a 3 años => ".$changedAttributes['AppProy'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk25']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Método de Backup => ".$changedAttributes['TiposId_fk25'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppOtroCual25']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Cuál => ".$changedAttributes['AppOtroCual25'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppPoliBack']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Política de Backup  => ".$changedAttributes['AppPoliBack'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk26']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Periocidad => ".$changedAttributes['TiposId_fk26'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk27']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Medio de Almacenamiento => ".$changedAttributes['TiposId_fk27'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppOtroCual27']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Cuál => ".$changedAttributes['AppOtroCual27'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk28']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Licenciamiento de BD => ".$changedAttributes['TiposId_fk28'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppOtroCual28']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Cuál => ".$changedAttributes['AppOtroCual28'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppCantLice']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Cantidad de licencias => ".$changedAttributes['AppCantLice'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppDireRaiz']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Directorio Raíz => ".$changedAttributes['AppDireRaiz'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppObse5']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Observaciones => ".$changedAttributes['AAppObse5'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppObse6']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Observaciones => ".$changedAttributes['AAppObse6'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk29']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Plan de Proyecto ¿Se entregó? => ".$changedAttributes['TiposId_fk29'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk30']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Plan de Proyecto ¿Se aprobó? => ".$changedAttributes['TiposId_fk30'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk31']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Plan de Proyecto Medio => ".$changedAttributes['TiposId_fk31'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk32']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Definición y Alcance ¿Se entregó => ".$changedAttributes['TiposId_fk32'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk33']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Definición y Alcance ¿Se aprobó => ".$changedAttributes['TiposId_fk33'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk34']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Definición y Alcance Medio => ".$changedAttributes['TiposId_fk34'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk35']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Documento de requerimientos ¿Se entregó? => ".$changedAttributes['TiposId_fk35'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk36']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Documento de requerimientos ¿Se aprobó? => ".$changedAttributes['TiposId_fk36'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk37']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Documento de requerimientos => ".$changedAttributes['TiposId_fk37'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk38']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Documento de Diseño ¿Se entregó? => ".$changedAttributes['TiposId_fk38'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk39']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Documento de Diseño ¿Se aprobó? => ".$changedAttributes['TiposId_fk39'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk40']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Documento de Diseño Medio => ".$changedAttributes['TiposId_fk40'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk41']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Documento de Pruebas ¿Se entregó? => ".$changedAttributes['TiposId_fk41'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk42']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Documento de Pruebas ¿Se aprobó? => ".$changedAttributes['TiposId_fk42'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk43']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Documento de Pruebas Medio => ".$changedAttributes['TiposId_fk43'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk44']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Manual Técnico y de Instalación ¿Se entregó? => ".$changedAttributes['TiposId_fk44'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk45']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Manual Técnico y de Instalación ¿Se aprobó? => ".$changedAttributes['TiposId_fk45'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk46']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Manual Técnico y de Instalación Medio => ".$changedAttributes['TiposId_fk46'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk47']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Manual de Administración ¿Se entregó? => ".$changedAttributes['TiposId_fk47'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk48']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Manual de Administración ¿Se aprobó? => ".$changedAttributes['TiposId_fk48'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk49']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Manual de Administración Medio => ".$changedAttributes['TiposId_fk49'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk50']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Manual de Usuario ¿Se entregó? => ".$changedAttributes['TiposId_fk50'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk51']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Manual de Usuario ¿Se aprobó? => ".$changedAttributes['TiposId_fk51'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk52']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Manual de Usuario Medio => ".$changedAttributes['TiposId_fk52'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk53']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "¿Se entregó Medio digital con la información de la aplicación? ¿Se entregó?
                     => ".$changedAttributes['TiposId_fk53'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk54']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "¿Se entregó Medio digital con la información de la aplicación? ¿Se aprobó?
                     => ".$changedAttributes['TiposId_fk54'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppUbic']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Ubicación Disco C: => ".$changedAttributes['AppUbic'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk55']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "TiposId_fk55 => ".$changedAttributes['TiposId_fk55'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppUbicDocu']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Ubicación Documentación => ".$changedAttributes['AppUbicDocu'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppUbicUlti']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Ubicación última versión del código fuente => ".$changedAttributes['AppUbicUlti'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppObse7']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Observaciones => ".$changedAttributes['AppObse7'];
                    $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppFuncApru']))
            {

            }
            else
            {
                    $oldAttributes[$i] = "Funcionario que recibe a satisfacción => ".$changedAttributes['AppFuncApru'];
                    $i++;
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

            //---------------------------------------------------------------//

            foreach ($rows as $key => $value)
            {
                if ($key == 'AppId')
                {
                    $var[0] = "Id => ".$rows['AppId'];
                    // $j++;
                }

                //---------------------------------------------------------------//

                if ($key == 'AppNomb' and isset($changedAttributes['AppNomb']))
                {
                    $var[1] = "Nombre => ".$rows['AppNomb'];
                    // $j++;
                }

                //---------------------------------------------------------------//

                if ($key == 'AppDesc' and isset($changedAttributes['AppDesc']))
                {
                    $var[2] = "Descripción => ".$rows['AppDesc'];
                    // $j++;
                }

                //---------------------------------------------------------------//

                if ($key == 'AppSigl' and isset($changedAttributes['AppSigl']))
                {
                    $var[3] = "Sigla => ".$rows['AppSigl'];
                    // $j++;
                }

                //---------------------------------------------------------------//

                if ($key == 'AppVers' and isset($changedAttributes['AppVers']))
                {
                    $var[4] = "Versión de la aplicación => ".$rows['AppVers'];
                    // $j++;
                }

                //---------------------------------------------------------------//
                if (isset($changedAttributes['ESopId1'])) {

                  if ($key == 'ESopId1' and $value != $changedAttributes['ESopId1'])
                  {
                    $var[5] = "Desarrollador o Proveedor => ".$rows['ESopId1'];
                    // $j++;
                  }
                }
                //---------------------------------------------------------------//

                if ($key == 'AppUrl' and isset($changedAttributes['AppUrl']))
                {
                    $var[6] = "URL de acceso => ".$rows['AppUrl'];
                    // $j++;
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk1' and isset($changedAttributes['TiposId_fk1']))
                {
                    $var[7] = "Tipo de adquisición => ".$rows['TiposId_fk1'];
                    // $j++;
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk2' and isset($changedAttributes['TiposId_fk2']))
                {
                    $var[8] = "Documento de adquisición => ".$rows['TiposId_fk2'];
                    // $j++;
                }

                //---------------------------------------------------------------//

                if ($key == 'AppNumeDocuAdqu' and isset($changedAttributes['AppNumeDocuAdqu']))
                {
                    $var[9] = "Número de documento de adquisición => ".$rows['AppNumeDocuAdqu'];
                    // $j++;
                }

                //---------------------------------------------------------------//

                if ($key == 'AppValoAdqu' and isset($changedAttributes['AppValoAdqu']))
                {
                    $var[10] = "Valor de adquisición => ".$rows['AppValoAdqu'];
                    // $j++;
                }

                //---------------------------------------------------------------//

                if ($key == 'AppFechAdqu' and isset($changedAttributes['AppFechAdqu']))
                {
                    $var[11] = "Fecha Adquisición => ".$rows['AppFechAdqu'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk3' and isset($changedAttributes['TiposId_fk3']))
                {
                    $var[12] = "Tipo Software => ".$rows['TiposId_fk3'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppNombProc' and isset($changedAttributes['AppNombProc']))
                {
                    $var[13] = "Nombre del Proceso => ".$rows['AppNombProc'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppEnti' and isset($changedAttributes['AppEnti']))
                {
                    $var[14] = "Dependencias Usuarias => ".$rows['AppEnti'];
                }

                //---------------------------------------------------------------//

                if (isset($changedAttributes['ESopId2'])) {

                  if ($key == 'ESopId1' and $value != $changedAttributes['ESopId2'])
                  {
                    $var[15] = "Desarrollador o Proveedor => ".$rows['ESopId2'];
                  }
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk4' and isset($changedAttributes['TiposId_fk4']))
                {
                    $var[16] = "Entidad, Área => ".$rows['TiposId_fk4'];
                }

                //---------------------------------------------------------------//

                if (isset($changedAttributes['UsuId_fk'])) {

                  if ($key == 'UsuId_fk' and $value != $changedAttributes['UsuId_fk'])
                  {
                    $var[17] = "Desarrollador o Proveedor => ".$rows['UsuId_fk'];
                  }
                }

                //---------------------------------------------------------------//

                if ($key == 'AppAcueNiveServ' and isset($changedAttributes['AppAcueNiveServ']))
                {
                    $var[18] = "Acuerdos de niveles de servicio => ".$rows['AppAcueNiveServ'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk5' and isset($changedAttributes['TiposId_fk5']))
                {
                    $var[19] = "Tipo de Puesta => ".$rows['TiposId_fk5'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppFechPues' and isset($changedAttributes['AppFechPues']))
                {
                    $var[20] = "Fecha de puesta => ".$rows['AppFechPues'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppServPues' and isset($changedAttributes['AppServPues']))
                {
                    $var[21] = "Servidor de puesta => ".$rows['AppServPues'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk6' and isset($changedAttributes['TiposId_fk6']))
                {
                    $var[22] = "Ámbito de aplicación => ".$rows['TiposId_fk6'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk7' and isset($changedAttributes['TiposId_fk7']))
                {
                    $var[23] = "Propósito de Aplicación => ".$rows['TiposId_fk7'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk8' and isset($changedAttributes['TiposId_fk8']))
                {
                    $var[24] = "Servidor Web => ".$rows['TiposId_fk8'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppServWebVers' and isset($changedAttributes['AppServWebVers']))
                {
                    $var[25] = "Versión => ".$rows['AppServWebVers'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppOtroCual8' and isset($changedAttributes['AppOtroCual8']))
                {
                    $var[26] = "Cuál => ".$rows['AppOtroCual8'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk9' and isset($changedAttributes['TiposId_fk9']))
                {
                    $var[27] = "Código ejecutado en el cliente => ".$rows['TiposId_fk9'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppOtroCual9' and isset($changedAttributes['AppOtroCual9']))
                {
                    $var[28] = "Cuál => ".$rows['AppOtroCual9'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk10' and isset($changedAttributes['TiposId_fk10']))
                {
                    $var[29] = "Código ejecutado en el servidor => ".$rows['TiposId_fk10'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppOtroCual10' and isset($changedAttributes['AppOtroCual10']))
                {
                    $var[30] = "Cuál => ".$rows['AppOtroCual10'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk11' and isset($changedAttributes['TiposId_fk11']))
                {
                    $var[31] = "Requiere base de datos => ".$rows['TiposId_fk11'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk12' and isset($changedAttributes['TiposId_fk12']))
                {
                    $var[32] = "Cuál => ".$rows['TiposId_fk12'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppOtroCual12' and isset($changedAttributes['AppOtroCual12']))
                {
                    $var[33] = "Cuál => ".$rows['AppOtroCual12'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk13' and isset($changedAttributes['TiposId_fk13']))
                {
                    $var[34] = "Maneja varios idiomas => ".$rows['TiposId_fk13'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk14' and isset($changedAttributes['TiposId_fk14']))
                {
                    $var[35] = "Cuál => ".$rows['TiposId_fk14'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppOtroCual14' and isset($changedAttributes['AppOtroCual14']))
                {
                    $var[36] = "Cuál => ".$rows['AppOtroCual14'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk15' and isset($changedAttributes['TiposId_fk15']))
                {
                    $var[37] = "Utiliza Manejador de Reportes => ".$rows['iposId_fk15'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk16' and isset($changedAttributes['TiposId_fk16']))
                {
                    $var[38] = "Cuál => ".$rows['TiposId_fk16'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppOtroCual16' and isset($changedAttributes['AppOtroCual16']))
                {
                    $var[39] = "Cuál => ".$rows['AppOtroCual16'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk17' and isset($changedAttributes['TiposId_fk17']))
                {
                    $var[40] = "Permite exportar datos => ".$rows['TiposId_fk17'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk18' and isset($changedAttributes['TiposId_fk18']))
                {
                    $var[41] = "Cuál => ".$rows['TiposId_fk18'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppOtroCual18' and isset($changedAttributes['AppOtroCual18']))
                {
                    $var[42] = "Cuál => ".$rows['AppOtroCual18'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk19' and isset($changedAttributes['TiposId_fk19']))
                {
                    $var[43] = "Interactúa con otra aplicación => ".$rows['TiposId_fk19'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppOtroCual19' and isset($changedAttributes['AppOtroCual19']))
                {
                    $var[44] = "Cuál => ".$rows['AppOtroCual19'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk20' and isset($changedAttributes['TiposId_fk20']))
                {
                    $var[45] = "Se tiene código fuente => ".$rows['TiposId_fk20'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppOtroCual20' and isset($changedAttributes['AppOtroCual20']))
                {
                    $var[46] = "Dónde está ubicado => ".$rows['AppOtroCual20'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppTipoLice' and isset($changedAttributes['AppTipoLice']))
                {
                    $var[47] = "Tipo de Licencia => ".$rows['AppTipoLice'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppNumeLice' and isset($changedAttributes['AppNumeLice']))
                {
                    $var[48] = "Número de Licencias => ".$rows['AppNumeLice'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk21' and isset($changedAttributes['TiposId_fk21']))
                {
                    $var[49] = "Interface del Aplicativo => ".$rows['TiposId_fk21'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk22' and isset($changedAttributes['TiposId_fk22']))
                {
                    $var[50] = "Tiene ayudas en línea => ".$rows['TiposId_fk22'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk23' and isset($changedAttributes['TiposId_fk23']))
                {
                    $var[51] = "Tipo de SO => ".$rows['TiposId_fk23'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppVersDist' and isset($changedAttributes['AppVersDist']))
                {
                    $var[52] = "Versión/Distribución => ".$rows['AppVersDist'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk24' and isset($changedAttributes['TiposId_fk24']))
                {
                    $var[53] = "Tipo Arquitectura => ".$rows['TiposId_fk24'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppLengServ' and isset($changedAttributes['AppLengServ']))
                {
                    $var[54] = "Lenguaje/Servicio => ".$rows['AppLengServ'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppVersApli' and isset($changedAttributes['AppVersApli']))
                {
                    $var[55] = "Versión => ".$rows['AppVersApli'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppBibl' and isset($changedAttributes['AppBibl']))
                {
                    $var[56] = "Bibliotecas => ".$rows['AppBibl'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppObse1' and isset($changedAttributes['AppObse1']))
                {
                    $var[57] = "Observaciones => ".$rows['AppObse1'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppMane' and isset($changedAttributes['AppMane']))
                {
                    $var[58] = "Manejador => ".$rows['AppMane'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppVersBD' and isset($changedAttributes['AppVersBD']))
                {
                    $var[59] = "Versión => ".$rows['AppVersBD'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppPuer1' and isset($changedAttributes['AppPuer1']))
                {
                    $var[60] = "Puerto  => ".$rows['AppPuer1'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppObse2' and isset($changedAttributes['AppObse2']))
                {
                    $var[61] = "Observaciones => ".$rows['AppObse2'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppTipoHard' and isset($changedAttributes['AppTipoHard']))
                {
                    $var[62] = "Tipo Hardware => ".$rows['AppTipoHard'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppProc' and isset($changedAttributes['AppProc']))
                {
                    $var[63] = "Procesador => ".$rows['AppProc'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppMemo' and isset($changedAttributes['AppMemo']))
                {
                    $var[64] = "Memoria => ".$rows['AppMemo'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppEspaDisc' and isset($changedAttributes['AppEspaDisc']))
                {
                    $var[65] = "Espacio en Disco => ".$rows['AppEspaDisc'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppObse3' and isset($changedAttributes['AppObse3']))
                {
                    $var[66] = "Espacio en Disco => ".$rows['AppObse3'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppObse4' and isset($changedAttributes['AppObse4']))
                {
                    $var[67] = "Observaciones => ".$rows['AppObse4'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppNombServBd' and isset($changedAttributes['AppNombServBd']))
                {
                    $var[68] = "Nombre Servidor de BD => ".$rows['AppNombServBd'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppUsua' and isset($changedAttributes['AppUsua']))
                {
                    $var[69] = "Usuario => ".$rows['AppUsua'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppNombBd' and isset($changedAttributes['AppNombBd']))
                {
                    $var[70] = "Nombre BD => ".$rows['AppNombBd'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppRuta' and isset($changedAttributes['AppRuta']))
                {
                    $var[71] = "Ruta => ".$rows['AppRuta'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppEspaActu' and isset($changedAttributes['AppEspaActu']))
                {
                    $var[72] = "Espacio en disco (Actual) => ".$rows['AppEspaActu'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppProy' and isset($changedAttributes['AppProy']))
                {
                    $var[73] = "Proyección a 3 años => ".$rows['AppProy'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk25' and isset($changedAttributes['TiposId_fk25']))
                {
                    $var[74] = "Método de Backup => ".$rows['TiposId_fk25'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppOtroCual25' and isset($changedAttributes['AppOtroCual25']))
                {
                    $var[75] = "Cuál => ".$rows['AppOtroCual25'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppPoliBack' and isset($changedAttributes['AppPoliBack']))
                {
                    $var[76] = "Política de Backup => ".$rows['AppPoliBack'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk26' and isset($changedAttributes['TiposId_fk26']))
                {
                    $var[77] = "Periocidad => ".$rows['TiposId_fk26'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk27' and isset($changedAttributes['TiposId_fk27']))
                {
                    $var[78] = "Medio de Almacenamiento => ".$rows['TiposId_fk27'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppOtroCual27' and isset($changedAttributes['AppOtroCual27']))
                {
                    $var[79] = "Cuál => ".$rows['AppOtroCual27'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk28' and isset($changedAttributes['TiposId_fk28']))
                {
                    $var[80] = "Licenciamiento de BD => ".$rows['TiposId_fk28'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppOtroCual28' and isset($changedAttributes['AppOtroCual28']))
                {
                    $var[81] = "Cuál => ".$rows['AppOtroCual28'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppCantLice' and isset($changedAttributes['AppCantLice']))
                {
                    $var[82] = "Cantidad de licencias => ".$rows['AppCantLice'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppDireRaiz' and isset($changedAttributes['AppDireRaiz']))
                {
                    $var[83] = "Directorio Raíz => ".$rows['AppDireRaiz'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppObse5' and isset($changedAttributes['AppObse5']))
                {
                    $var[84] = "Observaciones => ".$rows['AppObse5'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppObse6' and isset($changedAttributes['AppObse6']))
                {
                    $var[85] = "Observaciones => ".$rows['AppObse6'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk29' and isset($changedAttributes['TiposId_fk29']))
                {
                    $var[86] = "Plan de Proyecto ¿Se entregó? => ".$rows['TiposId_fk29'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk30' and isset($changedAttributes['TiposId_fk30']))
                {
                    $var[87] = "Plan de Proyecto ¿Se aprobó? => ".$rows['TiposId_fk30'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk31' and isset($changedAttributes['TiposId_fk31']))
                {
                    $var[88] = "Plan de Proyecto Medio => ".$rows['TiposId_fk31'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk32' and isset($changedAttributes['TiposId_fk32']))
                {
                    $var[89] = "Definición y Alcance ¿Se entregó? => ".$rows['TiposId_fk32'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk33' and isset($changedAttributes['TiposId_fk33']))
                {
                    $var[90] = "Definición y Alcance ¿Se aprobó? => ".$rows['TiposId_fk33'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk34' and isset($changedAttributes['TiposId_fk34']))
                {
                    $var[91] = "Definición y Alcance Medio => ".$rows['TiposId_fk34'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk35' and isset($changedAttributes['TiposId_fk35']))
                {
                    $var[92] = "Documento de requerimientos ¿Se entregó? => ".$rows['TiposId_fk35'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk36' and isset($changedAttributes['TiposId_fk36']))
                {
                    $var[93] = "Documento de requerimientos ¿Se aprobó? => ".$rows['TiposId_fk36'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk37' and isset($changedAttributes['TiposId_fk37']))
                {
                    $var[94] = "Documento de requerimientos => ".$rows['TiposId_fk37'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk38' and isset($changedAttributes['TiposId_fk38']))
                {
                    $var[95] = "Documento de Diseño ¿Se entregó? => ".$rows['TiposId_fk38'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk39' and isset($changedAttributes['TiposId_fk39']))
                {
                    $var[96] = "Documento de Diseño ¿Se aprobó? => ".$rows['TiposId_fk39'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk40' and isset($changedAttributes['TiposId_fk40']))
                {
                    $var[97] = "Documento de Diseño Medio => ".$rows['TiposId_fk40'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk41' and isset($changedAttributes['TiposId_fk41']))
                {
                    $var[98] = "Documento de Pruebas ¿Se entregó? => ".$rows['TiposId_fk41'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk42' and isset($changedAttributes['TiposId_fk42']))
                {
                    $var[99] = "Documento de Pruebas ¿Se aprobó? => ".$rows['TiposId_fk42'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk43' and isset($changedAttributes['TiposId_fk43']))
                {
                    $var[100] = "Documento de Pruebas Medio => ".$rows['TiposId_fk43'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk44' and isset($changedAttributes['TiposId_fk44']))
                {
                    $var[101] = "Manual Técnico y de Instalación ¿Se entregó? => ".$rows['TiposId_fk44'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk45' and isset($changedAttributes['TiposId_fk45']))
                {
                    $var[102] = "Manual Técnico y de Instalación ¿Se aprobó? => ".$rows['TiposId_fk45'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk46' and isset($changedAttributes['TiposId_fk46']))
                {
                    $var[103] = "Manual Técnico y de Instalación Medio => ".$rows['TiposId_fk46'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk47' and isset($changedAttributes['TiposId_fk47']))
                {
                    $var[104] = "Manual de Administración ¿Se entregó? => ".$rows['TiposId_fk47'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk48' and isset($changedAttributes['TiposId_fk48']))
                {
                    $var[105] = "Manual de Administración ¿Se aprobó? => ".$rows['TiposId_fk48'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk49' and isset($changedAttributes['TiposId_fk49']))
                {
                    $var[106] = "Manual de Administración Medio => ".$rows['TiposId_fk49'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk50' and isset($changedAttributes['TiposId_fk50']))
                {
                    $var[107] = "Manual de Usuario ¿Se entregó? => ".$rows['TiposId_fk50'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk51' and isset($changedAttributes['TiposId_fk51']))
                {
                    $var[108] = "Manual de Usuario ¿Se aprobó? => ".$rows['TiposId_fk51'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk52' and isset($changedAttributes['TiposId_fk52']))
                {
                    $var[109] = "Manual de Usuario Medio => ".$rows['TiposId_fk52'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk53' and isset($changedAttributes['TiposId_fk53']))
                {
                    $var[110] = "¿Se entregó Medio digital con la información de la aplicación? ¿Se entregó?
                     => ".$rows['TiposId_fk53'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk54' and isset($changedAttributes['TiposId_fk54']))
                {
                    $var[111] = "¿Se entregó Medio digital con la información de la aplicación? ¿Se aprobó? => ".$rows['TiposId_fk54'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppUbic' and isset($changedAttributes['AppUbic']))
                {
                    $var[112] = "Ubicación Disco C: => ".$rows['AppUbic'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk55' and isset($changedAttributes['TiposId_fk55']))
                {
                    $var[113] = "Contenido del medio digital => ".$rows['TiposId_fk55'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppUbicDocu' and isset($changedAttributes['AppUbicDocu']))
                {
                    $var[114] = "Ubicación Documentación => ".$rows['AppUbicDocu'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppUbicUlti' and isset($changedAttributes['AppUbicUlti']))
                {
                    $var[115] = "¿Ubicación última versión del código fuente => ".$rows['AppUbicUlti'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppObse7' and isset($changedAttributes['AppObse7']))
                {
                    $var[116] = "Observaciones => ".$rows['AppObse7'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppFuncApru' and isset($changedAttributes['AppFuncApru']))
                {
                    $var[117] = "Funcionario que recibe a satisfacción => ".$rows['AppFuncApru'];
                }

                //---------------------------------------------------------------//



            }

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
        // if ($insert)
        // {

        //     $connection = Yii::$app->db;
        //     $AudAcci =  'create';
        //     $table = $this->getTableSchema();
        //     $pk = $table->primaryKey;
        //     $UsuId_fk = Yii::$app->user->identity->id;
        //     $AudMod = Yii::$app->controller->id; //------------------ [appdependencias]
        //     $AudIp = Yii::$app->getRequest()->getUserIP();
        //     $AudFechHora = new \yii\db\Expression('NOW()');

        // //---------------------------------------------------------------------------//


        //     $MaxId = (new \yii\db\Query())
        //     ->select($pk)
        //     ->from($AudMod)
        //     ->orderBy($pk[0]." DESC")
        //     ->createCommand()
        //     ->execute();

        //     //---------------------------------------------//

        //     $queryId = (new \yii\db\Query())
        //     ->select($pk)
        //     ->from($AudMod)
        //     ->where([$pk[0]=>$MaxId])
        //     ->createCommand();
        //     $rows1 = $queryId->queryOne();
        //     $resultId = implode(",", $rows1);


        //     //-----------------------------------------------//

        //     $connection->createCommand()->insert('auditorias',
        //                             // ['AudId'=> $AudId],
        //                             [
        //                                 'UsuId_fk' => Yii::$app->user->identity->id,
        //                                 'AudMod' => $AudMod,
        //                                 'AudAcci' => $AudAcci,
        //                                 'AudDatoAnte' => ' ',
        //                                 'AudDatoDesp' => $resultId,
        //                                 'AudIp'=> $AudIp,
        //                                 'AudFechHora'=> $AudFechHora,
        //                             ])
        //                             ->execute();
        // }

    }
  /**
  * @return \yii\db\ActiveQuery
  */
  public function getESopId1()
  {
    return $this->hasOne(Empsoporte::className(), ['ESopId' => 'ESopId1']);
  }

  /**
  * @return \yii\db\ActiveQuery
  */
  public function getESopId2()
  {
    return $this->hasOne(Empsoporte::className(), ['ESopId' => 'ESopId2']);
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
  public function getAppdependencias()
  {
    return $this->hasMany(Appdependencias::className(), ['AppId_fk' => 'AppId']);
  }

  /**
  * @return \yii\db\ActiveQuery
  */
  public function getAppmodulos()
  {
    return $this->hasMany(Appmodulos::className(), ['AppId_fk' => 'AppId']);
  }

  /**
  * @return \yii\db\ActiveQuery
  */
  public function getAppparametros()
  {
    return $this->hasMany(Appparametros::className(), ['AppId_fk' => 'AppId']);
  }
  /**
  * @return \yii\db\ActiveQuery
  */
  public function getAppplugins()
  {
    return $this->hasMany(Appplugins::className(), ['AppId_fk' => 'AppId']);
  }
  /**
  * @return \yii\db\ActiveQuery
  */
  public function getAppusuarios()
  {
    return $this->hasMany(Appusuarios::className(), ['AppId_fk' => 'AppId']);
  }

  /**
* @return \yii\db\ActiveQuery
*/
  public function getAppdirectorios()
  {
    return $this->hasMany(Appdirectorios::className(), ['AppId_fk' => 'AppId']);
  }
  /**
* @return \yii\db\ActiveQuery
*/
  public function getApparchivos()
  {
    return $this->hasMany(Apparchivos::className(), ['AppId_fk' => 'AppId']);
  }
  /**
* @return \yii\db\ActiveQuery
*/
  public function getAppaceptacion()
  {
    return $this->hasMany(Appaceptacion::className(), ['AppId_fk' => 'AppId']);
  }
  /**
* @return \yii\db\ActiveQuery
*/
  public function getAppinteractua()
  {
    return $this->hasMany(Appinteractua::className(), ['AppId_fk' => 'AppId']);
  }
  /**
* @return \yii\db\ActiveQuery
*/
  public function getAppinformacion()
  {
    return $this->hasMany(Appinformacion::className(), ['AppId_fk' => 'AppId']);
  }
  /**
* @return \yii\db\ActiveQuery
*/
  public function getAppaplicaciones()
  {
    return $this->hasMany(Appaplicaciones::className(), ['AppId_fk' => 'AppId']);
  }
  /**
* @return \yii\db\ActiveQuery
*/
  public function getAppbasedatos()
  {
    return $this->hasMany(Appbasedatos::className(), ['AppId_fk' => 'AppId']);
  }
  /**
* @return \yii\db\ActiveQuery
*/
  public function getApphardware()
  {
    return $this->hasMany(Apphardware::className(), ['AppId_fk' => 'AppId']);
  }


  //Función para manejar los checkBoxList del formulario, donde el Array se convierte a String antes de validar
  // 5, 6, 7, 8, 9, 10, 12, 14, 16, 18, 21,
  public function beforeValidate(){

    if ($this->TiposId_fk5) {

      $this->TiposId_fk5 = implode(',',(array)$this->TiposId_fk5);
    }
    if ($this->TiposId_fk6) {
      $this->TiposId_fk6 = implode(',',(array)$this->TiposId_fk6);
    }
    if ($this->TiposId_fk7) {
      $this->TiposId_fk7 = implode(',',(array)$this->TiposId_fk7);
    }
    if ($this->TiposId_fk8) {
      $this->TiposId_fk8 = implode(',',(array)$this->TiposId_fk8);
    }
    if ($this->TiposId_fk9) {
      $this->TiposId_fk9 = implode(',',(array)$this->TiposId_fk9);
    }
    if ($this->TiposId_fk10) {
      $this->TiposId_fk10 = implode(',',(array)$this->TiposId_fk10);
    }
    if ($this->TiposId_fk12) {
      $this->TiposId_fk12 = implode(',',(array)$this->TiposId_fk12);
    }
    if ($this->TiposId_fk14) {
      $this->TiposId_fk14 = implode(',',(array)$this->TiposId_fk14);
    }
    if ($this->TiposId_fk16) {
      $this->TiposId_fk16 = implode(',',(array)$this->TiposId_fk16);
    }
    if ($this->TiposId_fk18) {
      $this->TiposId_fk18 = implode(',',(array)$this->TiposId_fk18);
    }
    if ($this->TiposId_fk21) {
      $this->TiposId_fk21 = implode(',',(array)$this->TiposId_fk21);
    }
    if ($this->TiposId_fk23) {
      $this->TiposId_fk23 = implode(',',(array)$this->TiposId_fk23);
    }

    if ($this->TiposId_fk31) {
      $this->TiposId_fk31 = implode(',',(array)$this->TiposId_fk31);
    }
    if ($this->TiposId_fk34) {
      $this->TiposId_fk34 = implode(',',(array)$this->TiposId_fk34);
    }
    if ($this->TiposId_fk37) {
      $this->TiposId_fk37 = implode(',',(array)$this->TiposId_fk37);
    }
    if ($this->TiposId_fk40) {
      $this->TiposId_fk40 = implode(',',(array)$this->TiposId_fk40);
    }
    if ($this->TiposId_fk43) {
      $this->TiposId_fk43 = implode(',',(array)$this->TiposId_fk43);
    }
    if ($this->TiposId_fk46) {
      $this->TiposId_fk46 = implode(',',(array)$this->TiposId_fk46);
    }
    if ($this->TiposId_fk49) {
      $this->TiposId_fk49 = implode(',',(array)$this->TiposId_fk49);
    }
    if ($this->TiposId_fk52) {
      $this->TiposId_fk52 = implode(',',(array)$this->TiposId_fk52);
    }
    if ($this->TiposId_fk55) {
      $this->TiposId_fk55 = implode(',',(array)$this->TiposId_fk55);
    }
    if ($this->AppEntiImag) {
      $this->AppEntiImag = implode(',    ',(array)$this->AppEntiImag);
    }

    return parent::beforeValidate();
  }
}
