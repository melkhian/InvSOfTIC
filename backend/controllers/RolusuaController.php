<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\Rolusua;
use backend\models\RolusuaSearch;
use backend\controllers\SiteController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\UserSearch;
use backend\models\User;

/**
 * RolusuaController implements the CRUD actions for Rolusua model.
 */
class RolusuaController extends Controller
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
     * Lists all Rolusua models.
     * @return mixed
     */
    public function actionIndex()
    {
      if(isset(Yii::$app->user->identity->id)){

        if(SiteController::findCom(42) or SiteController::findCom(43) or SiteController::findCom(44)){

        $searchModel = new RolusuaSearch();
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
     * Displays a single Rolusua model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
      if(isset(Yii::$app->user->identity->id)){
        if(SiteController::findCom(43)){
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
     * Creates a new Rolusua model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {      
      if(isset(Yii::$app->user->identity->id)){
        if(SiteController::findCom(42)){
        $model = new Rolusua();
        $mensaje = $mensaje = 'Proceso terminado con Exito';  ;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
          return $this->redirect(['view','id' => $model->RUsuId]);
        }
      if (\Yii::$app->request->post()) {
        $var = \Yii::$app->request->post();
        // print('<pre>');
        // print_r($var);
        // // $var[2]
        // \Yii::$app->end();
        foreach ($var['user_id'] as $key => $value) {
          $validador = rolusua::find()->where("UsuId_fk = $value and RolId_fk =".$var['Rolusua']['RolId_fk'])->one();
          if(empty($validador)){            
            $model = new Rolusua();
            $model->load(\Yii::$app->request->post());
            $model->UsuId_fk = $value;
            $model->save();                   
          }else{
            $mensaje = 'El Usuario ya tiene cargado ese Rol';
          }                  
        }        
      }
        $searchModel = new UserSearch; //---> Data Modelo que aparece en el modal
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams()); //---> Campos de Busqueda del Modal
        $dataProvider->pagination = ['pageSize' => 5]; //---> Paginacion del Modal
        $model = new Rolusua();
        return $this->render('create', [
            'model' => $model,
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
            'mensaje' => $mensaje,
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
     * Updates an existing Rolusua model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
      if(isset(Yii::$app->user->identity->id)){
        if(SiteController::findCom(44)){
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->RUsuId]);
        }
        $searchModel = new UserSearch; //---> Data Modelo que aparece en el modal
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams()); //---> Campos de Busqueda del Modal
        $dataProvider->pagination = ['pageSize' => 5];
        return $this->render('update', [
            'model' => $model,
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
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
     * Deletes an existing Rolusua model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        if(SiteController::findVar(1500)){
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
      }
      else {
        $this->redirect(['site/error']);
      }
    }

    /**
     * Finds the Rolusua model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Rolusua the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Rolusua::findOne($id)) !== null) {
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
      ->innerJoin('interfaces','interfaces.intid = intecoma.IntiId_fk');

      $query->andWhere(['in','id' => $IdUser,'IntId' => $var]);
        // $command = $query->createCommand();
        $rows = $command->queryScalar();
        return $rows;
    }

   public function actionAsociarUsuarios($name = null)
   {
     $data = Yii::$app->request->post("keys");

     $model = new RolusuaSearch;
     $searchModel = new UserSearch; //---> Data Modelo que aparece en el modal
     $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams()); //---> Campos de Busqueda del Modal
     $dataProvider->query->andWhere(['in','id',$data]);
     $dataProvider->pagination = ['pageSize' => 5]; //---> Paginacion del Modal
     return $this->renderPartial('_user_list', [
       'model' => $model,
       'dataProvider' => $dataProvider,
     ]);
   }

   public function actionRemove($name = null)
    {
       echo      
       "<script language='javascript'>
       alert('mensaje');
        document.getElementById('grid_user_list').remove($id);
       </script>
       ";              
    }

}
