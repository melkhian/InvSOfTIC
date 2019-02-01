<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Tabs;
use yii\helpers\ArrayHelper;
use backend\models\Tipos;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Formulario */
/* @var $form yii\widgets\ActiveForm */
?>
<script type = "text/javascript">
  function TiposId_fk5(){


var arry ='';
    var TiposId_fk5 = document.querySelector("#aplicaciones-tiposid_fk5 > label:nth-child(3) > input[type='checkbox']");
    arry= TiposId_fk5.value;
    alert(arry);

//     for (var index = 0; index < TiposId_fk5.length; index++) {
//
//     alert(arry);
// }


  }
</script>
<br><br>
    <?= $form->field($model, 'TiposId_fk5')
    ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 23')->all(),'TiposValo','TiposDesc'),
                  [
                    'onchange'=>'TiposId_fk5(this);'
                    ])?>

    <?= $form->field($model, 'AppFechPues')->widget( DatePicker::className(),
            ['name' => 'check_issue_date',
            'value' => date('d-M-Y', strtotime('+2 days')),
            'options' => ['placeholder' => 'Seleccione la fecha de Adquisición'],
            'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true]]);
     ?>

    <?= $form->field($model, 'AppServPues')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk6')
    ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 24')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'TiposId_fk7')
    ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 25')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'TiposId_fk8')
    ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 26')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'AppVersServ')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk9')
    ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 27')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'AppOtroCual1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk10')
    ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 28')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'AppOtroCual2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk11')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 29')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'TiposId_fk12')
    ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 30')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'AppOtroCual3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk13')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'TiposId_fk14')
    ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 32')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'AppOtroCual4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk15')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'TiposId_fk16')
    ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 34')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'AppOtroCual10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk17')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'TiposId_fk18')
    ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 36')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'AppOtroCual6')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk19')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'AppCual')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk20')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'AppDondUbic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppTipoLice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppNumeLice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk21')
    ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 38')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'TiposId_fk22')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'))?>