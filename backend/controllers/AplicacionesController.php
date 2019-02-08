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
        $searchModel = new AplicacionesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Aplicaciones model.
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
     * Creates a new Aplicaciones model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Aplicaciones();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->AppId]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
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
        $model = $this->findModel($id);

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
        $model->TiposId_fk26 = explode(',',$model->TiposId_fk26);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->AppId]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
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
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
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

  public function loadFunctions(){}
}
