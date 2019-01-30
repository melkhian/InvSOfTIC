<?php

namespace backend\controllers;

use Yii;
use backend\models\Aplicaciones;
use backend\models\AplicacionesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

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
        $model = new Aplicaciones();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->AppId]);
        }

        return $this->render('create', [
            'model' => $model,
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

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->AppId]);
        }

        return $this->render('update', [
            'model' => $model,
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
