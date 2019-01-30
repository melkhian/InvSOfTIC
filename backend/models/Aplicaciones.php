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
 * @property int $TiposId_fk1 Tipo de adquisición
 * @property int $TiposId_fk2 Documento de adquisición
 * @property string $AppNumeDocuAdqu Número de documento de adquisición
 * @property string $AppValoAdqu Valor de adquisición
 * @property string $AppFechAdqu Fecha Adquisición
 * @property int $TiposId_fk3 Tipo Software
 * @property string $AppNombProc Nombre del Proceso
 * @property string $AppEnti Entidad o Dependencias Usuarias
 * @property int $ESopId2 Empresa Soporte
 * @property int $TiposId_fk4 Entidad, Área
 * @property int $UsuId_fk Funcionario
 * @property string $AppAcueNiveServ Acuerdos de niveles de servicio
 * @property int $TiposId_fk5 Tipo de Puesta 
 * @property string $AppFechPues Fecha de puesta
 * @property string $AppServPues Servidor de puesta
 * @property int $TiposId_fk6 Ámbito de aplicación
 * @property int $TiposId_fk7 Propósito de Aplicación
 * @property int $TiposId_fk8 Servidor Web
 * @property string $AppVersServ Versión del servidor
 * @property int $TiposId_fk9 Código ejecutado en el cliente
 * @property string $AppOtroCual1 Cuál
 * @property int $TiposId_fk10 Código ejecutado en el servidor 
 * @property string $AppOtroCual2 Cuál
 * @property int $TiposId_fk11 ¿Requiere base de datos?
 * @property int $TiposId_fk12 ¿Cuál?
 * @property string $AppOtroCual3 Cuál
 * @property int $TiposId_fk13 ¿Maneja varios idiomas?
 * @property int $TiposId_fk14 ¿Cuál?
 * @property string $AppOtroCual4 Cuál
 * @property int $TiposId_fk15 ¿Utiliza Manejador de Reportes?
 * @property int $TiposId_fk16 ¿Cuál?
 * @property int $TiposId_fk17 ¿Permite exportar datos?
 * @property int $TiposId_fk18 ¿Cuál?
 * @property string $AppOtroCual6 Cuál
 * @property int $TiposId_fk19 ¿Interactúa con otra aplicación?
 * @property string $AppCual Cuál
 * @property int $TiposId_fk20 ¿Se tiene código fuente?
 * @property string $AppDondUbic ¿Dónde está ubicado?
 * @property string $AppTipoLice Tipo de Licencia
 * @property string $AppNumeLice Número de Licencias
 * @property int $TiposId_fk21 Interface del Aplicativo
 * @property int $TiposId_fk22 ¿Tiene ayudas en línea?
 * @property int $TiposId_fk23 Tipo de SO
 * @property string $AppVersDist Versión/Distribución
 * @property int $TiposId_fk24 Tipo Arquitectura
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
 * @property int $TiposId_fk25 Método de Backup
 * @property string $AppOtroCual7 Cuál
 * @property string $AppPoliBack Política de Backup
 * @property int $TiposId_fk26 Periocidad
 * @property int $TiposId_fk27 Medio de Almacenamiento
 * @property string $AppOtroCual8 Cuál
 * @property int $TiposId_fk28 Licenciamiento de BD
 * @property string $AppOtroCual9 Cuál
 * @property string $AppCantLice Cantidad de licencias
 * @property int $TiposId_fk29 Plan de Proyecto ¿Se entregó?
 * @property int $TiposId_fk30 Plan de Proyecto ¿Se aprobó?
 * @property int $TiposId_fk31 Plan de Proyecto Medio
 * @property int $TiposId_fk32 Definición y Alcance ¿Se entregó?
 * @property int $TiposId_fk33 Definición y Alcance ¿Se aprobó?
 * @property int $TiposId_fk34 Definición y Alcance Medio 
 * @property int $TiposId_fk35 Documento de requerimientos ¿Se entregó?
 * @property int $TiposId_fk36 Documento de requerimientos ¿Se aprobó?
 * @property int $TiposId_fk37 Documento de requerimientos
 * @property int $TiposId_fk38 Documento de Diseño ¿Se entregó? 
 * @property int $TiposId_fk39 Documento de Diseño ¿Se aprobó?
 * @property int $TiposId_fk40 Documento de Diseño Medio
 * @property int $TiposId_fk41 Documento de Pruebas ¿Se entregó?
 * @property int $TiposId_fk42 Documento de Pruebas ¿Se aprobó?
 * @property int $TiposId_fk43 Documento de Pruebas Medio
 * @property int $TiposId_fk44 Manual Técnico y de Instalación ¿Se entregó?
 * @property int $TiposId_fk45 Manual Técnico y de Instalación ¿Se aprobó?
 * @property int $TiposId_fk46 Manual Técnico y de Instalación Medio
 * @property int $TiposId_fk47 Manual de Administración ¿Se entregó?
 * @property int $TiposId_fk48 Manual de Administración ¿Se aprobó?
 * @property int $TiposId_fk49 Manual de Administración Medio
 * @property int $TiposId_fk50 Manual de Usuario ¿Se entregó?
 * @property int $TiposId_fk51 Manual de Usuario ¿Se aprobó?
 * @property int $TiposId_fk52 Manual de Usuario Medio
 * @property int $TiposId_fk53 ¿Se entregó Medio digital con la información de la aplicación? ¿Se entregó?
 * @property int $TiposId_fk54 ¿Se entregó Medio digital con la información de la aplicación? ¿Se aprobó?
 * @property string $AppUbic Ubicación Disco C:
 * @property int $TiposId_fk55 Contenido del medio digital
 * @property string $AppUbicDocu Ubicación Documentación
 * @property string $AppUbicUlti Ubicación última versión del código fuente
 * @property string $AppObse7 Observaciones
 * @property string $AppFuncApru Funcionario que recibe a satisfacción
 *
 * @property Empsoporte $eSopId1
 * @property Tipos $tiposIdFk7
 * @property Tipos $tiposIdFk8
 * @property Tipos $tiposIdFk9
 * @property Tipos $tiposIdFk10
 * @property Tipos $tiposIdFk11
 * @property Tipos $tiposIdFk12
 * @property Tipos $tiposIdFk13
 * @property Tipos $tiposIdFk14
 * @property Tipos $tiposIdFk15
 * @property Tipos $tiposIdFk16
 * @property Empsoporte $eSopId2
 * @property Tipos $tiposIdFk17
 * @property Tipos $tiposIdFk18
 * @property Tipos $tiposIdFk19
 * @property Tipos $tiposIdFk20
 * @property Tipos $tiposIdFk21
 * @property Tipos $tiposIdFk22
 * @property Tipos $tiposIdFk23
 * @property Tipos $tiposIdFk24
 * @property Tipos $tiposIdFk25
 * @property Tipos $tiposIdFk26
 * @property User $usuIdFk
 * @property Tipos $tiposIdFk27
 * @property Tipos $tiposIdFk28
 * @property Tipos $tiposIdFk29
 * @property Tipos $tiposIdFk290
 * @property Tipos $tiposIdFk30
 * @property Tipos $tiposIdFk31
 * @property Tipos $tiposIdFk32
 * @property Tipos $tiposIdFk33
 * @property Tipos $tiposIdFk34
 * @property Tipos $tiposIdFk35
 * @property Tipos $tiposIdFk1
 * @property Tipos $tiposIdFk36
 * @property Tipos $tiposIdFk37
 * @property Tipos $tiposIdFk38
 * @property Tipos $tiposIdFk39
 * @property Tipos $tiposIdFk40
 * @property Tipos $tiposIdFk41
 * @property Tipos $tiposIdFk42
 * @property Tipos $tiposIdFk43
 * @property Tipos $tiposIdFk44
 * @property Tipos $tiposIdFk45
 * @property Tipos $tiposIdFk2
 * @property Tipos $tiposIdFk46
 * @property Tipos $tiposIdFk47
 * @property Tipos $tiposIdFk48
 * @property Tipos $tiposIdFk49
 * @property Tipos $tiposIdFk50
 * @property Tipos $tiposIdFk51
 * @property Tipos $tiposIdFk52
 * @property Tipos $tiposIdFk53
 * @property Tipos $tiposIdFk54
 * @property Tipos $tiposIdFk55
 * @property Tipos $tiposIdFk3
 * @property Tipos $tiposIdFk4
 * @property Tipos $tiposIdFk5
 * @property Tipos $tiposIdFk6
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
            [['AppNomb', 'AppDesc', 'AppSigl', 'AppVers', 'ESopId1', 'AppUrl', 'TiposId_fk1', 'TiposId_fk2', 'AppNumeDocuAdqu', 'AppValoAdqu', 'AppFechAdqu', 'TiposId_fk3', 'AppNombProc', 'AppEnti', 'ESopId2', 'TiposId_fk4', 'UsuId_fk', 'AppAcueNiveServ', 'TiposId_fk5', 'AppFechPues', 'AppServPues', 'TiposId_fk6', 'TiposId_fk7', 'TiposId_fk8', 'AppVersServ', 'TiposId_fk9', 'AppOtroCual1', 'TiposId_fk10', 'AppOtroCual2', 'TiposId_fk11', 'TiposId_fk12', 'AppOtroCual3', 'TiposId_fk13', 'TiposId_fk14', 'AppOtroCual4', 'TiposId_fk15', 'TiposId_fk16', 'TiposId_fk17', 'TiposId_fk18', 'AppOtroCual6', 'TiposId_fk19', 'AppCual', 'TiposId_fk20', 'AppDondUbic', 'AppTipoLice', 'AppNumeLice', 'TiposId_fk21', 'TiposId_fk22', 'TiposId_fk23', 'AppVersDist', 'TiposId_fk24', 'AppLengServ', 'AppVersApli', 'AppBibl', 'AppObse1', 'AppMane', 'AppVersBD', 'AppPuer1', 'AppObse2', 'AppTipoHard', 'AppProc', 'AppMemo', 'AppEspaDisc', 'AppObse3', 'AppDirec1', 'AppNombArch', 'AppVari', 'AppNombVari', 'AppDescPara', 'AppObse4', 'AppUrlFuen', 'AppServ', 'AppPuer2', 'AppDirec2', 'AppNombServBd', 'AppUsua', 'AppNombBd', 'AppRuta', 'AppEspaActu', 'AppProy', 'TiposId_fk25', 'AppOtroCual7', 'AppPoliBack', 'TiposId_fk26', 'TiposId_fk27', 'AppOtroCual8', 'TiposId_fk28', 'AppOtroCual9', 'AppCantLice', 'TiposId_fk29', 'TiposId_fk30', 'TiposId_fk31', 'TiposId_fk32', 'TiposId_fk33', 'TiposId_fk34', 'TiposId_fk35', 'TiposId_fk36', 'TiposId_fk37', 'TiposId_fk38', 'TiposId_fk39', 'TiposId_fk40', 'TiposId_fk41', 'TiposId_fk42', 'TiposId_fk43', 'TiposId_fk44', 'TiposId_fk45', 'TiposId_fk46', 'TiposId_fk47', 'TiposId_fk48', 'TiposId_fk49', 'TiposId_fk50', 'TiposId_fk51', 'TiposId_fk52', 'TiposId_fk53', 'TiposId_fk54', 'AppUbic', 'TiposId_fk55', 'AppUbicDocu', 'AppUbicUlti', 'AppObse7', 'AppFuncApru'], 'required'],
            [['ESopId1', 'TiposId_fk1', 'TiposId_fk2', 'TiposId_fk3', 'ESopId2', 'TiposId_fk4', 'UsuId_fk', 'TiposId_fk5', 'TiposId_fk6', 'TiposId_fk7', 'TiposId_fk8', 'TiposId_fk9', 'TiposId_fk10', 'TiposId_fk11', 'TiposId_fk12', 'TiposId_fk13', 'TiposId_fk14', 'TiposId_fk15', 'TiposId_fk16', 'TiposId_fk17', 'TiposId_fk18', 'TiposId_fk19', 'TiposId_fk20', 'TiposId_fk21', 'TiposId_fk22', 'TiposId_fk23', 'TiposId_fk24', 'TiposId_fk25', 'TiposId_fk26', 'TiposId_fk27', 'TiposId_fk28', 'TiposId_fk29', 'TiposId_fk30', 'TiposId_fk31', 'TiposId_fk32', 'TiposId_fk33', 'TiposId_fk34', 'TiposId_fk35', 'TiposId_fk36', 'TiposId_fk37', 'TiposId_fk38', 'TiposId_fk39', 'TiposId_fk40', 'TiposId_fk41', 'TiposId_fk42', 'TiposId_fk43', 'TiposId_fk44', 'TiposId_fk45', 'TiposId_fk46', 'TiposId_fk47', 'TiposId_fk48', 'TiposId_fk49', 'TiposId_fk50', 'TiposId_fk51', 'TiposId_fk52', 'TiposId_fk53', 'TiposId_fk54', 'TiposId_fk55'], 'integer'],
            [['AppFechAdqu', 'AppFechPues'], 'safe'],
            [['AppNomb', 'AppSigl', 'AppVers', 'AppNumeDocuAdqu', 'AppVersServ', 'AppUsua', 'AppEspaActu', 'AppProy'], 'string', 'max' => 50],
            [['AppDesc', 'AppAcueNiveServ'], 'string', 'max' => 500],
            [['AppUrl', 'AppValoAdqu', 'AppNombProc', 'AppEnti', 'AppServPues', 'AppOtroCual1', 'AppOtroCual2', 'AppOtroCual3', 'AppOtroCual4', 'AppOtroCual6', 'AppCual', 'AppTipoLice', 'AppNumeLice', 'AppVersDist', 'AppLengServ', 'AppVersApli', 'AppBibl', 'AppMane', 'AppVersBD', 'AppPuer1', 'AppMemo', 'AppEspaDisc', 'AppDirec1', 'AppNombArch', 'AppVari', 'AppNombVari', 'AppPuer2', 'AppNombServBd', 'AppNombBd', 'AppRuta', 'AppOtroCual7', 'AppPoliBack', 'AppOtroCual8', 'AppOtroCual9', 'AppFuncApru'], 'string', 'max' => 100],
            [['AppDondUbic', 'AppObse1', 'AppObse2', 'AppTipoHard', 'AppProc', 'AppObse3', 'AppDescPara', 'AppObse4', 'AppUrlFuen', 'AppServ', 'AppDirec2', 'AppUbic', 'AppUbicDocu', 'AppUbicUlti', 'AppObse7'], 'string', 'max' => 200],
            [['AppCantLice'], 'string', 'max' => 10],
            [['ESopId1'], 'exist', 'skipOnError' => true, 'targetClass' => Empsoporte::className(), 'targetAttribute' => ['ESopId1' => 'ESopId']],
            [['TiposId_fk7'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk7' => 'TiposId']],
            [['TiposId_fk8'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk8' => 'TiposId']],
            [['TiposId_fk9'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk9' => 'TiposId']],
            [['TiposId_fk10'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk10' => 'TiposId']],
            [['TiposId_fk11'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk11' => 'TiposId']],
            [['TiposId_fk12'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk12' => 'TiposId']],
            [['TiposId_fk13'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk13' => 'TiposId']],
            [['TiposId_fk14'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk14' => 'TiposId']],
            [['TiposId_fk15'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk15' => 'TiposId']],
            [['TiposId_fk16'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk16' => 'TiposId']],
            [['ESopId2'], 'exist', 'skipOnError' => true, 'targetClass' => Empsoporte::className(), 'targetAttribute' => ['ESopId2' => 'ESopId']],
            [['TiposId_fk17'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk17' => 'TiposId']],
            [['TiposId_fk18'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk18' => 'TiposId']],
            [['TiposId_fk19'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk19' => 'TiposId']],
            [['TiposId_fk20'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk20' => 'TiposId']],
            [['TiposId_fk21'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk21' => 'TiposId']],
            [['TiposId_fk22'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk22' => 'TiposId']],
            [['TiposId_fk23'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk23' => 'TiposId']],
            [['TiposId_fk24'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk24' => 'TiposId']],
            [['TiposId_fk25'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk25' => 'TiposId']],
            [['TiposId_fk26'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk26' => 'TiposId']],
            [['UsuId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['UsuId_fk' => 'id']],
            [['TiposId_fk27'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk27' => 'TiposId']],
            [['TiposId_fk28'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk28' => 'TiposId']],
            [['TiposId_fk29'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk29' => 'TiposId']],
            [['TiposId_fk29'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk29' => 'TiposId']],
            [['TiposId_fk30'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk30' => 'TiposId']],
            [['TiposId_fk31'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk31' => 'TiposId']],
            [['TiposId_fk32'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk32' => 'TiposId']],
            [['TiposId_fk33'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk33' => 'TiposId']],
            [['TiposId_fk34'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk34' => 'TiposId']],
            [['TiposId_fk35'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk35' => 'TiposId']],
            [['TiposId_fk1'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk1' => 'TiposId']],
            [['TiposId_fk36'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk36' => 'TiposId']],
            [['TiposId_fk37'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk37' => 'TiposId']],
            [['TiposId_fk38'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk38' => 'TiposId']],
            [['TiposId_fk39'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk39' => 'TiposId']],
            [['TiposId_fk40'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk40' => 'TiposId']],
            [['TiposId_fk41'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk41' => 'TiposId']],
            [['TiposId_fk42'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk42' => 'TiposId']],
            [['TiposId_fk43'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk43' => 'TiposId']],
            [['TiposId_fk44'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk44' => 'TiposId']],
            [['TiposId_fk45'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk45' => 'TiposId']],
            [['TiposId_fk2'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk2' => 'TiposId']],
            [['TiposId_fk46'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk46' => 'TiposId']],
            [['TiposId_fk47'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk47' => 'TiposId']],
            [['TiposId_fk48'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk48' => 'TiposId']],
            [['TiposId_fk49'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk49' => 'TiposId']],
            [['TiposId_fk50'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk50' => 'TiposId']],
            [['TiposId_fk51'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk51' => 'TiposId']],
            [['TiposId_fk52'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk52' => 'TiposId']],
            [['TiposId_fk53'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk53' => 'TiposId']],
            [['TiposId_fk54'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk54' => 'TiposId']],
            [['TiposId_fk55'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk55' => 'TiposId']],
            [['TiposId_fk3'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk3' => 'TiposId']],
            [['TiposId_fk4'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk4' => 'TiposId']],
            [['TiposId_fk5'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk5' => 'TiposId']],
            [['TiposId_fk6'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk6' => 'TiposId']],
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
            'TiposId_fk5' => 'Tipo de Puesta ',
            'AppFechPues' => 'Fecha de puesta',
            'AppServPues' => 'Servidor de puesta',
            'TiposId_fk6' => 'Ámbito de aplicación',
            'TiposId_fk7' => 'Propósito de Aplicación',
            'TiposId_fk8' => 'Servidor Web',
            'AppVersServ' => 'Versión del servidor',
            'TiposId_fk9' => 'Código ejecutado en el cliente',
            'AppOtroCual1' => 'Cuál',
            'TiposId_fk10' => 'Código ejecutado en el servidor ',
            'AppOtroCual2' => 'Cuál',
            'TiposId_fk11' => '¿Requiere base de datos?',
            'TiposId_fk12' => '¿Cuál?',
            'AppOtroCual3' => 'Cuál',
            'TiposId_fk13' => '¿Maneja varios idiomas?',
            'TiposId_fk14' => '¿Cuál?',
            'AppOtroCual4' => 'Cuál',
            'TiposId_fk15' => '¿Utiliza Manejador de Reportes?',
            'TiposId_fk16' => '¿Cuál?',
            'TiposId_fk17' => '¿Permite exportar datos?',
            'TiposId_fk18' => '¿Cuál?',
            'AppOtroCual6' => 'Cuál',
            'TiposId_fk19' => '¿Interactúa con otra aplicación?',
            'AppCual' => 'Cuál',
            'TiposId_fk20' => '¿Se tiene código fuente?',
            'AppDondUbic' => '¿Dónde está ubicado?',
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
            'AppDirec1' => 'Directorio',
            'AppNombArch' => 'Nombre del archivo',
            'AppVari' => 'Variable / Tipo de variable',
            'AppNombVari' => 'Nombre de la Variable',
            'AppDescPara' => 'Descripción',
            'AppObse4' => 'Observaciones',
            'AppUrlFuen' => 'URL fuente',
            'AppServ' => 'Servidor',
            'AppPuer2' => 'Puerto',
            'AppDirec2' => 'Directorio',
            'AppNombServBd' => 'Nombre Servidor de BD',
            'AppUsua' => 'Usuario',
            'AppNombBd' => 'Nombre BD',
            'AppRuta' => 'Ruta',
            'AppEspaActu' => 'Espacio en disco (Actual)',
            'AppProy' => 'Proyección a 3 años',
            'TiposId_fk25' => 'Método de Backup',
            'AppOtroCual7' => 'Cuál',
            'AppPoliBack' => 'Política de Backup',
            'TiposId_fk26' => 'Periocidad',
            'TiposId_fk27' => 'Medio de Almacenamiento',
            'AppOtroCual8' => 'Cuál',
            'TiposId_fk28' => 'Licenciamiento de BD',
            'AppOtroCual9' => 'Cuál',
            'AppCantLice' => 'Cantidad de licencias',
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
            'AppUbic' => 'Ubicación Disco C:',
            'TiposId_fk55' => 'Contenido del medio digital',
            'AppUbicDocu' => 'Ubicación Documentación',
            'AppUbicUlti' => 'Ubicación última versión del código fuente',
            'AppObse7' => 'Observaciones',
            'AppFuncApru' => 'Funcionario que recibe a satisfacción',
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
    public function getTiposIdFk7()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk7']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk8()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk8']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk9()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk9']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk10()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk10']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk11()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk11']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk12()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk12']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk13()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk13']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk14()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk14']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk15()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk15']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk16()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk16']);
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
    public function getTiposIdFk17()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk17']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk18()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk18']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk19()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk19']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk20()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk20']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk21()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk21']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk22()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk22']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk23()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk23']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk24()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk24']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk25()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk25']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk26()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk26']);
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
    public function getTiposIdFk27()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk27']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk28()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk28']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk29()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk29']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk290()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk29']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk30()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk30']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk31()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk31']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk32()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk32']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk33()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk33']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk34()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk34']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk35()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk35']);
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
    public function getTiposIdFk36()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk36']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk37()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk37']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk38()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk38']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk39()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk39']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk40()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk40']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk41()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk41']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk42()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk42']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk43()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk43']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk44()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk44']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk45()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk45']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk2()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk46()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk46']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk47()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk47']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk48()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk48']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk49()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk49']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk50()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk50']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk51()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk51']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk52()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk52']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk53()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk53']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk54()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk54']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk55()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk55']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk3()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk3']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk4()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk4']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk5()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk5']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk6()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk6']);
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
}
