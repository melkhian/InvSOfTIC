<?php

use backend\controllers\SiteController;
?>
<aside class="main-sidebar">

    <section class="sidebar">


        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/avatar04.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>
                  <?php
                    if(isset(Yii::$app->user->identity->id)){
                      echo Yii::$app->user->identity->username;
                    }else {
                      Yii::$app->user->logout();
                      // $this->redirect(Yii::app()->homeUrl);
                    }
                  ?>
                </p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!--


        /// La Funcion la Encontramos en SiteController

        -->

        <?php
        // echo dmstr\widgets\Menu::widget(
        //    [
        //        'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
        //        'items' => [
        //            [
        //                'label' => 'Administración',
        //                'icon' => 'code',
        //                'url' => '#',
        //                'items' => null,
        //                  ]]]);
        //  echo dmstr\widgets\Menu::widget(
        //     [
        //         'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
        //         'items' => [
        //             [
        //                 'label' => 'Parametros',
        //                 'icon' => 'code',
        //                 'url' => '#',
        //                 'items' => null,
        //                   ]]]);
          if (SiteController::findvar(1))
          // if ($this->context->findVar(1))
              echo dmstr\widgets\Menu::widget(
                  [
                      'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                        'items' => [
                                   ['label' => 'Usuarios', 'icon' => 'users', 'url' => ['user/index']],
                        ]]);
            if (SiteController::findvar(2))
            // if ($this->context->findVar(2))
                echo dmstr\widgets\Menu::widget(
                  [
                    'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                      'items' => [
                                 ['label' => 'Dependencias', 'icon' => 'bank', 'url' => ['dependencias/index']],
                                 ]]);
            if (SiteController::findvar(3)){
              // echo 'hola';
            // if ($this->context->findVar(3)){
            $gda[] = ['label' => 'Aplicaciones', 'icon' => 'window-restore', 'url' => ['aplicaciones/index']];
            }
            else {
              $gda = null;
            }
            if (SiteController::findvar(4)){
            // if ($this->context->findVar(4)){
            $gda[] = ['label' => 'AppModulos', 'icon' => 'sliders', 'url' => ['appmodulos/index']];
                        // ['label' => 'AppModulos', 'icon' => 'sliders', 'url' => ['appmodulos/index']],
            }
            else {
              $gda=null;
            }
            if (SiteController::findvar(5)){
            // if ($this->context->findVar(5)){
            $gda[] = ['label' => 'AppDependencias', 'icon' => 'tasks', 'url' => ['appdependencias/index']];
            }
            else {
              $gda=null;
            }
            // print_r($gda);
            if ($gda != null) {
            echo dmstr\widgets\Menu::widget(
                 [
                     'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                     'items' => [
                         [
                             'label' => 'Gestión de Aplicaciones',
                             'icon' => 'code',
                             'url' => '#',
                             'items' => $gda,
                               ]]]);
            }
            else{
              echo 'her';
            }
            // echo $gdaa;
               // if ($this->context->findVar(4))
               //     echo dmstr\widgets\Menu::widget(
               //         [
               //             'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
               //             'items' => [
               //                 ['label' => 'AppModulos', 'icon' => 'sliders', 'url' => ['appmodulos/index']],
               //               ]]);
               // if ($this->context->findVar(5))
               //     echo dmstr\widgets\Menu::widget(
               //         [
               //             'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
               //             'items' => [
               //                 ['label' => 'AppDependencias', 'icon' => 'tasks', 'url' => ['appdependencias/index']],
               //               ]]);
               // if ($this->context->findVar(3))
               //     echo dmstr\widgets\Menu::widget(
               //         [
               //             'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
               //             'items' => [
               //                 ['label' => 'Aplicaciones', 'icon' => 'window-restore', 'url' => ['aplicaciones/index']],
               //               ]]);
               // if (SiteController::findvar(6)){
               // // if ($this->context->findVar(6)){
               //   $gde[] = ['label' => 'EmpDistribuidoras', 'icon' => 'truck', 'url' => ['empdistribuidora/index']];
               // }
               // else {
               //   $gde=null;
               // }
               if (SiteController::findvar(6)){
               // if ($this->context->findVar(7)){
                 $gde[] = ['label' => 'EmpSoporte', 'icon' => 'wrench', 'url' => ['empsoporte/index']];
               }
               else {
                 $gde=null;
               }
               if ($gde != null) {
                 echo dmstr\widgets\Menu::widget(
                    [
                        'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                        'items' => [
                            [
                                'label' => 'Gestión de Empresas',
                                'icon' => 'building',
                                'url' => '#',
                                'items' => $gde,
                                  ]]]);
               }

               // if ($this->context->findVar(6))
               //     echo dmstr\widgets\Menu::widget(
               //         [
               //             'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
               //             'items' => [
               //                   ['label' => 'EmpDistribuidoras', 'icon' => 'truck', 'url' => ['empdistribuidora/index']],
               //               ]]);
               // if ($this->context->findVar(7))
               //     echo dmstr\widgets\Menu::widget(
               //         [
               //             'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
               //             'items' => [
               //                   ['label' => 'EmpSoporte', 'icon' => 'wrench', 'url' => ['empsoporte/index']],
               //               ]]);
               if (SiteController::findvar(7)){
               // if ($this->context->findVar(8)){
                 $gdp[] = ['label' => 'Proyectos', 'icon' => 'line-chart', 'url' => ['proyectos/index']];
               }
               else {
                 $gdp=null;
               }
               if (SiteController::findvar(8)){
               // if ($this->context->findVar(9)){
                 $gdp[] = ['label' => 'Cambio Alcance', 'icon' => 'exchange', 'url' => ['cambioalcance/index']];
               }
               else {
                 $gdp=null;
               }
               if ($gdp != null) {
                 echo dmstr\widgets\Menu::widget(
                    [
                        'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                        'items' => [
                            [
                                'label' => 'Gestión de Proyectos',
                                'icon' => 'map',
                                'url' => '#',
                                'items' => $gdp,
                                  ]]]);
               }

                         // if ($this->context->findVar(8))
                         //     echo dmstr\widgets\Menu::widget(
                         //         [
                         //             'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                         //             'items' => [
                         //                 ['label' => 'Proyectos', 'icon' => 'line-chart', 'url' => ['proyectos/index']],
                         //               ]]);
                         // if ($this->context->findVar(9))
                         //     echo dmstr\widgets\Menu::widget(
                         //         [
                         //             'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                         //             'items' => [
                         //                 ['label' => 'Cambio Alcance', 'icon' => 'exchange', 'url' => ['cambioalcance/index']],
                         //               ]]);
                         if (SiteController::findvar(9)){
                         // if ($this->context->findVar(10)){
                           $gr[] = ['label' => 'Requerimientos', 'icon' => 'stack-overflow', 'url' => ['requerimientos/index']];
                         }
                         else {
                           $gr=null;
                         }
                         if (SiteController::findvar(10)){
                         // if ($this->context->findVar(11)){
                           $gr[] = ['label' => 'Versión Requerimientos', 'icon' => 'bank', 'url' => ['versdocrequerimientos/index']];
                         }
                         else {
                           $gr=null;
                         }
                         if (SiteController::findvar(11)){
                         // if ($this->context->findVar(12)){
                           $gr[] = ['label' => 'Estado Requerimientos', 'icon' => 'bank', 'url' => ['estrequerimientos/index']];
                         }
                         else {
                           $gr=null;
                         }
                         if ($gr != null) {
                           echo dmstr\widgets\Menu::widget(
                              [
                                  'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                                  'items' => [
                                      [
                                          'label' => 'Gestión Requerimientos',
                                          'icon' => 'tags',
                                          'url' => '#',
                                          'items' => $gr,
                                            ]]]);
                         }


                        if (SiteController::findvar(12)){
                        // if ($this->context->findVar(13)){
                          $ryp[] = ['label' => 'Roles', 'icon' => 'file-code-o', 'url' => ['roles/index']];
                        }
                        else {
                          $ryp=null;
                        }
                        if (SiteController::findvar(13)){
                        // if ($this->context->findVar(14)){
                          $ryp[] = ['label' => 'Rolintecoma', 'icon' => 'bank', 'url' => ['rolintecoma/index']];
                        }
                        else {
                          $ryp=null;
                        }
                        if (SiteController::findvar(14)){
                        // if ($this->context->findVar(15)){
                          $ryp[] = ['label' => 'Rolusua', 'icon' => 'bank', 'url' => ['rolusua/index']];
                        }
                        else {
                          $ryp=null;
                        }
                        if ($ryp != null) {
                          echo dmstr\widgets\Menu::widget(
                             [
                                 'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                                 'items' => [
                                     [
                                         'label' => 'Roles y Permisos',
                                         'icon' => 'address-card',
                                         'url' => '#',
                                         'items' => $ryp,
                                           ]]]);
                        }
                        $i=0;
                        $pds;
                         if (SiteController::findvar(15)){
                         // if ($this->context->findVar(16)){
                           $pds[$i] = ['label' => 'Tipo', 'icon' => 'cog', 'url' => ['tipo/index']];
                           $i++;
                         }
                         else {

                         }
                         if (SiteController::findvar(16)){
                         // if ($this->context->findVar(17)){
                           $pds[$i] = ['label' => 'Tipos', 'icon' => 'cog', 'url' => ['tipos/index']];
                           $i++;
                         }
                         else {

                         }
                         if (SiteController::findvar(17)){
                         // if ($this->context->findVar(18)){
                           $pds[$i] = ['label' => 'Interfaces', 'icon' => 'bank', 'url' => ['interfaces/index']];
                           $i++;
                         }
                         else {

                         }
                         if (SiteController::findvar(18)){
                         // if ($this->context->findVar(19)){
                           $pds[$i] = ['label' => 'Comandos', 'icon' => 'cog', 'url' => ['comandos/index']];
                           $i++;
                         }
                         else {

                         }
                         if (SiteController::findvar(19)){
                         // if ($this->context->findVar(20)){
                           $pds[$i] = ['label' => 'Intecoma', 'icon' => 'bank', 'url' => ['intecoma/index']];
                           $i++;
                         }
                         else {

                         }
                         if (SiteController::findvar(20)){
                         // if ($this->context->findVar(20)){
                           $pds[$i] = ['label' => 'Parámetros', 'icon' => 'cog', 'url' => ['parametros/index']];
                           $i++;
                         }
                         else {

                         }
                         if (SiteController::findvar(21)){
                         // if ($this->context->findVar(20)){
                           $pds[$i] = ['label' => 'Auditorias', 'icon' => 'cog', 'url' => ['auditorias/index']];
                           $i++;
                         }
                         else {

                         }
                         if (isset($pds)) {
                           echo dmstr\widgets\Menu::widget(
                              [
                                  'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                                  'items' => [
                                      [
                                          'label' => 'Parámetros del Sistema',
                                          'icon' => 'cogs',
                                          'url' => '#',
                                          'items' => $pds,
                                            ]]]);
                         }


                         // if ($this->context->findVar(16))
                         //     echo dmstr\widgets\Menu::widget(
                         //         [
                         //             'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                         //             'items' => [
                         //                   ['label' => 'Tipo', 'icon' => 'cog', 'url' => ['tipo/index']],
                         //               ]]);
                         // if ($this->context->findVar(17))
                         //     echo dmstr\widgets\Menu::widget(
                         //         [
                         //             'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                         //             'items' => [
                         //                   ['label' => 'Tipos', 'icon' => 'cog', 'url' => ['tipos/index']],
                         //               ]]);
                           // if ($this->context->findVar(18))
                           //     echo dmstr\widgets\Menu::widget(
                           //         [
                           //             'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                           //             'items' => [
                           //                 ['label' => 'Interfaces', 'icon' => 'bank', 'url' => ['interfaces/index']],
                           //               ]]);
                           // if ($this->context->findVar(19))
                           //     echo dmstr\widgets\Menu::widget(
                           //         [
                           //             'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                           //             'items' => [
                           //                 ['label' => 'Comandos', 'icon' => 'cog', 'url' => ['comandos/index']],
                           //               ]]);
                           // if ($this->context->findVar(20))
                           //     echo dmstr\widgets\Menu::widget(
                           //         [
                           //             'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                           //             'items' => [
                           //                   ['label' => 'Intecoma', 'icon' => 'bank', 'url' => ['intecoma/index']],
                           //               ]]);
                         //   if ($this->context->findVar(10))
                         //       echo dmstr\widgets\Menu::widget(
                         //           [
                         //               'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                         //               'items' => [
                         //                     ['label' => 'Requerimientos', 'icon' => 'stack-overflow', 'url' => ['requerimientos/index']],
                         //                 ]]);
                         // if ($this->context->findVar(11))
                         //     echo dmstr\widgets\Menu::widget(
                         //         [
                         //             'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                         //             'items' => [
                         //                   ['label' => 'Versión Requerimientos', 'icon' => 'bank', 'url' => ['versdocrequerimientos/index']],
                         //               ]]);
                         // if ($this->context->findVar(12))
                         //     echo dmstr\widgets\Menu::widget(
                         //         [
                         //             'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                         //             'items' => [
                         //                 ['label' => 'Estado Requerimientos', 'icon' => 'bank', 'url' => ['estrequerimientos/index']],
                         //               ]]);
                         // if ($this->context->findVar(13))
                         //     echo dmstr\widgets\Menu::widget(
                         //         [
                         //             'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                         //             'items' => [
                         //                 ['label' => 'Roles', 'icon' => 'file-code-o', 'url' => ['roles/index'],],
                         //               ]]);
                         // if ($this->context->findVar(14))
                         //     echo dmstr\widgets\Menu::widget(
                         //         [
                         //             'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                         //             'items' => [
                         //                   ['label' => 'Rolintecoma', 'icon' => 'bank', 'url' => ['rolintecoma/index']],
                         //               ]]);
                         // if ($this->context->findVar(15))
                         //     echo dmstr\widgets\Menu::widget(
                         //         [
                         //             'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                         //             'items' => [
                         //                   ['label' => 'Rolusua', 'icon' => 'bank', 'url' => ['rolusua/index']],
                         //               ]]);
        ?>
         <!-- <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Usuarios', 'icon' => 'group', 'url' => ['user/index']],
                    ['label' => 'Dependencias', 'icon' => 'bank', 'url' => ['dependencias/index']]],
                  ])?> -->

                  <!--
        //           dmstr\widgets\Menu::widget([
        //           'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
        //           'items' => [
        //
        //
        //
        //         // ])
        //             // ,
        //             [
        //             // 'label' => 'Administración Usuarios',
        //             // 'icon' => 'code',
        //             // 'url' => '#',
        //             // 'items' => [
        //                 'label' => 'Gestión de Aplicaciones',
        //                 'icon' => 'code',
        //                 'url' => '#',
        //                 'items' => [
        //                     ['label' => 'Aplicaciones', 'icon' => 'window-restore', 'url' => ['aplicaciones/index']],
        //                     ['label' => 'Módulos por Aplicativo', 'icon' => 'sliders', 'url' => ['appmodulos/index']],
        //                     ['label' => 'Aplicativos por Dependencias', 'icon' => 'tasks', 'url' => ['appdependencias/index']],
        //
        //                     ['label' => 'Aplicativo por Dependencia', 'icon' => 'tasks', 'url' => ['appdependencias/index']],
        //
        //
        //                     /*['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
        //                     [
        //                         'label' => 'Level One',
        //                         'icon' => 'circle-o',
        //                         'url' => '#',
        //                         'items' => [
        //                             ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
        //                             [
        //                                 'label' => 'Level Two',
        //                                 'icon' => 'circle-o',
        //                                 'url' => '#',
        //                                 'items' => [
        //                                     ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
        //                                     ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
        //                                 ],
        //                             ],
        //                         ],
        //                     ],*/
        //                 ],
        //
        //             ],
        //             [
        //                 'label' => 'Gestión de Empresas',
        //                 'icon' => 'building',
        //                 'url' => '#',
        //                 'items' => [
        //                         ['label' => 'Distribuidoras', 'icon' => 'truck', 'url' => ['empdistribuidora/index']],
        //                         ['label' => 'Soporte', 'icon' => 'wrench', 'url' => ['empsoporte/index']],
        //                     /*['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
        //                     [
        //                         'label' => 'Level One',
        //                         'icon' => 'circle-o',
        //                         'url' => '#',
        //                         'items' => [
        //                             ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
        //                             [
        //                                 'label' => 'Level Two',
        //                                 'icon' => 'circle-o',
        //                                 'url' => '#',
        //                                 'items' => [
        //                                     ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
        //                                     ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
        //                                 ],
        //                             ],
        //                         ],
        //                     ],*/
        //                 ],
        //             ],
        //             [
        //                 'label' => 'Gestión de Proyectos',
        //                 'icon' => 'map',
        //                 'url' => '#',
        //                 'items' => [
        //                     ['label' => 'Proyectos', 'icon' => 'line-chart', 'url' => ['proyectos/index']],
        //                     ['label' => 'Cambio de Alcance', 'icon' => 'exchange', 'url' => ['cambioalcance/index']],
        //                     /*['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
        //                     [
        //                         'label' => 'Level One',
        //                         'icon' => 'circle-o',
        //                         'url' => '#',
        //                         'items' => [
        //                             ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
        //                             [
        //                                 'label' => 'Level Two',
        //                                 'icon' => 'circle-o',
        //                                 'url' => '#',
        //                                 'items' => [
        //                                     ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
        //                                     ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
        //                                 ],
        //                             ],
        //                         ],
        //                     ],*/
        //                 ],
        //             ],
        //             [
        //                 'label' => 'Gestión Requerimientos',
        //                 'icon' => 'tags',
        //                 'url' => '#',
        //                 'items' => [
        //                     ['label' => 'Requerimientos', 'icon' => 'stack-overflow', 'url' => ['requerimientos/index']],
        //                     ['label' => 'Versión Requerimientos', 'icon' => 'file-text-o', 'url' => ['versdocrequerimientos/index']],
        //                     ['label' => 'Estado Requerimientos', 'icon' => 'tripadvisor', 'url' => ['estrequerimientos/index']],
        //                 ],
        //             ],
        //             [
        //                 'label' => 'Roles y Permisos',
        //                 'icon' => 'address-card',
        //                 'url' => '#',
        //                 'items' => [
        //                     ['label' => 'Roles', 'icon' => 'user-circle', 'url' => ['roles/index'],],
        //                     ['label' => 'Rol por Funcionalidad', 'icon' => 'window-close', 'url' => ['rolintecoma/index']],
        //                     ['label' => 'Rol por Usuario', 'icon' => 'id-badge', 'url' => ['rolusua/index']],
        //                 ],
        //             ],
        //             [
        //                 'label' => 'Parámetros del Sistema',
        //                 'icon' => 'cogs',
        //                 'url' => '#',
        //                 'items' => [
        //                     ['label' => 'Tipo', 'icon' => 'check-square', 'url' => ['tipo/index'],],
        //                     ['label' => 'Tipos', 'icon' => 'minus-square', 'url' => ['tipos/index'],],
        //                     ['label' => 'Interfaces', 'icon' => 'window-maximize', 'url' => ['interfaces/index']],
        //                     ['label' => 'Comandos', 'icon' => 'compass', 'url' => ['comandos/index'],],
        //                     ['label' => 'Interfaz por Comando', 'icon' => 'magic', 'url' => ['intecoma/index']],
        //                     /*['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
        //                     [
        //                         'label' => 'Level One',
        //                         'icon' => 'circle-o',
        //                         'url' => '#',
        //                         'items' => [
        //                             ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
        //                             [
        //                                 'label' => 'Level Two',
        //                                 'icon' => 'circle-o',
        //                                 'url' => '#',
        //                                 'items' => [
        //                                     ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
        //                                     ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
        //                                 ],
        //                             ],
        //                         ],
        //                     ],*/
        //                 ],
        //             ],
        //         ],
        //     ]
        // )
        -->

    </section>

</aside>
