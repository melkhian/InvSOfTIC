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
* @property string $AppOtroCual19 Cuál
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
* @property string $AppObse4 Observaciones
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
* @property string $AppUbic Ubicación Disco C:
* @property string $TiposId_fk55 Contenido del medio digital
* @property string $AppUbicDocu Ubicación Documentación
* @property string $AppUbicUlti Ubicación última versión del código fuente
* @property string $AppObse7 Observaciones
* @property string $AppActa Archivo acta
* @property string $AppFechApro Fecha de aceptación
*
* @property Empsoporte $eSopId1
* @property Empsoporte $eSopId2
* @property Apparchivos[] $apparchivos
* @property Appdependencias[] $appdependencias
* @property Appdirectorios[] $appdirectorios
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
            [['AppCorr', 'AppTeleOfic', 'AppTelePers', 'TiposId_fk4', 'AppNombFunc', 'AppCarg2', 'AppCorr2', 'AppTeleOfic2', 'AppTelePers2', 'AppAcueNiveServ', 'TiposId_fk5', 'AppFechPues', 'AppServPues', 'TiposId_fk6', 'TiposId_fk7'], 'required'],
            [['TiposId_fk8', 'AppServWebVers','TiposId_fk9', 'TiposId_fk10', 'TiposId_fk11', 'TiposId_fk13', 'TiposId_fk15'], 'required'],
            [['TiposId_fk17', 'TiposId_fk19', 'TiposId_fk20', 'AppNumeLice', 'TiposId_fk21', 'TiposId_fk22', 'TiposId_fk23', 'AppVersDist'], 'required'],
            [['TiposId_fk24', 'AppLengServ', 'AppVersApli', 'AppBibl', 'AppObse1', 'AppMane', 'AppVersBD', 'AppPuer1', 'AppObse2', 'AppTipoHard', 'AppProc', 'AppMemo', 'AppEspaDisc', 'AppObse3', 'AppObse4', 'AppNombServBd', 'AppUsua', 'AppNombBd'], 'required'],
            [['AppRuta', 'AppEspaActu', 'AppProy', 'TiposId_fk25', 'AppPoliBack', 'TiposId_fk26', 'TiposId_fk27', 'TiposId_fk28', 'AppCantLice', 'AppDireRaiz', 'AppObse5', 'AppObse6', 'TiposId_fk29'], 'required'],
            [['TiposId_fk30', 'TiposId_fk31', 'TiposId_fk32', 'TiposId_fk33', 'TiposId_fk34', 'TiposId_fk35', 'TiposId_fk36', 'TiposId_fk37', 'TiposId_fk38', 'TiposId_fk39', 'TiposId_fk40', 'TiposId_fk41', 'TiposId_fk42', 'TiposId_fk43', 'TiposId_fk44'], 'required'],
            [['TiposId_fk45', 'TiposId_fk46', 'TiposId_fk47', 'TiposId_fk48', 'TiposId_fk49', 'TiposId_fk50', 'TiposId_fk51', 'TiposId_fk52', 'TiposId_fk53', 'TiposId_fk54', 'AppUbic', 'TiposId_fk55', 'AppUbicDocu', 'AppUbicUlti', 'AppObse7', 'AppActa'], 'required'],
            [['ESopId1', 'ESopId2'], 'integer'],
            [['AppFechAdqu', 'AppFechPues', 'AppFechPues1', 'AppFechPues2', 'AppFechApro'], 'safe'],
            [['AppNomb', 'AppUrl', 'AppValoAdqu', 'AppNombProc', 'AppNombCont', 'AppCarg', 'AppCorr', 'TiposId_fk4', 'AppNombFunc', 'AppServPues', 'AppServPues1', 'AppServPues2', 'AppOtroCual9', 'AppOtroCual10', 'AppOtroCual12', 'AppOtroCual14', 'AppOtroCual18',
            'AppOtroCual19', 'TiposId_fk56', 'AppNumeLice', 'AppOtroCual21','AppVersDist', 'AppLengServ', 'AppVersApli', 'AppBibl', 'AppMane', 'AppVersBD', 'AppPuer1', 'AppMemo', 'AppEspaDisc', 'AppNombServBd', 'AppNombBd', 'AppRuta', 'AppOtroCual25',
            'AppPoliBack', 'AppOtroCual27', 'AppOtroCual28', 'AppDireRaiz', 'AppActa'], 'string', 'max' => 100],
            [['AppDesc', 'AppEnti', 'AppAcueNiveServ'], 'string', 'max' => 500],
            [['AppSigl', 'AppVers', 'AppNumeDocuAdqu', 'AppTeleOfic', 'AppTelePers', 'AppCarg2', 'AppCorr2', 'AppTeleOfic2', 'AppTelePers2', 'AppServWebVers', 'AppOtroCual8', 'AppOtroCual16', 'AppUsua', 'AppEspaActu', 'AppProy'], 'string', 'max' => 50],
            [['TiposId_fk1', 'TiposId_fk2', 'TiposId_fk3', 'TiposId_fk5', 'TiposId_fk6', 'TiposId_fk7', 'TiposId_fk8', 'TiposId_fk9', 'TiposId_fk10', 'TiposId_fk11', 'TiposId_fk12', 'TiposId_fk13', 'TiposId_fk14', 'TiposId_fk15', 'TiposId_fk16', 'TiposId_fk17', 'TiposId_fk18', 'TiposId_fk19', 'TiposId_fk20', 'TiposId_fk21', 'TiposId_fk22', 'TiposId_fk23', 'TiposId_fk24', 'TiposId_fk25', 'TiposId_fk26', 'TiposId_fk27', 'TiposId_fk28', 'TiposId_fk29', 'TiposId_fk30', 'TiposId_fk31', 'TiposId_fk32', 'TiposId_fk33', 'TiposId_fk34', 'TiposId_fk35', 'TiposId_fk36', 'TiposId_fk37', 'TiposId_fk38', 'TiposId_fk39', 'TiposId_fk40', 'TiposId_fk41', 'TiposId_fk42', 'TiposId_fk43', 'TiposId_fk44', 'TiposId_fk45', 'TiposId_fk46', 'TiposId_fk47', 'TiposId_fk48', 'TiposId_fk49', 'TiposId_fk50', 'TiposId_fk51', 'TiposId_fk52', 'TiposId_fk53', 'TiposId_fk54', 'TiposId_fk55'], 'string', 'max' => 20],
            [['AppOtroCual20', 'AppObse1', 'AppObse2', 'AppTipoHard', 'AppProc', 'AppObse3', 'AppObse4', 'AppObse5', 'AppObse6', 'AppUbic', 'AppUbicDocu', 'AppUbicUlti', 'AppObse7'], 'string', 'max' => 200],
            [['AppCantLice'], 'string', 'max' => 10],
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
      'AppFechPues' => 'Fecha de puesta',
      'AppServPues' => 'Servidor de puesta',
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
      'AppOtroCual19' => 'Cuál',
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
      'AppObse4' => 'Observaciones',
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
    if ($this->TiposId_fk26) {
      $this->TiposId_fk26 = implode(',',(array)$this->TiposId_fk26);
    }


    return parent::beforeValidate();
  }
}
