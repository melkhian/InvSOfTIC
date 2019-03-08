<?php

namespace backend\controllers;

use Yii;
use backend\models\Aplicaciones;
use backend\models\AplicacionesSearch;
use backend\models\Appmodulos;
use backend\models\Model;
use backend\models\Appplugins;
use backend\models\Appdirectorios;
use backend\models\Appusuarios;
use backend\models\Apparchivos;
use backend\models\Appparametros;
use backend\models\Appaceptacion;
use backend\models\Appinteractua;
use backend\models\Appinformacion;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

/**
* AplicacionesController implements the CRUD actions for Aplicaciones model.
*/
class AplicacionesController extends Controller
{
  /**
  * @inheritdoc
  */
  public function behaviors()
  {
    return [
      'verbs' => [
        'class' => VerbFilter::className(),
        'actions' => [
          'delete' => ['POST'],
        ],
      ],
    ];
  }

  /**
  * Lists all Aplicaciones models.
  * @return mixed
  */
  public function actionIndex()
  {
    if(isset(Yii::$app->user->identity->id)){
      if(SiteController::findCom(8) or SiteController::findCom(9) or SiteController::findCom(10) or SiteController::findCom(11)){
        $searchModel = new AplicacionesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
          'searchModel' => $searchModel,
          'dataProvider' => $dataProvider,
        ]);
      }else {
        $this->redirect(['site/error']);
      }
    }
    else {
      $this->redirect(['site/login']);
    }
  }

  /**
  * Displays a single Aplicaciones model.
  * @param integer $id
  * @return mixed
  * @throws NotFoundHttpException if the model cannot be found
  */
  public function actionView($id)
  {
    if(isset(Yii::$app->user->identity->id)){
      if(SiteController::findCom(9)){
        return $this->render('view', [
          'model' => $this->findModel($id),
        ]);
      }
      else {
        $this->redirect(['site/error']);
      }
    }else {
      $this->redirect(['site/login']);
    }
  }

  /**
  * Creates a new Aplicaciones model.
  * If creation is successful, the browser will be redirected to the 'view' page.
  * @return mixed
  */

  public function actionCreate()
  {
    if(isset(Yii::$app->user->identity->id)){
      if(SiteController::findCom(8)){

        // NOTE: Se agregan los modelos 1:N

        $model = new Aplicaciones();
        $modelsAppmodulos = [new Appmodulos];
        $modelsAppplugins = [new Appplugins];
        $modelsAppdirectorios = [new Appdirectorios];
        $modelsAppusuarios = [new Appusuarios];
        $modelsApparchivos = [new Apparchivos];
        $modelsAppparametros = [new Appparametros];
        $modelsAppaceptacion = [new Appaceptacion];
        $modelsAppinteractua = [new Appinteractua];
        $modelsAppinformacion = [new Appinformacion];

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

          // NOTE: Se cargan los modelos 1:N

          $modelsAppmodulos = Model::createMultiple(Appmodulos::classname());
          Model::loadMultiple($modelsAppmodulos, Yii::$app->request->post());

          $modelsAppplugins = Model::createMultiple(Appplugins::classname());
          Model::loadMultiple($modelsAppplugins, Yii::$app->request->post());

          $modelsAppdirectorios = Model::createMultiple(Appdirectorios::classname());
          Model::loadMultiple($modelsAppdirectorios, Yii::$app->request->post());

          $modelsAppusuarios = Model::createMultiple(Appusuarios::classname());
          Model::loadMultiple($modelsAppusuarios, Yii::$app->request->post());

          $modelsApparchivos = Model::createMultiple(Apparchivos::classname());
          Model::loadMultiple($modelsApparchivos, Yii::$app->request->post());

          $modelsAppparametros = Model::createMultiple(Appparametros::classname());
          Model::loadMultiple($modelsAppparametros, Yii::$app->request->post());

          $modelsAppaceptacion = Model::createMultiple(Appaceptacion::classname());
          Model::loadMultiple($modelsAppaceptacion, Yii::$app->request->post());

          $modelsAppinteractua = Model::createMultiple(Appinteractua::classname());
          Model::loadMultiple($modelsAppinteractua, Yii::$app->request->post());

          $modelsAppinformacion = Model::createMultiple(Appinformacion::classname());
          Model::loadMultiple($modelsAppinformacion, Yii::$app->request->post());

          // validate all models
          $valid = $model->validate();
          // $valid = Model::validateMultiple($modelsAppmodulos) && $valid;

          if ($valid) {

            $transaction = \Yii::$app->db->beginTransaction();
            try {
              if ($flag = $model->save(false)) {
                // NOTE: Se realiza foreach de los elementos pertenecientes a cada modelo 1:N, se relaciona la llave foránea con la primaria de Aplicaciones
                foreach ($modelsAppmodulos as $modelAppmodulos) {
                  $modelAppmodulos->AppId_fk = $model->AppId;
                  if (! ($flag = $modelAppmodulos->save(false))) {
                    $transaction->rollBack();
                    break;
                  }
                }
                foreach ($modelsAppplugins as $modelAppplugins) {
                  $modelAppplugins->AppId_fk = $model->AppId;
                  if (! ($flag = $modelAppplugins->save(false))) {
                    $transaction->rollBack();
                    break;
                  }
                }
                foreach ($modelsAppdirectorios as $modelAppdirectorios) {
                  $modelAppdirectorios->AppId_fk = $model->AppId;
                  if (! ($flag = $modelAppdirectorios->save(false))) {
                    $transaction->rollBack();
                    break;
                  }
                }
                foreach ($modelsAppusuarios as $modelAppusuarios) {
                  $modelAppusuarios->AppId_fk = $model->AppId;
                  if (! ($flag = $modelAppusuarios->save(false))) {
                    $transaction->rollBack();
                    break;
                  }
                }
                foreach ($modelsApparchivos as $modelApparchivos) {
                  $modelApparchivos->AppId_fk = $model->AppId;
                  if (! ($flag = $modelApparchivos->save(false))) {
                    $transaction->rollBack();
                    break;
                  }
                }
                foreach ($modelsAppparametros as $modelAppparametros) {
                  $modelAppparametros->AppId_fk = $model->AppId;
                  if (! ($flag = $modelAppparametros->save(false))) {
                    $transaction->rollBack();
                    break;
                  }
                }
                foreach ($modelsAppaceptacion as $modelAppaceptacion) {
                  $modelAppaceptacion->AppId_fk = $model->AppId;
                  if (! ($flag = $modelAppaceptacion->save(false))) {
                    $transaction->rollBack();
                    break;
                  }
                }
                foreach ($modelsAppinteractua as $modelAppinteractua) {
                  $modelAppinteractua->AppId_fk = $model->AppId;
                  if (! ($flag = $modelAppinteractua->save(false))) {
                    $transaction->rollBack();
                    break;
                  }
                }
                foreach ($modelsAppinformacion as $modelAppinformacion) {
                  $modelAppinformacion->AppId_fk = $model->AppId;
                  if (! ($flag = $modelAppinformacion->save(false))) {
                    $transaction->rollBack();
                    break;
                  }
                }
              }
              if ($flag) {
                $transaction->commit();
                return $this->redirect(['view', 'id' => $model->AppId]);
              }
            } catch (Exception $e) {
              $transaction->rollBack();
            }
          }

        }
        // NOTE: Se renderizan todos los modelos que se usan en el formulario
        return $this->render('create', [
          'model' => $model,
          'modelsAppmodulos' => (empty($modelsAppmodulos)) ? [new Appmodulos] : $modelsAppmodulos,
          'modelsAppplugins' => (empty($modelsAppplugins)) ? [new Appplugins] : $modelsAppplugins,
          'modelsAppdirectorios' => (empty($modelsAppdirectorios)) ? [new Appdirectorios] : $modelsAppdirectorios,
          'modelsAppusuarios' => (empty($modelsAppusuarios)) ? [new Appusuarios] : $modelsAppusuarios,
          'modelsApparchivos' => (empty($modelsApparchivos)) ? [new Apparchivos] : $modelsApparchivos,
          'modelsAppparametros' => (empty($modelsAppparametros)) ? [new Appparametros] : $modelsAppparametros,
          'modelsAppaceptacion' => (empty($modelsAppaceptacion)) ? [new Appaceptacion] : $modelsAppaceptacion,
          'modelsAppinteractua' => (empty($modelsAppinteractua)) ? [new Appinteractua] : $modelsAppinteractua,
          'modelsAppinformacion' => (empty($modelsAppinformacion)) ? [new Appinformacion] : $modelsAppinformacion,
        ]);
      }
      else {
        $this->redirect(['site/error']);
      }
    }else {
      $this->redirect(['site/login']);
    }
  }

  /**
  * Updates an existing Aplicaciones model.
  * If update is successful, the browser will be redirected to the 'view' page.
  * @param integer $id
  * @return mixed
  * @throws NotFoundHttpException if the model cannot be found
  */
  public function actionUpdate($id)
  {
    if(isset(Yii::$app->user->identity->id)){
      if(SiteController::findCom(10)){
        $model = $this->findModel($id);
        $modelsAppmodulos = $model->appmodulos;
        $modelsAppplugins = $model->appplugins;
        $modelsAppdirectorios = $model->appdirectorios;
        $modelsAppusuarios = $model->appusuarios;
        $modelsApparchivos = $model->apparchivos;
        $modelsAppparametros = $model->appparametros;
        $modelsAppaceptacion = $model->appaceptacion;
        $modelsAppinteractua = $model->appinteractua;
        $modelsAppinformacion = $model->appinformacion;

        //Se agrega para pasar de String a Array
        $model->TiposId_fk5 = explode(',',$model->TiposId_fk5);
        $model->TiposId_fk6 = explode(',',$model->TiposId_fk6);
        $model->TiposId_fk7 = explode(',',$model->TiposId_fk7);
        $model->TiposId_fk8 = explode(',',$model->TiposId_fk8);
        $model->TiposId_fk9 = explode(',',$model->TiposId_fk9);
        $model->TiposId_fk10 = explode(',',$model->TiposId_fk10);
        $model->TiposId_fk12 = explode(',',$model->TiposId_fk12);
        $model->TiposId_fk14 = explode(',',$model->TiposId_fk14);
        $model->TiposId_fk16 = explode(',',$model->TiposId_fk16);
        $model->TiposId_fk18 = explode(',',$model->TiposId_fk18);
        $model->TiposId_fk21 = explode(',',$model->TiposId_fk21);
        $model->TiposId_fk23 = explode(',',$model->TiposId_fk23);

        $model->TiposId_fk31 = explode(',',$model->TiposId_fk31);
        $model->TiposId_fk34 = explode(',',$model->TiposId_fk34);
        $model->TiposId_fk37 = explode(',',$model->TiposId_fk37);
        $model->TiposId_fk40 = explode(',',$model->TiposId_fk40);
        $model->TiposId_fk43 = explode(',',$model->TiposId_fk43);
        $model->TiposId_fk46 = explode(',',$model->TiposId_fk46);
        $model->TiposId_fk49 = explode(',',$model->TiposId_fk49);
        $model->TiposId_fk52 = explode(',',$model->TiposId_fk52);
        $model->TiposId_fk55 = explode(',',$model->TiposId_fk55);

        // NOTE: Ciclo para realizar explode de los checkBox presentes en views/aplicaciones/Tabs/infoBase.php. Difieren porque están dentro de un DynamicFormWidget

        for ($i=0; $i < count($model->appinformacion); $i++) {
          $modelsAppinformacion[$i]['TiposId_fk25'] = explode(',',$modelsAppinformacion[$i]['TiposId_fk25']);
          $modelsAppinformacion[$i]['TiposId_fk26'] = explode(',',$modelsAppinformacion[$i]['TiposId_fk26']);
          $modelsAppinformacion[$i]['TiposId_fk27'] = explode(',',$modelsAppinformacion[$i]['TiposId_fk27']);
          $modelsAppinformacion[$i]['TiposId_fk28'] = explode(',',$modelsAppinformacion[$i]['TiposId_fk28']);
        }



        if ($model->load(Yii::$app->request->post()) && $model->save()) {

          $oldIDs = ArrayHelper::map($modelsAppmodulos, 'AModId', 'AModId');
          $modelsAppmodulos = Model::createMultiple(Appmodulos::classname(), $modelsAppmodulos);
          Model::loadMultiple($modelsAppmodulos, Yii::$app->request->post());
          $deletedIDs = array_diff($oldIDs, array_filter(ArrayHelper::map($modelsAppmodulos, 'AModId', 'AModId')));

          $oldIDs1 = ArrayHelper::map($modelsAppplugins, 'APluId', 'APluId');
          $modelsAppplugins = Model::createMultiple(Appplugins::classname(), $modelsAppplugins);
          Model::loadMultiple($modelsAppplugins, Yii::$app->request->post());
          $deletedIDs1 = array_diff($oldIDs1, array_filter(ArrayHelper::map($modelsAppplugins, 'APluId', 'APluId')));

          $oldIDs2 = ArrayHelper::map($modelsAppdirectorios, 'ADirId', 'ADirId');
          $modelsAppdirectorios = Model::createMultiple(Appdirectorios::classname(), $modelsAppdirectorios);
          Model::loadMultiple($modelsAppdirectorios, Yii::$app->request->post());
          $deletedIDs2 = array_diff($oldIDs2, array_filter(ArrayHelper::map($modelsAppdirectorios, 'ADirId', 'ADirId')));

          $oldIDs3 = ArrayHelper::map($modelsAppusuarios, 'AUsuId', 'AUsuId');
          $modelsAppusuarios = Model::createMultiple(Appusuarios::classname(), $modelsAppusuarios);
          Model::loadMultiple($modelsAppusuarios, Yii::$app->request->post());
          $deletedIDs3 = array_diff($oldIDs3, array_filter(ArrayHelper::map($modelsAppusuarios, 'AUsuId', 'AUsuId')));

          $oldIDs4 = ArrayHelper::map($modelsApparchivos, 'AArcId', 'AArcId');
          $modelsApparchivos = Model::createMultiple(Apparchivos::classname(), $modelsApparchivos);
          Model::loadMultiple($modelsApparchivos, Yii::$app->request->post());
          $deletedIDs4 = array_diff($oldIDs4, array_filter(ArrayHelper::map($modelsApparchivos, 'AArcId', 'AArcId')));

          $oldIDs5 = ArrayHelper::map($modelsAppparametros, 'AParId', 'AParId');
          $modelsAppparametros = Model::createMultiple(Appparametros::classname(), $modelsAppparametros);
          Model::loadMultiple($modelsAppparametros, Yii::$app->request->post());
          $deletedIDs5 = array_diff($oldIDs5, array_filter(ArrayHelper::map($modelsAppparametros, 'AParId', 'AParId')));

          $oldIDs6 = ArrayHelper::map($modelsAppaceptacion, 'AAceId', 'AAceId');
          $modelsAppaceptacion = Model::createMultiple(Appaceptacion::classname(), $modelsAppaceptacion);
          Model::loadMultiple($modelsAppaceptacion, Yii::$app->request->post());
          $deletedIDs6 = array_diff($oldIDs6, array_filter(ArrayHelper::map($modelsAppaceptacion, 'AAceId', 'AAceId')));

          $oldIDs7 = ArrayHelper::map($modelsAppinteractua, 'AIntId', 'AIntId');
          $modelsAppinteractua = Model::createMultiple(Appinteractua::classname(), $modelsAppinteractua);
          Model::loadMultiple($modelsAppinteractua, Yii::$app->request->post());
          $deletedIDs7 = array_diff($oldIDs7, array_filter(ArrayHelper::map($modelsAppinteractua, 'AIntId', 'AIntId')));

          $oldIDs8 = ArrayHelper::map($modelsAppinformacion, 'AInfId', 'AInfId');
          $modelsAppinformacion = Model::createMultiple(Appinformacion::classname(), $modelsAppinformacion);
          Model::loadMultiple($modelsAppinformacion, Yii::$app->request->post());
          $deletedIDs8 = array_diff($oldIDs8, array_filter(ArrayHelper::map($modelsAppinformacion, 'AInfId', 'AInfId')));

          // validate all models
          $valid = $model->validate();
          // $valid = Model::validateMultiple($modelsAppmodulos) && $valid;

          if ($valid) {
            $transaction = \Yii::$app->db->beginTransaction();
            try {
              // NOTE: Elimina los elementos del módulo correspondiente cuando se elimina del formulario en los modelos 1:N
              if ($flag = $model->save(false)) {
                if (! empty($deletedIDs)) {
                  Appmodulos::deleteAll(['AModId' => $deletedIDs]);
                }
                if (! empty($deletedIDs1)) {
                  Appplugins::deleteAll(['APluId' => $deletedIDs1]);
                }
                if (! empty($deletedIDs2)) {
                  Appdirectorios::deleteAll(['ADirId' => $deletedIDs2]);
                }
                if (! empty($deletedIDs3)) {
                  Appusuarios::deleteAll(['AUsuId' => $deletedIDs3]);
                }
                if (! empty($deletedIDs4)) {
                  Apparchivos::deleteAll(['AArcId' => $deletedIDs4]);
                }
                if (! empty($deletedIDs5)) {
                  Appparametros::deleteAll(['AParId' => $deletedIDs5]);
                }
                if (! empty($deletedIDs6)) {
                  Appaceptacion::deleteAll(['AAceId' => $deletedIDs6]);
                }
                if (! empty($deletedIDs7)) {
                  Appinteractua::deleteAll(['AIntId' => $deletedIDs7]);
                }
                if (! empty($deletedIDs8)) {
                  Appinformacion::deleteAll(['AInfId' => $deletedIDs8]);
                }

                foreach ($modelsAppmodulos as $modelAppmodulos) {
                  $modelAppmodulos->AppId_fk = $model->AppId;
                  if (! ($flag = $modelAppmodulos->save(false))) {
                    $transaction->rollBack();
                    break;
                  }
                }
                foreach ($modelsAppplugins as $modelAppplugins) {
                  $modelAppplugins->AppId_fk = $model->AppId;
                  if (! ($flag = $modelAppplugins->save(false))) {
                    $transaction->rollBack();
                    break;
                  }
                }
                foreach ($modelsAppdirectorios as $modelAppdirectorios) {
                  $modelAppdirectorios->AppId_fk = $model->AppId;
                  if (! ($flag = $modelAppdirectorios->save(false))) {
                    $transaction->rollBack();
                    break;
                  }
                }
                foreach ($modelsAppusuarios as $modelAppusuarios) {
                  $modelAppusuarios->AppId_fk = $model->AppId;
                  if (! ($flag = $modelAppusuarios->save(false))) {
                    $transaction->rollBack();
                    break;
                  }
                }
                foreach ($modelsApparchivos as $modelApparchivos) {
                  $modelApparchivos->AppId_fk = $model->AppId;
                  if (! ($flag = $modelApparchivos->save(false))) {
                    $transaction->rollBack();
                    break;
                  }
                }
                foreach ($modelsAppparametros as $modelAppparametros) {
                  $modelAppparametros->AppId_fk = $model->AppId;
                  if (! ($flag = $modelAppparametros->save(false))) {
                    $transaction->rollBack();
                    break;
                  }
                }
                foreach ($modelsAppaceptacion as $modelAppaceptacion) {
                  $modelAppaceptacion->AppId_fk = $model->AppId;
                  if (! ($flag = $modelAppaceptacion->save(false))) {
                    $transaction->rollBack();
                    break;
                  }
                }
                foreach ($modelsAppinteractua as $modelAppinteractua) {
                  $modelAppinteractua->AppId_fk = $model->AppId;
                  if (! ($flag = $modelAppinteractua->save(false))) {
                    $transaction->rollBack();
                    break;
                  }
                }
                foreach ($modelsAppinformacion as $modelAppinformacion) {
                  $modelAppinformacion->AppId_fk = $model->AppId;

                  // NOTE: Se realiza aquí el implode para los checkBox presentes en views/aplicaciones/Tabs/infoBase.php
                  $modelAppinformacion->TiposId_fk25 = implode(',',(array)$modelAppinformacion->TiposId_fk25);
                  $modelAppinformacion->TiposId_fk26 = implode(',',(array)$modelAppinformacion->TiposId_fk26);
                  $modelAppinformacion->TiposId_fk27 = implode(',',(array)$modelAppinformacion->TiposId_fk27);
                  $modelAppinformacion->TiposId_fk28 = implode(',',(array)$modelAppinformacion->TiposId_fk28);
                  if (! ($flag = $modelAppinformacion->save(false))) {
                    $transaction->rollBack();
                    break;
                  }
                }
              }
              if ($flag) {
                $transaction->commit();
                return $this->redirect(['view', 'id' => $model->AppId]);
              }
            } catch (Exception $e) {
              $transaction->rollBack();
            }
          }
        }

        return $this->render('update', [
          'model' => $model,
          'modelsAppmodulos' => (empty($modelsAppmodulos)) ? [new Appmodulos] : $modelsAppmodulos,
          'modelsAppplugins' => (empty($modelsAppplugins)) ? [new Appplugins] : $modelsAppplugins,
          'modelsAppdirectorios' => (empty($modelsAppdirectorios)) ? [new Appdirectorios] : $modelsAppdirectorios,
          'modelsAppusuarios' => (empty($modelsAppusuarios)) ? [new Appusuarios] : $modelsAppusuarios,
          'modelsApparchivos' => (empty($modelsApparchivos)) ? [new Apparchivos] : $modelsApparchivos,
          'modelsAppparametros' => (empty($modelsAppparametros)) ? [new Appparametros] : $modelsAppparametros,
          'modelsAppaceptacion' => (empty($modelsAppaceptacion)) ? [new Appaceptacion] : $modelsAppaceptacion,
          'modelsAppinteractua' => (empty($modelsAppinteractua)) ? [new Appinteractua] : $modelsAppinteractua,
          'modelsAppinformacion' => (empty($modelsAppinformacion)) ? [new Appinformacion] : $modelsAppinformacion,
        ]);
      }
      else {
        $this->redirect(['site/error']);
      }
    }else {
      $this->redirect(['site/login']);
    }
  }
  /**
  * Deletes an existing Aplicaciones model.
  * If deletion is successful, the browser will be redirected to the 'index' page.
  * @param integer $id
  * @return mixed
  * @throws NotFoundHttpException if the model cannot be found
  */
  public function actionDelete($id)
  {
    if(isset(Yii::$app->user->identity->id)){
      if(SiteController::findCom(11)){
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
      }
      else {
        $this->redirect(['site/error']);
      }

    }else {
      $this->redirect(['site/login']);
    }
  }

  /**
  * Finds the Aplicaciones model based on its primary key value.
  * If the model is not found, a 404 HTTP exception will be thrown.
  * @param integer $id
  * @return Aplicaciones the loaded model
  * @throws NotFoundHttpException if the model cannot be found
  */
  protected function findModel($id)
  {
    if (($model = Aplicaciones::findOne($id)) !== null) {
      return $model;
    }

    throw new NotFoundHttpException('The requested page does not exist.');
  }
}
