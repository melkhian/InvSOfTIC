<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            // Yii::$app->session->set('userSessionTimeout', time() + Yii::$app->params['sessionTimeoutSeconds']);
            return $this->goHome();
        }
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public static function findVar($var)
    {
      if (isset(Yii::$app->user->identity->id)) {
        $IdUser = Yii::$app->user->identity->id;
        $query = (new \yii\db\Query())
        ->select('intId')
        ->from('user')
        ->innerJoin('rolusua','rolusua.usuid_fk = user.id')
        ->innerJoin('roles','roles.rolid = rolusua.rolid_fk')
        ->innerJoin('rolintecoma','rolintecoma.rolid_fk = roles.rolid')
        ->innerJoin('intecoma','intecoma.icomid = rolintecoma.icomid_fk')
        ->innerJoin('interfaces','interfaces.intid = intecoma.IntiId_fk')
        ->where(['id' => $IdUser,'IntId' => $var])
        ->createCommand();
        // echo $query->sql;
        // print_r($query->params);
        $rows = $query->queryOne();
          // $command = $query->createCommand();
          // $rows = $command->queryColumn();
          // foreach ($rows as $key => $value) {
          //   // if (SiteController::findvar(3) == 3){
          //   //   echo "hola";
          //   // }
           // print_r($rows);
          return $rows;

      }else {
        Yii::$app->user->logout();
      }

      // $var = 'Usuarios';

    }

    public static function findCom($com)
    {
      if (isset(Yii::$app->user->identity->id)) {
        $IdUser = Yii::$app->user->identity->id;
        $query = (new \yii\db\Query())
        ->select('comId')
        ->from('user')
        ->innerJoin('rolusua','rolusua.usuid_fk = user.id')
        ->innerJoin('roles','roles.rolid = rolusua.rolid_fk')
        ->innerJoin('rolintecoma','rolintecoma.rolid_fk = roles.rolid')
        ->innerJoin('intecoma','intecoma.icomid = rolintecoma.icomid_fk')
        ->innerJoin('interfaces','interfaces.intid = intecoma.IntiId_fk')
        ->innerJoin('comandos','comandos.comid = interfaces.intId')
        ->where(['id' => $IdUser,'comid_fk' => $com])
        ->createCommand();

        $rows = $query->queryAll();
          // print_r($rows);
          return $rows;
      }else {
        Yii::$app->user->logout();
      }

      // $var = 'Usuarios';

    }

    public function header(){
      $query = (new \yii\db\Query())
      ->select('header')
      ->from('parametros');
      // ->where([
      //   'header' => $IdUser,
      //   'IntId' => $var]);
        $command = $query->createCommand();
        $rows = $command->queryScalar();
        return $rows;
    }

    public function footer(){
      $query = (new \yii\db\Query())
      ->select('ParFoot')
      ->from('parametros');
      // ->where([
      //   'header' => $IdUser,
      //   'IntId' => $var]);
        $command = $query->createCommand();
        $rows = $command->queryScalar();
        return $rows;
    }

    public function DateValidator(){
      $userId = Yii::$app->user->identity->id;
      $query = (new \yii\db\Query())
      ->select('RUsuCadu')
      ->from('rolusua')
      ->where([
        'RUsuId' => $userId]);
        $command = $query->createCommand();
        $rows = $command->queryScalar();
        return $rows;
    }
    public static function timeOut(){
      $query = (new \yii\db\Query())
      ->select('timeExpiration')
      ->from('parametros');
      // ->where([
      //   'RUsuId' => $userId]);
        $command = $query->createCommand();
        $rows = $command->queryScalar();
        return $rows;
    }


}
