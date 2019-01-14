<?php

namespace backend\controllers;

use Yii;
use backend\models\Appmodulos;
use backend\models\AppmodulosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AppmodulosController implements the CRUD actions for Appmodulos model.
 */
class AppmodulosController extends Controller
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
     * Lists all Appmodulos models.
     * @return mixed
     */
    public function actionIndex()
    {
        if(SiteController::findVar(4)){
        $searchModel = new AppmodulosSearch();
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
     * Displays a single Appmodulos model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        if(SiteController::findVar(4)){
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
      }
      else {
        $this->redirect(['site/error']);
      }
    }

    /**
     * Creates a new Appmodulos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(SiteController::findVar(4)){
        $model = new Appmodulos();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->AModId]);
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
     * Updates an existing Appmodulos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        if(SiteController::findVar(4)){
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->AModId]);
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
     * Deletes an existing Appmodulos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        if(SiteController::findVar(4)){
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
      }
      else {
        $this->redirect(['site/error']);
      }
    }

    /**
     * Finds the Appmodulos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Appmodulos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Appmodulos::findOne($id)) !== null) {
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
