<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Tabs;
use yii\helpers\ArrayHelper;
use backend\models\Tipos;

/* @var $this yii\web\View */
/* @var $model backend\models\Formulario */
/* @var $form yii\widgets\ActiveForm */
?>
<br>
<h1 align="center">XV. DOCUMENTACIÓN</h1>
<br><br>
<?php // NOTE: Estilo para modificar las propiedades visuales de la Tabla ?>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #9c9a9a;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #cecdcd;
}
tr:nth-child(odd) {
  background-color: #ffffff;
}
</style>
    <table>
      <tr>
        <th>Nombre del documento asociado</th>
        <th>¿Se entregó?</th>
        <th>¿Se aprobó?</th>
        <th>Medio</th>
      </tr>
      <tr>
        <td>Plan de proyecto</td>
        <td>  <?= $form->field($model, 'TiposId_fk29')
          ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'))->label(false)?></td>
        <td>  <?= $form->field($model, 'TiposId_fk30')
            ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'))->label(false)?></td>
        <td>  <?= $form->field($model, 'TiposId_fk31')
            ->checkBoxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 48')->all(),'TiposValo','TiposDesc'))->label(false)?></td>
      </tr>
      <tr>
        <td>Definición y Alcance</td>
        <td>  <?= $form->field($model, 'TiposId_fk32')
            ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'))->label(false)?></td>
        <td>  <?= $form->field($model, 'TiposId_fk33')
            ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'))->label(false)?></td>
        <td>  <?= $form->field($model, 'TiposId_fk34')
            ->checkBoxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 48')->all(),'TiposValo','TiposDesc'))->label(false)?></td>
      </tr>
      <tr>
        <td>Documento de requerimientos</td>
        <td>  <?= $form->field($model, 'TiposId_fk35')
            ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'))->label(false)?></td>
        <td>  <?= $form->field($model, 'TiposId_fk36')
            ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'))->label(false)?></td>
        <td>  <?= $form->field($model, 'TiposId_fk37')
            ->checkBoxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 48')->all(),'TiposValo','TiposDesc'))->label(false)?></td>
      </tr>
      <tr>
        <td>Documento de diseño</td>
        <td> <?= $form->field($model, 'TiposId_fk38')
            ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'))->label(false)?></td>
        <td> <?= $form->field($model, 'TiposId_fk39')
            ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'))->label(false)?></td>
        <td> <?= $form->field($model, 'TiposId_fk40')
            ->checkBoxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 48')->all(),'TiposValo','TiposDesc'))->label(false)?></td>
      </tr>
      <tr>
        <td>Documentos de Pruebas</td>
        <td> <?= $form->field($model, 'TiposId_fk41')
            ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'))->label(false)?></td>
        <td> <?= $form->field($model, 'TiposId_fk42')
            ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'))->label(false)?></td>
        <td> <?= $form->field($model, 'TiposId_fk43')
            ->checkBoxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 48')->all(),'TiposValo','TiposDesc'))->label(false)?></td>
      </tr>
      <tr>
        <td>Manual Técnico y de instalación</td>
        <td> <?= $form->field($model, 'TiposId_fk44')
            ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'))->label(false)?></td>
        <td> <?= $form->field($model, 'TiposId_fk45')
            ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'))->label(false)?></td>
        <td> <?= $form->field($model, 'TiposId_fk46')
            ->checkBoxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 48')->all(),'TiposValo','TiposDesc'))->label(false)?></td>
      </tr>
      <tr>
        <td>Manual de Administración</td>
        <td> <?= $form->field($model, 'TiposId_fk47')
            ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'))->label(false)?></td>
        <td> <?= $form->field($model, 'TiposId_fk48')
            ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'))->label(false)?></td>
        <td> <?= $form->field($model, 'TiposId_fk49')
            ->checkBoxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 48')->all(),'TiposValo','TiposDesc'))->label(false)?></td>
      </tr>
      <tr>
        <td>Manual de Usuario</td>
        <td> <?= $form->field($model, 'TiposId_fk50')
            ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'))->label(false)?></td>
        <td> <?= $form->field($model, 'TiposId_fk51')
            ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'))->label(false)?></td>
        <td> <?= $form->field($model, 'TiposId_fk52')
            ->checkBoxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 48')->all(),'TiposValo','TiposDesc'))->label(false)?></td>
      </tr>
      <tr>
        <td>¿Se entregó Medio digital con la información de la aplicación?</td>
        <td> <?= $form->field($model, 'TiposId_fk53')
            ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'))->label(false)?></td>
        <td> <?= $form->field($model, 'TiposId_fk54')
            ->radioList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 46')->all(),'TiposValo','TiposDesc'))->label(false)?></td>
        <td> <?= $form->field($model, 'AppUbic')->textInput(['maxlength' => true, 'disabled' => true]) ?></td>
      </tr>
    </table>
    <br>

    <?= $form->field($model, 'TiposId_fk55')
    ->checkBoxList(ArrayHelper::map(Tipos::find()->where('tipoid_fk = 49')->all(),'TiposValo','TiposDesc'))?>

    <?= $form->field($model, 'AppUbicDocu')->textInput(['maxlength' => true, 'disabled' => true]) ?>

    <?= $form->field($model, 'AppUbicUlti')->textInput(['maxlength' => true, 'disabled' => true]) ?>

    <?= $form->field($model, 'AppObse7')->textarea(['maxlength' => true, 'rows' => '3', 'disabled' => true]) ?>
