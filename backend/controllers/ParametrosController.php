<?php

namespace backend\controllers;

use Yii;
use backend\models\Parametros;
use backend\models\ParametrosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
/**
 * ParametrosController implements the CRUD actions for Parametros model.
 */
class ParametrosController extends Controller
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
     * Lists all Parametros models.
     * @return mixed
     */
    public function actionIndex()
    {
        if(isset(Yii::$app->user->identity->id)){
            if(SiteController::findCom(60) or SiteController::findCom(61) or SiteController::findCom(62)){
                $searchModel = new ParametrosSearch();
                $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

                return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
                ]);
            }else {
                $this->redirect(['site/error']);
            }
        }else {
                $this->redirect(['site/login']);
            }
        }

    /**
     * Displays a single Parametros model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        if(isset(Yii::$app->user->identity->id)){
            if(SiteController::findCom(61)){
                return $this->render('view', [
                    'model' => $this->findModel($id),
                ]);
            }else {
                $this->redirect(['site/error']);
            }
        }else {
            $this->redirect(['site/login']);
        }
    }

    /**
     * Creates a new Parametros model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(isset(Yii::$app->user->identity->id)){
            if(SiteController::findCom(60)){
                $model = new Parametros();

                if ($model->load(Yii::$app->request->post())) {

                  // NOTE: Proceso Header
                  // -----------------------------------------------------------
                  $imageheader = 'HeaderImage'.date('Y-m-d');
                  $imageContent = 'ContentImage'.date('Y-m-d');
                  $imageFooter = 'FooterImage'.date('Y-m-d');
                  //------------------------------------------------------------
                  $model->header = UploadedFile::getInstance($model,'header');
                  $model->header->saveAs('imagenesHeader/'.$imageheader.'.'.$model->header->extension);
                  $model->ParHead = 'imagenesHeader/'.$imageheader.'.'.$model->header->extension;
                  //------------------------------------------------------------
                  $model->content = UploadedFile::getInstance($model,'content');
                  $model->content->saveAs('imagenesContenido/'.$imageContent.'.'.$model->content->extension);
                  $model->ParContenido = 'imagenesContenido/'.$imageContent.'.'.$model->content->extension;
                  //------------------------------------------------------------
                  $model->footer = UploadedFile::getInstance($model,'footer');
                  $model->footer->saveAs('imagenesFooter/'.$imageFooter.'.'.$model->footer->extension);
                  $model->ParFoot = 'imagenesFooter/'.$imageFooter.'.'.$model->footer->extension;
                  //------------------------------------------------------------

                    $model->save();
                    return $this->redirect(['view', 'id' => $model->ParId]);
                }

                return $this->render('create', [
                'model' => $model,
                ]);
            }else {
                $this->redirect(['site/error']);
            }
        }else {
            $this->redirect(['site/login']);
        }
    }

    /**
     * Updates an existing Parametros model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        if(isset(Yii::$app->user->identity->id)){
            if(SiteController::findCom(62)){
                $model = $this->findModel($id);

                if ($model->load(Yii::$app->request->post()) && $model->save()) {
                    return $this->redirect(['view', 'id' => $model->ParId]);
                }

                return $this->render('update', [
                'model' => $model,
                ]);
            }else {
                $this->redirect(['site/error']);
            }
        }else {
            $this->redirect(['site/login']);
        }
    }

    /**
     * Deletes an existing Parametros model.
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
     * Finds the Parametros model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Parametros the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Parametros::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    // NOTE: Función para Inhabilitar/Habilitar el Aplicativo desde la página Index a través del ícono Deshabilitar
        public function actionEnable($id)
        {
          if(SiteController::findCom(66)){
          $query = (new \yii\db\Query())
          ->select('TiposId_fk')
          ->from('parametros')
          ->where(['ParId' => $id]);
          $command = $query->createCommand();
          $rows = $command->queryScalar();

          if ($rows == 149) {
            $connection = Yii::$app->db;
            $connection->createCommand("UPDATE parametros SET TiposId_fk=150 WHERE ParId=$id")
            ->execute();
          }
          if ($rows == 150) {
            $connection = Yii::$app->db;
            $connection->createCommand("UPDATE parametros SET TiposId_fk=149 WHERE ParId=$id")
            ->execute();
          }
          $searchModel = new ParametrosSearch();
          $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            return $this->render('index', [
                // 'model' => $this->findModel($id),
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        }
    }
}
