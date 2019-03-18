<?php
use yii\helpers\Html;
use backend\controllers\SiteController;
/* @var $this \yii\web\View */
/* @var $content string */
// $img = SiteController::header();
?>

<header class="main-header">

      <div class="">

    <?= Html::a('<span class="logo-mini">APP</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <?= Html::img(SiteController::footer(),["width"=>"85%","height"=>"47px","padding"=>"0px"]); ?>

          <div class="navbar-custom-menu">


              <ul class="nav navbar-nav">

                  <li class="dropdown user user-menu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <img src="<?= $directoryAsset ?>/img/avatar04.png" class="user-image" alt="User Image"/>
                          <span class="hidden-xs"><b>
                            <?php
                            if(isset(Yii::$app->user->identity->id)){
                              echo Yii::$app->user->identity->username;
                            }else {
                              Yii::$app->user->logout();
                              // $this->redirect(Yii::app()->homeUrl);
                            }
                            ?>
                          </b></span>
                      </a>
                      <ul class="dropdown-menu">
                          <!-- User image -->
                          <li class="user-header">
                              <img src="<?= $directoryAsset ?>/img/avatar04.png" class="img-circle"
                                   alt="User Image"/>

                              <p>
                                  <b>
                                    <?php
                                    if(isset(Yii::$app->user->identity->id)){
                                      echo Yii::$app->user->identity->username;
                                    }else {
                                      Yii::$app->user->logout();
                                      // $this->redirect(Yii::app()->homeUrl);
                                    }
                                    ?>
                              </p>
                          </li>

                          <li class="user-footer">
                            <div class="pull-left">
                                <?= Html::a(
                                    'Cambiar Contraseña',
                                    ['/user/change_password'],
                                    ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                ) ?>
                            </div>
                              <div class="pull-right">
                                  <?= Html::a(
                                      'Cerrar Sesión',
                                      ['/site/logout'],
                                      ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                  ) ?>
                              </div>
                          </li>
                      </ul>
                  </li>
              </ul>
          </div>
    </nav>
    </div>
</header>
