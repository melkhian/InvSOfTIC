<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\Appdependencias;
use backend\models\AppdependenciasSearch;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\controllers\SiteController;
use yii\db\Expression;
/**
 * AppdependenciasController implements the CRUD actions for Appdependencias model.
 */
class AppdependenciasController extends Controller
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
     * Lists all Appdependencias models.
     * @return mixed
     */
    public function actionIndex()
    {
      if(isset(Yii::$app->user->identity->id)){
        if(SiteController::findCom(15) or SiteController::findCom(16) or SiteController::findCom(17)){
        $searchModel = new AppdependenciasSearch();
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
     * Displays a single Appdependencias model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
      if(isset(Yii::$app->user->identity->id)){
        if(SiteController::findCom(16)){
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
     * Creates a new Appdependencias model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
      if(isset(Yii::$app->user->identity->id)){
        if(SiteController::findCom(15)){
        $model = new Appdependencias();

        // NOTE: Para insertar de manera automática la fecha de creación del registro
        $expression = new Expression('NOW()');
        $now = (new \yii\db\Query)->select($expression)->scalar();  // SELECT NOW();
        $model->ADepFechSist = $now;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ADepId]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
      } else {
        $this->redirect(['site/error']);
      }
    }else {
      $this->redirect(['site/login']);
    }
}

    /**
     * Updates an existing Appdependencias model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
      if(isset(Yii::$app->user->identity->id)){
        if(SiteController::findCom(17)){
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ADepId]);
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
     * Deletes an existing Appdependencias model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        if(SiteController::findCom(500)){
          $this->findModel($id)->delete();

        return $this->redirect(['index']);
        }
        else {
          $this->redirect(['site/error']);
        }
    }

    /**
     * Finds the Appdependencias model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Appdependencias the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Appdependencias::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function afterFind() {
        parent::afterFind();
        // $this->ADepId = (int) $this->ADepId;
        $this->ADepCantUsua = (int) $this->ADepCantUsua;
        $this->ADepFechSist = (int) $this->ADepFechSist;
    }

}
