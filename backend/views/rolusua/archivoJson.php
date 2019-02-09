<?php
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
        ->where([
          'id' => $IdUser,
          'comid_fk' => $com]);
          $command = $query->createCommand();
          $rows = $command->queryScalar();
          print_r($rows);
      }else {
        Yii::$app->user->logout();
      }
// use yii\web\Request;
// use yii\helpers\Html;
// // session_start();
// // $keys = Yii::$app->request->post('keys');
// $request = Yii::$app->request;
// $post = $request->post();
// print_r($post);
// print_r($_POST['keys']);
  // if (isset($keys)) {
  //   $url = "/invsoftic/backend/views/rolusua/_form.php";
  //   header($url.'?keys=$keys');
  //   print_r($keys);
  //   // exit();
  // }
// echo GridView::widget([
//      'dataProvider' => $dataProvider,
//      'filterModel' => $searchModel,
//      'id' => 'grid',
//      'columns' => [
//       ['class' => 'yii\grid\CheckboxColumn'
//       // ,
//       //  'checkboxOptions' => function($model) {
//       //     return ['value' => $model->id];
//       //   }
//       ],
//           'id',
//           'usuprimnomb',
//           'usuprimapel',
//           'email',
//           // ['class' => 'yii\grid\ActionColumn'],
//          ],
//        ]);
      // echo Html::submitButton( 'Guardar', [ 'class' => 'btn btn-success' , 'id' =>'x']);
// echo json_encode(array("abc"=>'successfully registered'));
?>
