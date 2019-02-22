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
* @property int $ESopId2 Empresa Soporte
* @property string $TiposId_fk4 Entidad, Área
* @property int $UsuId_fk Funcionario
* @property string $AppAcueNiveServ Acuerdos de niveles de servicio
* @property string $TiposId_fk5 Tipo de Puesta
* @property string $AppFechPues Fecha de puesta
* @property string $AppServPues Servidor de puesta
* @property string $TiposId_fk6 Ámbito de aplicación
* @property string $TiposId_fk7 Propósito de Aplicación
* @property string $TiposId_fk8 Servidor Web
* @property string $AppOtroCual8 Versión del servidor
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
* @property string $AppOtroCual19 Cuál
* @property string $TiposId_fk20 ¿Se tiene código fuente?
* @property string $AppDondUbic ¿Dónde está ubicado?
* @property string $AppTipoLice Tipo de Licencia
* @property string $AppNumeLice Número de Licencias
* @property string $TiposId_fk21 Interface del Aplicativo
* @property string $TiposId_fk22 ¿Tiene ayudas en línea?
* @property string $TiposId_fk23 Tipo de SO
* @property string $AppVersDist Versión/Distribución
* @property string $TiposId_fk24 Tipo Arquitectura
* @property string $AppLengServ Lenguaje/Servicio
* @property string $AppVersApli Versión
* @property string $AppBibl Bibliotecas
* @property string $AppObse1 Observaciones
* @property string $AppMane Manejador
* @property string $AppVersBD Versión
* @property string $AppPuer1 Puerto
* @property string $AppObse2 Observaciones
* @property string $AppTipoHard Tipo Hardware
* @property string $AppProc Procesador
* @property string $AppMemo Memoria
* @property string $AppEspaDisc Espacio en Disco
* @property string $AppObse3 Observaciones
* @property string $AppDirec1 Directorio
* @property string $AppNombArch Nombre del archivo
* @property string $AppVari Variable / Tipo de variable
* @property string $AppNombVari Nombre de la Variable
* @property string $AppDescPara Descripción
* @property string $AppObse4 Observaciones
* @property string $AppUrlFuen URL fuente
* @property string $AppServ Servidor
* @property string $AppPuer2 Puerto
* @property string $AppDirec2 Directorio
* @property string $AppNombServBd Nombre Servidor de BD
* @property string $AppUsua Usuario
* @property string $AppNombBd Nombre BD
* @property string $AppRuta Ruta
* @property string $AppEspaActu Espacio en disco (Actual)
* @property string $AppProy Proyección a 3 años
* @property string $TiposId_fk25 Método de Backup
* @property string $AppOtroCual25 Cuál
* @property string $AppPoliBack Política de Backup
* @property string $TiposId_fk26 Periocidad
* @property string $TiposId_fk27 Medio de Almacenamiento
* @property string $AppOtroCual27 Cuál
* @property string $TiposId_fk28 Licenciamiento de BD
* @property string $AppOtroCual28 Cuál
* @property string $AppCantLice Cantidad de licencias
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
* @property string $AppUbic Ubicación Disco C:
* @property string $TiposId_fk55 Contenido del medio digital
* @property string $AppUbicDocu Ubicación Documentación
* @property string $AppUbicUlti Ubicación última versión del código fuente
* @property string $AppObse7 Observaciones
* @property string $AppFuncApru Funcionario que recibe a satisfacción
*
* @property Empsoporte $eSopId1
* @property Empsoporte $eSopId2
* @property User $usuIdFk
* @property Appdependencias[] $appdependencias
* @property Appmodulos[] $appmodulos
*/
class Aplicaciones extends \yii\db\ActiveRecord
{
  /**
  * @inheritdoc
  */
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
      // [['AppNomb', 'AppDesc', 'AppSigl', 'AppVers', 'ESopId1', 'AppUrl', 'TiposId_fk1', 'TiposId_fk2', 'AppNumeDocuAdqu', 'AppValoAdqu', 'AppFechAdqu', 'TiposId_fk3', 'AppNombProc', 'AppEnti', 'ESopId2', 'TiposId_fk4', 'UsuId_fk'], 'required'],
      // [['TiposId_fk5', 'AppFechPues', 'AppServPues', 'TiposId_fk6', 'TiposId_fk7', 'TiposId_fk8', 'TiposId_fk9', 'TiposId_fk10', 'TiposId_fk11', 'TiposId_fk13','TiposId_fk15','TiposId_fk17', 'TiposId_fk19', 'TiposId_fk20'], 'required'],
      // [['TiposId_fk24', 'AppLengServ', 'AppVersApli', 'AppBibl', 'AppObse1', 'AppMane', 'AppVersBD', 'AppPuer1', 'AppObse2', 'AppTipoHard', 'AppProc', 'AppMemo', 'AppEspaDisc', 'AppObse3'], 'required'],
      // [['AppObse4', 'AppNombServBd', 'AppUsua', 'AppNombBd', 'AppRuta', 'AppEspaActu', 'AppProy', 'TiposId_fk25', 'AppPoliBack', 'TiposId_fk26', 'TiposId_fk27', 'TiposId_fk28'], 'required'],
      // [['TiposId_fk31', 'TiposId_fk32', 'TiposId_fk33', 'TiposId_fk34', 'TiposId_fk35', 'TiposId_fk36', 'TiposId_fk37', 'TiposId_fk38', 'TiposId_fk39', 'TiposId_fk40', 'TiposId_fk41', 'TiposId_fk42', 'TiposId_fk43', 'TiposId_fk44'], 'required'],
      // [['TiposId_fk50', 'TiposId_fk51', 'TiposId_fk52', 'TiposId_fk53', 'TiposId_fk54', 'AppUbic', 'TiposId_fk55', 'AppUbicDocu', 'AppUbicUlti', 'AppObse7', 'AppFuncApru', 'AppServWebVers', 'TiposId_fk48', 'TiposId_fk49'], 'required'],
      // [['AppTipoLice', 'AppNumeLice', 'TiposId_fk22', 'TiposId_fk23', 'AppVersDist', 'AppCantLice', 'TiposId_fk29', 'TiposId_fk30', 'TiposId_fk45', 'TiposId_fk46', 'TiposId_fk47'], 'required'],
      [['ESopId1', 'ESopId2', 'UsuId_fk'], 'integer'],
      [['AppFechAdqu', 'AppFechPues'], 'safe'],
      [['AppNomb', 'AppSigl', 'AppVers', 'AppNumeDocuAdqu', 'AppOtroCual8', 'AppOtroCual16', 'AppUsua', 'AppEspaActu', 'AppProy', 'AppServWebVers'], 'string', 'max' => 50],
      [['AppDesc', 'AppEnti', 'AppAcueNiveServ'], 'string', 'max' => 500],
      [['AppUrl', 'AppValoAdqu', 'AppNombProc', 'AppServPues', 'AppOtroCual9', 'AppOtroCual10', 'AppOtroCual12', 'AppOtroCual14', 'AppOtroCual18', 'AppOtroCual19', 'AppTipoLice', 'AppNumeLice', 'AppVersDist', 'AppLengServ', 'AppVersApli', 'AppBibl', 'AppMane', 'AppVersBD', 'AppPuer1', 'AppMemo', 'AppEspaDisc', 'AppNombServBd', 'AppNombBd', 'AppRuta', 'AppOtroCual25', 'AppPoliBack', 'AppOtroCual27', 'AppOtroCual28', 'AppFuncApru','AppDireRaiz'], 'string', 'max' => 100],
      [['TiposId_fk1', 'TiposId_fk2', 'TiposId_fk3', 'TiposId_fk4', 'TiposId_fk5', 'TiposId_fk6', 'TiposId_fk7', 'TiposId_fk8', 'TiposId_fk9', 'TiposId_fk10', 'TiposId_fk11', 'TiposId_fk12', 'TiposId_fk13', 'TiposId_fk14', 'TiposId_fk15', 'TiposId_fk16', 'TiposId_fk17', 'TiposId_fk18', 'TiposId_fk19', 'TiposId_fk20', 'TiposId_fk21', 'TiposId_fk22', 'TiposId_fk23', 'TiposId_fk24', 'TiposId_fk25', 'TiposId_fk26', 'TiposId_fk27', 'TiposId_fk28', 'TiposId_fk29', 'TiposId_fk30', 'TiposId_fk31', 'TiposId_fk32', 'TiposId_fk33', 'TiposId_fk34', 'TiposId_fk35', 'TiposId_fk36', 'TiposId_fk37', 'TiposId_fk38', 'TiposId_fk39', 'TiposId_fk40', 'TiposId_fk41', 'TiposId_fk42', 'TiposId_fk43', 'TiposId_fk44', 'TiposId_fk45', 'TiposId_fk46', 'TiposId_fk47', 'TiposId_fk48', 'TiposId_fk49', 'TiposId_fk50', 'TiposId_fk51', 'TiposId_fk52', 'TiposId_fk53', 'TiposId_fk54', 'TiposId_fk55'], 'string', 'max' => 20],
      [['AppObse1', 'AppObse2', 'AppTipoHard', 'AppProc', 'AppObse3', 'AppObse4', 'AppUbic', 'AppUbicDocu', 'AppUbicUlti','AppObse5', 'AppObse6', 'AppObse7', 'AppOtroCual20'], 'string', 'max' => 200],
      [['AppCantLice'], 'string', 'max' => 10],
      [['ESopId1'], 'exist', 'skipOnError' => true, 'targetClass' => Empsoporte::className(), 'targetAttribute' => ['ESopId1' => 'ESopId']],
      [['ESopId2'], 'exist', 'skipOnError' => true, 'targetClass' => Empsoporte::className(), 'targetAttribute' => ['ESopId2' => 'ESopId']],
      [['UsuId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['UsuId_fk' => 'id']],
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
      'ESopId2' => 'Empresa Soporte',
      'TiposId_fk4' => 'Entidad, Área',
      'UsuId_fk' => 'Funcionario',
      'AppAcueNiveServ' => 'Acuerdos de niveles de servicio',
      'TiposId_fk5' => 'Tipo de Puesta',
      'AppFechPues' => 'Fecha de puesta',
      'AppServPues' => 'Servidor de puesta',
      'TiposId_fk6' => 'Ámbito de aplicación',
      'TiposId_fk7' => 'Propósito de Aplicación',
      'TiposId_fk8' => 'Servidor Web',
      'AppOtroCual8' => 'Cuál',
      'AppServWebVers' => 'Versión del Servidor',
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
      'AppOtroCual19' => 'Cuál',
      'TiposId_fk20' => '¿Se tiene código fuente?',
      'AppOtroCual20' => '¿Dónde está ubicado?',
      'AppTipoLice' => 'Tipo de Licencia',
      'AppNumeLice' => 'Número de Licencias',
      'TiposId_fk21' => 'Interface del Aplicativo',
      'TiposId_fk22' => '¿Tiene ayudas en línea?',
      'TiposId_fk23' => 'Tipo de SO',
      'AppVersDist' => 'Versión/Distribución',
      'TiposId_fk24' => 'Tipo Arquitectura',
      'AppLengServ' => 'Lenguaje/Servicio',
      'AppVersApli' => 'Versión',
      'AppBibl' => 'Bibliotecas',
      'AppObse1' => 'Observaciones',
      'AppMane' => 'Manejador',
      'AppVersBD' => 'Versión',
      'AppPuer1' => 'Puerto',
      'AppObse2' => 'Observaciones',
      'AppTipoHard' => 'Tipo Hardware',
      'AppProc' => 'Procesador',
      'AppMemo' => 'Memoria',
      'AppEspaDisc' => 'Espacio en Disco',
      'AppObse3' => 'Observaciones',
      // 'AppDirec1' => 'Directorio',
      // 'AppNombArch' => 'Nombre del archivo',
      // 'AppVari' => 'Variable / Tipo de variable',
      // 'AppNombVari' => 'Nombre de la Variable',
      // 'AppDescPara' => 'Descripción',
      'AppObse4' => 'Observaciones',
      // 'AppUrlFuen' => 'URL fuente',
      // 'AppServ' => 'Servidor',
      'AppPuer2' => 'Puerto',
      // 'AppDirec2' => 'Directorio',
      'AppNombServBd' => 'Nombre Servidor de BD',
      'AppUsua' => 'Usuario',
      'AppNombBd' => 'Nombre BD',
      'AppRuta' => 'Ruta',
      'AppEspaActu' => 'Espacio en disco (Actual)',
      'AppProy' => 'Proyección a 3 años',
      'TiposId_fk25' => 'Método de Backup',
      'AppOtroCual25' => 'Cuál',
      'AppPoliBack' => 'Política de Backup',
      'TiposId_fk26' => 'Periocidad',
      'TiposId_fk27' => 'Medio de Almacenamiento',
      'AppOtroCual27' => 'Cuál',
      'TiposId_fk28' => 'Licenciamiento de BD',
      'AppOtroCual28' => 'Cuál',
      'AppCantLice' => 'Cantidad de licencias',
      'AppDireRaiz' => 'Directorio Raíz',
      'AppObse5' => 'Observaciones',
      'AppObse6' => 'Observaciones',
      'TiposId_fk29' => '',
      'TiposId_fk30' => '',
      'TiposId_fk31' => '',
      'TiposId_fk32' => '',
      'TiposId_fk33' => '',
      'TiposId_fk34' => '',
      'TiposId_fk35' => '',
      'TiposId_fk36' => '',
      'TiposId_fk37' => '',
      'TiposId_fk38' => '',
      'TiposId_fk39' => '',
      'TiposId_fk40' => '',
      'TiposId_fk41' => '',
      'TiposId_fk42' => '',
      'TiposId_fk43' => '',
      'TiposId_fk44' => '',
      'TiposId_fk45' => '',
      'TiposId_fk46' => '',
      'TiposId_fk47' => '',
      'TiposId_fk48' => '',
      'TiposId_fk49' => '',
      'TiposId_fk50' => '',
      'TiposId_fk51' => '',
      'TiposId_fk52' => '',
      'TiposId_fk53' => '',
      'TiposId_fk54' => '',
      'AppUbic' => 'Ubicación Disco C:',
      'TiposId_fk55' => 'Contenido del medio digital',
      'AppUbicDocu' => 'Ubicación Documentación',
      'AppUbicUlti' => 'Ubicación última versión del código fuente',
      'AppObse7' => 'Observaciones',
      'AppFuncApru' => 'Funcionario que recibe a satisfacción',
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

            }
            // print_r($var);
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
            // print_r($pk);
            // die();
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
            ->where([$pk[0]=>$MaxId])
            ->createCommand();    
            $rows1 = $queryId->queryOne();            
            $resultId = implode(",", $rows1);


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


  //Función para manejar los checkBoxList del formulario, donde el Array se convierte a String antes de validar
  // 5, 6, 7, 8, 9, 10, 12, 14, 16, 18, 21,
  public function beforeValidate(){

    if ($this->TiposId_fk5) {
      print_r($this->TiposId_fk5);
      // die();
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
    if ($this->TiposId_fk26) {
      $this->TiposId_fk26 = implode(',',(array)$this->TiposId_fk26);
    }


    return parent::beforeValidate();
  }
}
