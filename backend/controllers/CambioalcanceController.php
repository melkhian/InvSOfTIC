<?php

namespace backend\controllers;

use Yii;
use backend\models\Cambioalcance;
use backend\models\CambioalcanceSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\Expression;

/**
 * CambioalcanceController implements the CRUD actions for Cambioalcance model.
 */
class CambioalcanceController extends Controller
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
     * Lists all Cambioalcance models.
     * @return mixed
     */
    public function actionIndex()
    {
      if(isset(Yii::$app->user->identity->id)){
        if(SiteController::findCom(24) or SiteController::findCom(25) or SiteController::findCom(26)){
          $searchModel = new CambioalcanceSearch();
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
     * Displays a single Cambioalcance model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
      if(isset(Yii::$app->user->identity->id)){
        if(SiteController::findCom(25)){
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
     * Creates a new Cambioalcance model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
      if(isset(Yii::$app->user->identity->id)){
        if(SiteController::findCom(24)){
        $model = new Cambioalcance();
        
        // NOTE: Para insertar de manera automática la fecha de creación del registro
        $expression = new Expression('NOW()');
        $now = (new \yii\db\Query)->select($expression)->scalar();  // SELECT NOW();
        $model->CAlcFechSist = $now;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->CAlcId]);
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
     * Updates an existing Cambioalcance model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
      if(isset(Yii::$app->user->identity->id)){
        if(SiteController::findCom(26)){
          $model = $this->findModel($id);

          if ($model->load(Yii::$app->request->post()) && $model->save()) {
              return $this->redirect(['view', 'id' => $model->CAlcId]);
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
     * Deletes an existing Cambioalcance model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        if(SiteController::findVar(9)){
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
      }
      else {
        $this->redirect(['site/error']);
    }
    }

    /**
     * Finds the Cambioalcance model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Cambioalcance the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Cambioalcance::findOne($id)) !== null) {
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
