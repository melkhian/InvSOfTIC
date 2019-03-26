<?php
use yii\widgets\Breadcrumbs;
use dmstr\widgets\Alert;
use backend\controllers\SiteController;
use yii\helpers\Html;
use yii\helpers\Url;
// $footer = SiteController::footer();
?>
<div class="content-wrapper">
  <section class="content-header">
    <?php if (isset($this->blocks['content-header'])) { ?>
      <h1><?= $this->blocks['content-header'] ?></h1>
    <?php } else { ?>
      <h1>
        <center>
          <?php
          $img = Html::img('imagenesHeader/bloque28.png',['height'=>'35px','width'=>'45px']);
          if ($this->title !== null) {
            // echo \yii\helpers\Html::encode($this->title);
            echo Html::img('imagenesHeader/escudocolombiano.png', ['height'=>'50px']);
            // echo Html::a( Url::to('https://google.com/', true),Html::img('imagenesHeader/bloque28.png', ['height'=>'50px']));
            // echo Html::a('<span class="logo-mini">'.$img . '</span>', Url::toRoute(['www.google.com.co']), ['class' => 'logo']);
            echo Html::img('imagenesHeader/bloque28.png', ['height'=>'50px']);
          } else {
            echo \yii\helpers\Inflector::camel2words(
              \yii\helpers\Inflector::id2camel($this->context->module->id)
            );
            // echo ($this->context->module->id !== \Yii::$app->id) ? '<center>Module</center>' : '';
            echo ($this->context->module->id !== \Yii::$app->id) ? '<small>Module</small>' : '';
          }
          ?>
        </center>

      </h1>
    <?php } ?>

    <?=
    Breadcrumbs::widget(
      [
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
      ]
      ) ?>
    </section>

    <section class="content">
      <?= Alert::widget() ?>
      <?= $content ?>
    </section>
  </div>

  <footer class="main-footer">
    <div style="background-color:#FAFAFA; font-family:Helvetica;">
      <div class="nxBlock nxBlock1939 nxBlockDesign1 nxBlockLayout
      container">

      <div class="row blockContent">

        <div class="layout1939">

          <div class="row">

            <div class="item col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
              <div class="bloqueZona9  tipoDisplay"><div class="tabla1 tablaBloque1878  " style=".">
                <div class="contenido1">
                  <p><strong><h4>Dirección</h4></strong>
                    Carrera 6 entre calles 9 y 10 Edificio Palacio de San Francisco</p>

                    <p><strong><h4>Horario atención</h4></strong>
                      Lunes a jueves: Mañana&nbsp; 7:30 am a 12:30 pm Tarde 1:30 pm a 5:30 pm<br>
                      Viernes:&nbsp; Mañana 7:30 am a 12:30 pm&nbsp; - Tarde 1:30 pm a 4:30 pm</p>
                    </div>
                  </div></div>
                </div>


                <div class="item col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
                  <div class="bloqueZona9  tipoDisplay"><div class="tabla1 tablaBloque1887  " style=".">
                    <div class="contenido1">
                      <p><strong><h4>Email</h4></strong>
                        <a href="mailto:contactenos@valledelcauca.gov.co">contactenos@valledelcauca.gov.co</a></p>

                        <p><strong><h4>Notificaciones Judiciales</h4></strong>
                          <a href="mailto:njudiciales@valledelcauca.gov.co">njudiciales@valledelcauca.gov.co</a><br>
                          <a href="mailto:ntutelas@valledelcauca.gov.co">ntutelas@valledelcauca.gov.co</a><br>
                          <a href="mailto:nconciliaciones@valledelcauca.gov.co">nconciliaciones@valledelcauca.gov.co</a></p>
                        </div>
                      </div></div>
                    </div>


                    <div class="item col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
                      <div class="bloqueZona9  tipoDisplay"><div class="tabla1 tablaBloque1902  " style=".">
                        <div class="contenido1">
                          <p><strong><h4>Call Center</h4></strong>
                            (57-2) 620 00 00</p>

                            <p><strong><h4>Fax</h4></strong>
                              886 0150 Línea Gratuita: 01-8000972033</p>

                              <p><strong><h4>Código Postal</h4></strong>
                                760044</p>
                              </div>
                            </div></div>
                          </div>

                        </div>

                      </div>

                    </div>
                  </div>

                  <!-- <table class="table table">
                  <tr>

                  <th><h4><strong>Dirección</strong></h4></th>
                  <th><h4><strong>Email</strong></h4></th>
                  <th><h4><strong>Call center</strong></h4></th>

                </tr>
                <td><h5>Carrera 6 entre calles 9 y 10 Edificio Palacio de San Francisco </h5></td>
                <td><h5>contactenos@valledelcauca.gov.co </h5></td>
                <td><h5>(57-2) 620 00 00 </h5></td>
                <tr>
                <th><h4><strong>Horario de Atención</strong></h4></th>
                <th><h4><strong>Notificaciones Judiciales</strong></h4></th>
                <th><h4><strong>Fax</strong></h4></th>
              </tr>
              <td><h5>Lunes a jueves: Mañana  7:30 am a 12:30 pm Tarde 1:30 pm a 5:30 pm
              Viernes:  Mañana 7:30 am a 12:30 pm  - Tarde 1:30 pm a 4:30 pm </h5></td>
              <td><h5>njudiciales@valledelcauca.gov.co
              ntutelas@valledelcauca.gov.co
              nconciliaciones@valledelcauca.gov.co </h5></td>
              <td><h5>886 0150 Línea Gratuita: 01-8000972033</h5></td>

              <tr>
              <th></th>
              <th></th>
              <th><h4><strong>Codigo Postal</strong></h4></th>
            </tr>
            <td><h5></h5></td>
            <td><h5></h5></td>
            <td><h5>760044</h5></td>

          </table> -->
        </div>
        <!-- <div class="pull-right hidden
        -xs"> -->
        <!-- <b>Version</b> 2.0 -->

        <!-- </div> -->
        <!-- <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
        reserved. -->
        <!-- <img> -->
        <!-- <?= Html::img('imagenesFooter/captura.png', ['width'=>'1540px','height'=>'250px', 'class'=>'thing']);?> -->


        <!-- </img> -->
        <!-- reserved. -->
      </footer>

      <!-- Control Sidebar -->
      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
      immediately after the control sidebar -->
      <div class='control-sidebar-bg'></div>
