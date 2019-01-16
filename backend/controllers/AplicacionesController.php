<?php

namespace backend\controllers;

use Yii;
use backend\models\Aplicaciones;
use backend\models\AplicacionesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\controllers\SiteController;
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
        if(SiteController::findVar(3)){
          $searchModel = new AplicacionesSearch();
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
     * Displays a single Aplicaciones model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        if(SiteController::findVar(3)){
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
      }
      else {
        $this->redirect(['site/error']);
      }
    }

    /**
     * Creates a new Aplicaciones model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(SiteController::findVar(3)){
        $model = new Aplicaciones();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->AppId]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
      }
      else{
        $this->redirect(['site/error']);
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
        if(SiteController::findVar(3)){
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
        if(SiteController::findVar(3)){
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
      }
      else {
        $this->redirect(['site/error']);
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

    // public function findCom($com)
    // {
    //   $IdUser = Yii::$app->user->identity->id;
    //   // $var = 'Usuarios';
    //   $query = (new \yii\db\Query())
    //   ->select('comId')
    //   ->from('user')
    //   ->innerJoin('rolusua','rolusua.usuid_fk = user.id')
    //   ->innerJoin('roles','roles.rolid = rolusua.rolid_fk')
    //   ->innerJoin('rolintecoma','rolintecoma.rolid_fk = roles.rolid')
    //   ->innerJoin('intecoma','intecoma.icomid = rolintecoma.icomid_fk')
    //   ->innerJoin('interfaces','interfaces.intid = intecoma.IntiId_fk')
    //   ->innerJoin('comandos','comandos.comid = interfaces.intId')
    //   ->where([
    //     'id' => $IdUser,
    //     'comid_fk' => $com]);
    //     $command = $query->createCommand();
    //     $rows = $command->queryScalar();
    //     return $rows;
    // }

}
