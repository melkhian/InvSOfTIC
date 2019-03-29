<?php

namespace backend\controllers;

use Yii;
use backend\models\Requerimientos;
use backend\models\RequerimientosSearch;
use yii\web\Controller;
use backend\models\Model;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\Expression;
use backend\models\Versdocrequerimientos;
use backend\models\Estrequerimientos;
use yii\helpers\ArrayHelper;

/**
 * RequerimientosController implements the CRUD actions for Requerimientos model.
 */
class RequerimientosController extends Controller
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
     * Lists all Requerimientos models.
     * @return mixed
     */
    public function actionIndex()
    {
      if(isset(Yii::$app->user->identity->id)){
        if(SiteController::findCom(27) or SiteController::findCom(28) or SiteController::findCom(29)){
        $searchModel = new RequerimientosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
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
     * Displays a single Requerimientos model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
      if(isset(Yii::$app->user->identity->id)){
        if(SiteController::findCom(28)){
        $model = $this->findModel($id);
        $modelsVersdocrequerimientos = $model->versdocrequerimientos;
        $modelsEstrequerimientos = $model->estrequerimientos;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

          $oldIDs = ArrayHelper::map($modelsVersdocrequerimientos, 'VDReqId', 'VDReqId');
          $modelsVersdocrequerimientos = Model::createMultiple(Versdocrequerimientos::classname(), $modelsVersdocrequerimientos);
          Model::loadMultiple($modelsVersdocrequerimientos, Yii::$app->request->post());
          $deletedIDs = array_diff($oldIDs, array_filter(ArrayHelper::map($modelsVersdocrequerimientos, 'VDReqId', 'VDReqId')));

          $oldIDs1 = ArrayHelper::map($modelsEstrequerimientos, 'EReqId', 'EReqId');
          $modelsEstrequerimientos = Model::createMultiple(Estrequerimientos::classname(), $modelsEstrequerimientos);
          Model::loadMultiple($modelsEstrequerimientos, Yii::$app->request->post());
          $deletedIDs1 = array_diff($oldIDs1, array_filter(ArrayHelper::map($modelsEstrequerimientos, 'EReqId', 'EReqId')));

          // validate all models
          $valid = $model->validate();

          if ($valid) {
            $transaction = \Yii::$app->db->beginTransaction();
            try {
              // NOTE: Elimina los elementos del módulo correspondiente cuando se elimina del formulario en los modelos 1:N
              if ($flag = $model->save(false)) {
                if (! empty($deletedIDs)) {
                  Versdocrequerimientos::deleteAll(['VDReqId' => $deletedIDs]);
                }
                if (! empty($deletedIDs1)) {
                  Estrequerimientos::deleteAll(['EReqId' => $deletedIDs1]);
                }

                foreach ($modelsVersdocrequerimientos as $modelVersdocrequerimientos) {
                  $modelVersdocrequerimientos->ReqId_fk = $model->ReqId;
                  if (! ($flag = $modelVersdocrequerimientos->save(false))) {
                    $transaction->rollBack();
                    break;
                  }
                }
                foreach ($modelsEstrequerimientos as $modelEstrequerimientos) {
                  $modelEstrequerimientos->ReqId_fk = $model->ReqId;
                  if (! ($flag = $modelEstrequerimientos->save(false))) {
                    $transaction->rollBack();
                    break;
                  }
                }
              }

              if ($flag) {
                $transaction->commit();
                return $this->redirect(['view', 'id' => $model->ReqId]);
              }
            } catch (Exception $e) {
              $transaction->rollBack();
            }
          }

            return $this->redirect(['view', 'id' => $model->ReqId]);
        }

        return $this->render('view', [
            'model' => $model,
            'modelsVersdocrequerimientos' => (empty($modelsVersdocrequerimientos)) ? [new Versdocrequerimientos] : $modelsVersdocrequerimientos,
            'modelsEstrequerimientos' => (empty($modelsEstrequerimientos)) ? [new Estrequerimientos] : $modelsEstrequerimientos,
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
     * Creates a new Requerimientos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
      if(isset(Yii::$app->user->identity->id)){
        if(SiteController::findCom(27)){
        $model = new Requerimientos();
        $modelsVersdocrequerimientos = [new Versdocrequerimientos];
        $modelsEstrequerimientos = [new Estrequerimientos];

        // echo "<pre>";
        // print_r($modelsVersdocrequerimientos);
        // echo "<pre>";
        // die();

        // NOTE: Para insertar de manera automática la fecha de creación del registro
        $expression = new Expression('NOW()');
        $now = (new \yii\db\Query)->select($expression)->scalar();  // SELECT NOW();
        $model->ReqFechSist = $now;

        // NOTE: Para insertar de manera automática la fecha de creación del registro
        $expression = new Expression('NOW()');
        $now = (new \yii\db\Query)->select($expression)->scalar();  // SELECT NOW();
        $modelsEstrequerimientos[0]->EReqFechSist = $now;

        // NOTE: Para insertar de manera automática la fecha de creación del registro
        $expression = new Expression('NOW()');
        $now = (new \yii\db\Query)->select($expression)->scalar();  // SELECT NOW();
        $modelsVersdocrequerimientos[0]->VDReqFechSist = $now;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

          // NOTE: Se cargan los modelos 1:N

          $modelsVersdocrequerimientos = Model::createMultiple(Versdocrequerimientos::classname());
          Model::loadMultiple($modelsVersdocrequerimientos, Yii::$app->request->post());

          $modelsEstrequerimientos = Model::createMultiple(Estrequerimientos::classname());
          Model::loadMultiple($modelsEstrequerimientos, Yii::$app->request->post());

          $valid = $model->validate();

          if ($valid) {

            $transaction = \Yii::$app->db->beginTransaction();
            try {
              if ($flag = $model->save(false)) {
                // NOTE: Se realiza foreach de los elementos pertenecientes a cada modelo 1:N, se relaciona la llave foránea con la primaria de Aplicaciones
                foreach ($modelsVersdocrequerimientos as $modelVersdocrequerimientos) {
                  $modelVersdocrequerimientos->ReqId_fk = $model->ReqId;
                  if (! ($flag = $modelVersdocrequerimientos->save(false))) {
                    $transaction->rollBack();
                    break;
                  }
                }
                foreach ($modelsEstrequerimientos as $modelEstrequerimientos) {
                  $modelEstrequerimientos->ReqId_fk = $model->ReqId;
                  if (! ($flag = $modelEstrequerimientos->save(false))) {
                    $transaction->rollBack();
                    break;
                  }
                }
              }
              if ($flag) {
                $transaction->commit();
                return $this->redirect(['view', 'id' => $model->ReqId]);
              }
            } catch (Exception $e) {
              $transaction->rollBack();
            }
          }
        }

        return $this->render('create', [
            'model' => $model,
            'modelsVersdocrequerimientos' => (empty($modelsVersdocrequerimientos)) ? [new Versdocrequerimientos] : $modelsVersdocrequerimientos,
            'modelsEstrequerimientos' => (empty($modelsEstrequerimientos)) ? [new Estrequerimientos] : $modelsEstrequerimientos,
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
     * Updates an existing Requerimientos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
      if(isset(Yii::$app->user->identity->id)){
        if(SiteController::findCom(29)){
        $model = $this->findModel($id);
        $modelsVersdocrequerimientos = $model->versdocrequerimientos;
        $modelsEstrequerimientos = $model->estrequerimientos;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

          $oldIDs = ArrayHelper::map($modelsVersdocrequerimientos, 'VDReqId', 'VDReqId');
          $modelsVersdocrequerimientos = Model::createMultiple(Versdocrequerimientos::classname(), $modelsVersdocrequerimientos);
          Model::loadMultiple($modelsVersdocrequerimientos, Yii::$app->request->post());
          $deletedIDs = array_diff($oldIDs, array_filter(ArrayHelper::map($modelsVersdocrequerimientos, 'VDReqId', 'VDReqId')));

          $oldIDs1 = ArrayHelper::map($modelsEstrequerimientos, 'EReqId', 'EReqId');
          $modelsEstrequerimientos = Model::createMultiple(Estrequerimientos::classname(), $modelsEstrequerimientos);
          Model::loadMultiple($modelsEstrequerimientos, Yii::$app->request->post());
          $deletedIDs1 = array_diff($oldIDs1, array_filter(ArrayHelper::map($modelsEstrequerimientos, 'EReqId', 'EReqId')));

          // validate all models
          $valid = $model->validate();

          if ($valid) {
            $transaction = \Yii::$app->db->beginTransaction();
            try {
              // NOTE: Elimina los elementos del módulo correspondiente cuando se elimina del formulario en los modelos 1:N
              if ($flag = $model->save(false)) {
                if (! empty($deletedIDs)) {
                  Versdocrequerimientos::deleteAll(['VDReqId' => $deletedIDs]);
                }
                if (! empty($deletedIDs1)) {
                  Estrequerimientos::deleteAll(['EReqId' => $deletedIDs1]);
                }

                foreach ($modelsVersdocrequerimientos as $modelVersdocrequerimientos) {
                  $modelVersdocrequerimientos->ReqId_fk = $model->ReqId;
                  if (! ($flag = $modelVersdocrequerimientos->save(false))) {
                    $transaction->rollBack();
                    break;
                  }
                }
                foreach ($modelsEstrequerimientos as $modelEstrequerimientos) {
                  $modelEstrequerimientos->ReqId_fk = $model->ReqId;
                  if (! ($flag = $modelEstrequerimientos->save(false))) {
                    $transaction->rollBack();
                    break;
                  }
                }
              }

              if ($flag) {
                $transaction->commit();
                return $this->redirect(['view', 'id' => $model->ReqId]);
              }
            } catch (Exception $e) {
              $transaction->rollBack();
            }
          }

            return $this->redirect(['view', 'id' => $model->ReqId]);
        }

        return $this->render('update', [
            'model' => $model,
            'modelsVersdocrequerimientos' => (empty($modelsVersdocrequerimientos)) ? [new Versdocrequerimientos] : $modelsVersdocrequerimientos,
            'modelsEstrequerimientos' => (empty($modelsEstrequerimientos)) ? [new Estrequerimientos] : $modelsEstrequerimientos,
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
     * Deletes an existing Requerimientos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        if(SiteController::findVar(1001)){
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
      }
      else {
        $this->redirect(['site/error']);
      }
    }

    /**
     * Finds the Requerimientos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Requerimientos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Requerimientos::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function findVar($var)
    {
      $IdUser = Yii::$app->user->identity->id;
      // $var = 'Usuarios';
      $query = (new \yii\db\Query())
      ->select('intId')
      ->from('user')
      ->innerJoin('rolusua','rolusua.usuid_fk = user.id')
      ->innerJoin('roles','roles.rolid = rolusua.rolid_fk')
      ->innerJoin('rolintecoma','rolintecoma.rolid_fk = roles.rolid')
      ->innerJoin('intecoma','intecoma.icomid = rolintecoma.icomid_fk')
      ->innerJoin('interfaces','interfaces.intid = intecoma.IntiId_fk')
      ->where([
        'id' => $IdUser,
        'IntId' => $var]);
        $command = $query->createCommand();
        $rows = $command->queryScalar();
        return $rows;
    }

}
