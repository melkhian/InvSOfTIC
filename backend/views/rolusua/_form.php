<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Roles;
use backend\models\rolusua;
use backend\models\UserSearch;
use backend\models\User;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;
use yii\bootstrap\Modal;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
/* @var $this yii\web\View */
/* @var $model backend\models\Rolusua */
/* @var $form yii\widgets\ActiveForm */
?>
<!--
////////////////////////////////////////
-->
<?php
$searchModel = new UserSearch;
$dataProvider = new ActiveDataProvider([
    'query' => user::find(),
    'pagination' => [
        'pageSize' => 20,
    ],
]);
?>
<!--
////////////////////////////////////////
-->
<div class="rolusua-form">
    <?php Pjax::begin(); ?>
    <?php $form = ActiveForm::begin(); ?>
<!--
////////////////////////////////////////
-->

    <?= $form->field($model, 'RolId_fk')->dropDownList(ArrayHelper::map(Roles::find()->all(),'RolId','RolNomb'), ['prompt'=> 'Seleccione el Rol'])?>
    <p>
    <?php
    Modal::begin([
      'id' => 'modal',
      'header' => '<h2>Usuario</h2>',
      'toggleButton' => ['label' => 'Seleccione usuario','class' => 'btn btn-primary']
      ]);
      echo GridView::widget([
           'dataProvider' => $dataProvider,
           'filterModel' => $searchModel,
           'columns' => [
               ['class' => 'yii\grid\CheckboxColumn'],
                'id',
                'email',
                ['class' => 'yii\grid\ActionColumn'],
           ],
        ]);
        echo Html::a('Guardar',['create'],['class' => 'btn btn-primary'])  ;

    Modal::end();
    // echo GridView::widget([
    //     'dataProvider' => $dataProvider,
    // ]);
    ?>
    <p/>
    <?= $form->field($model, 'UsuId_fk')->dropDownList(ArrayHelper::map(User::find()->all(),'id','email'), ['prompt'=> 'Seleccione el Usuario'])?>

    <?= $form->field($model, 'RUsuCadu')->widget( DatePicker::className(),
          	['name' => 'check_issue_date',
          	'value' => date('d-M-Y', strtotime('+2 days')),
          	'options' => ['placeholder' => 'Seleccione la fecha de Caducidad'],
          	'pluginOptions' => [
          	'format' => 'yyyy-mm-dd',
          	'todayHighlight' => true]]);
     ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
