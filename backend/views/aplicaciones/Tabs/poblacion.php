<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Tabs;
use yii\helpers\ArrayHelper;
use backend\models\Tipos;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Formulario */
/* @var $form yii\widgets\ActiveForm */
?>
<br>
<h1 align="center">II. POBLACIÓN OBJETIVO</h1>
<br><br>
<?= $form->field($model, 'AppEnti')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'file[]' )->fileInput(['multiple' => true]) ?>

<?= $form->field($model, 'AppEntiImag')->textInput(['maxlength' => true, 'disabled' => true]) ?>

<?= DetailView::widget([
  'model' => $model,
  'attributes' => [
    [
      'attribute'=>'AppEntiImag',
      // 'label'=>'File',
      'format'=>'raw',
      'value' => function ($model) {
        if ($model->AppEntiImag) {
          $str = explode(',',$model->AppEntiImag);
          $html = '';
          // print_r(sizeof($str));
          // die();
          for ($i=0; $i <sizeof($str) ; $i++) {
            $j = $i +1;
            $html .= Html::a('(Archivo descargable '. $j.')', $str[$i]) . ' ';
          }
          return $html;
        }

      },
    ],
  ],
])
?>
