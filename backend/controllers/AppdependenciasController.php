<?php

namespace backend\controllers;

use Yii;
use backend\models\Appdependencias;
use backend\models\AppdependenciasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

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
        $searchModel = new AppdependenciasSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Appdependencias model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Appdependencias model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Appdependencias();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ADepId]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
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
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ADepId]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
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
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
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
