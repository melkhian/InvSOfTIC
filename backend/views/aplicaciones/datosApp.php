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

<br>
<h1>VII. DATOS BÁSICOS APLICACIÓN</h1>
<br><br>
    <?= $form->field($model, 'TiposId_fk5')
    ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 23')->all(),'TiposValo','TiposDesc'))?>

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
    ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 26')->all(),'TiposValo','TiposDesc'),
                    ['onchange'=>'TiposId_fk($id=8,$tab=5,$tipo="checkbox");'
                      ])?>

    <?= $form->field($model, 'AppOtroCual8')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppServWebVers')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk9')
    ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 27')->all(),'TiposValo','TiposDesc'),
                    ['onchange'=>'TiposId_fk($id=9,$tab=5,$tipo="checkbox");'
                      ])?>

    <?= $form->field($model, 'AppOtroCual9')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk10')
    ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 28')->all(),'TiposValo','TiposDesc'),
                    ['onchange'=>'TiposId_fk($id=10,$tab=5,$tipo="checkbox");'
                      ])?>

    <?= $form->field($model, 'AppOtroCual10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk11')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 29')->all(),'TiposValo','TiposDesc'),
                    ['onchange'=>'TiposId_fk($id=11,$tab=5,$tipo="radio");'
                      ])?>

    <?= $form->field($model, 'TiposId_fk12')
    ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 30')->all(),'TiposValo','TiposDesc'),
                    ['onchange'=>'TiposId_fk($id=12,$tab=5,$tipo="checkbox");'
                      ])?>

    <?= $form->field($model, 'AppOtroCual12')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk13')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'),
                    ['onchange'=>'TiposId_fk($id=13,$tab=5,$tipo="radio");'
                      ])?>

    <?= $form->field($model, 'TiposId_fk14')
    ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 32')->all(),'TiposValo','TiposDesc'),
                    ['onchange'=>'TiposId_fk($id=14,$tab=5,$tipo="checkbox");'
                      ])?>

    <?= $form->field($model, 'AppOtroCual14')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk15')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'),
                    ['onchange'=>'TiposId_fk($id=15,$tab=5,$tipo="radio");'
                      ])?>

    <?= $form->field($model, 'TiposId_fk16')
    ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 34')->all(),'TiposValo','TiposDesc'),
                    ['onchange'=>'TiposId_fk($id=16,$tab=5,$tipo="checkbox");'
                      ])?>

    <?= $form->field($model, 'AppOtroCual16')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk17')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'),
                    ['onchange'=>'TiposId_fk($id=17,$tab=5,$tipo="radio");'
                      ])?>

    <?= $form->field($model, 'TiposId_fk18')
    ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 36')->all(),'TiposValo','TiposDesc'),
                    ['onchange'=>'TiposId_fk($id=18,$tab=5,$tipo="checkbox");'
                      ])?>

    <?= $form->field($model, 'AppOtroCual18')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk19')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'),
                    ['onchange'=>'TiposId_fk($id=19,$tab=5,$tipo="radio");'
                      ])?>

    <?= $form->field($model, 'AppOtroCual19')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk20')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'AppDondUbic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppTipoLice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppNumeLice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TiposId_fk21')
    ->checkboxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 38')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'TiposId_fk22')
    ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'))?>
