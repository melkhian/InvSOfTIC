<?php

namespace backend\controllers;

use Yii;
use backend\models\Versdocrequerimientos;
use backend\models\VersdocrequerimientosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * VersdocrequerimientosController implements the CRUD actions for Versdocrequerimientos model.
 */
class VersdocrequerimientosController extends Controller
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
     * Lists all Versdocrequerimientos models.
     * @return mixed
     */
    public function actionIndex()
    {
        if(SiteController::findVar(11)){
        $searchModel = new VersdocrequerimientosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
      }
      else {
        $this->redirect(['site/error']);
      }
    }

    /**
     * Displays a single Versdocrequerimientos model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        if(SiteController::findVar(11)){
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
      }
      else {
        $this->redirect(['site/error']);
      }
    }

    /**
     * Creates a new Versdocrequerimientos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(SiteController::findVar(11)){
        $model = new Versdocrequerimientos();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->VDReqId]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
      }
      else {
        $this->redirect(['site/error']);
      }
    }

    /**
     * Updates an existing Versdocrequerimientos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        if(SiteController::findVar(11)){
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->VDReqId]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
      }
      else {
        $this->redirect(['site/error']);
      }
    }

    /**
     * Deletes an existing Versdocrequerimientos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        if(SiteController::findVar(11)){
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
      }
      else {
        $this->redirect(['site/error']);
      }
    }

    /**
     * Finds the Versdocrequerimientos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Versdocrequerimientos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Versdocrequerimientos::findOne($id)) !== null) {
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
