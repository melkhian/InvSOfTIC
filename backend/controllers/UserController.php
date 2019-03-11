<?php

namespace backend\controllers;

use Yii;
use backend\models\User;
use backend\models\UserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\bootstrap\Alert;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
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
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        if(isset(Yii::$app->user->identity->id)){
          if(SiteController::findCom(1) or SiteController::findCom(2) or SiteController::findCom(3) or SiteController::findCom(4)){
          $searchModel = new UserSearch();
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
        else {
          $this->redirect(['site/login']);
        }
    }

    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        if(isset(Yii::$app->user->identity->id)){
          if(SiteController::findCom(2)){
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
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
      if(isset(Yii::$app->user->identity->id)){
        if(SiteController::findCom(1)){
        $model = new User();        

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
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
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
      if(isset(Yii::$app->user->identity->id)){
        if(SiteController::findCom(3)){
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
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
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
      // $User_id = $this->findModel($id);
      $mensaje = '';
      $query = (new \yii\db\Query())
      ->select('*')
      ->from('auditorias')
      ->where(['usuid_fk' => $id]);
      $command = $query->createCommand();
      $rows = $command->queryScalar();
      // echo "<pre>";
      // print_r($rows);
      // echo "</pre>";
      // die();
      if ($rows != '') 
      {        
        $mensaje = "El Usuario no puede ser eliminado";    
        Yii::$app->session->setFlash('danger', $mensaje);    
      }
      else
      {              
        $mensaje = "Proceso Exitoso"; 
        Yii::$app->session->setFlash('success', $mensaje);
        $this->findModel($id)->delete();       
      }
      
        return $this->redirect(['index']);        
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
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
// NOTE: Función para Inhabilitar/Habilitar Usuarios desde la página Index a través del ícono Deshabilitar

    public function actionEnable($id)
    {
      $IdUser = Yii::$app->user->identity->id;

      $query_rol = (new \yii\db\Query())
      ->select('rolid_fk')
      ->from('rolusua')
      ->where(['id' => $id]);
      $command_rol = $query->createCommand();
      $rows_rol = $command->queryScalar();     


      if(SiteController::findCom(4))
      {
        $query = (new \yii\db\Query())
        ->select('status')
        ->from('user')
        ->where(['id' => $id]);
        $command = $query->createCommand();
        $rows = $command->queryScalar();
        if ($rows_rol) {         
        
          if ($rows == 10) 
          {
            $connection = Yii::$app->db;
            $connection->createCommand("UPDATE user SET status=6 WHERE id=$id")
            ->execute();
          }
          if ($rows == 6) 
          {
            $connection = Yii::$app->db;
            $connection->createCommand("UPDATE user SET status=10 WHERE id=$id")
            ->execute();
          }
          $searchModel = new UserSearch();
          $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            return $this->render('index', [
                // 'model' => $this->findModel($id),
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
          }
        }
}
  // NOTE: Función para restablecer la contraseña de Usuario a una por defecto definida dentro de los parámetros de la función.
  //       Se llama desde el index y se ha codificado en vendor/yii2/grid/ActionColumn.php

    public function actionReset($id)
    {
        if(SiteController::findCom(67)){
          // NOTE: query para traer el username del usuario
        $query = (new \yii\db\Query())
        ->select('username')
        ->from('user')
        ->where(['id' => $id]);
        $command = $query->createCommand();
        $rows = $command->queryScalar();

        // NOTE: Se genera un password por defecto y su respectivo HASH
        $password ='123456';
        $password_hash = Yii::$app->security->generatePasswordHash($password);

        // NOTE:
        $model = User::findOne($id);
        $model->password_hash = $password_hash;
        $model->save();
        // $connection = Yii::$app->db;
        // $connection->createCommand("UPDATE user SET password_hash='$password_hash' WHERE id=$id")
        // ->execute();
        Yii::$app->session->setFlash('success', 'Se ha restablecido la contraseña del Usuario ' . $rows);
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
          return $this->render('index', [
              // 'model' => $this->findModel($id),
              'searchModel' => $searchModel,
              'dataProvider' => $dataProvider,
          ]);
    }
  }

  public function actionChange_password()
  {
    $user = Yii::$app->user->identity;
    // var_dump($user->errors);
    $loadedPost = $user->load(Yii::$app->request->post());

    if ($loadedPost && $user->validate()) {
      $user->password = $user->newPassword;
      $user->save(false);
      // $var_dump($user->errors);
      Yii::$app->session->setFlash('success','Se ha cambiado la contraseña satisfactoriamente');
      return $this->refresh();
    }
    return $this->render('change_password', [
      'user' => $user,
    ]);
  }

}