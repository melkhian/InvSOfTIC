<?php

?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/avatar04.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!--

        /// La Funcion la Encontramos en SiteController

        -->

        <?php
          if ($this->context->findVar(1))
              echo dmstr\widgets\Menu::widget(
                  [
                      'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                      'items' => [
                          ['label' => 'Usuarios', 'icon' => 'users', 'url' => ['user/index']],
                        ]]);
            if ($this->context->findVar(2))
                echo dmstr\widgets\Menu::widget(
                  [
                    'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                      'items' => [
                                 ['label' => 'Dependencias', 'icon' => 'bank', 'url' => ['dependencias/index']],
                                 ]]);
            if ($this->context->findVar(3)){
            $gda[] = ['label' => 'Aplicaciones', 'icon' => 'window-restore', 'url' => ['aplicaciones/index']];
            }
            if ($this->context->findVar(4)){
            $gda[] = ['label' => 'AppModulos', 'icon' => 'sliders', 'url' => ['appmodulos/index']];
                        // ['label' => 'AppModulos', 'icon' => 'sliders', 'url' => ['appmodulos/index']],
            }
            if ($this->context->findVar(5)){
            $gda[] = ['label' => 'AppDependencias', 'icon' => 'tasks', 'url' => ['appdependencias/index']];
            }
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
               if ($this->context->findVar(6)){
                 $gde[] = ['label' => 'EmpDistribuidoras', 'icon' => 'truck', 'url' => ['empdistribuidora/index']];
               }
               if ($this->context->findVar(7)){
                 $gde[] = ['label' => 'EmpSoporte', 'icon' => 'wrench', 'url' => ['empsoporte/index']];
               }

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

               if ($this->context->findVar(8)){
                 $gdp[] = ['label' => 'Proyectos', 'icon' => 'line-chart', 'url' => ['proyectos/index']];
               }
               if ($this->context->findVar(9)){
                 $gdp[] = ['label' => 'Cambio Alcance', 'icon' => 'exchange', 'url' => ['cambioalcance/index']];
               }

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

                         if ($this->context->findVar(10)){
                           $gr[] = ['label' => 'Requerimientos', 'icon' => 'stack-overflow', 'url' => ['requerimientos/index']];
                         }
                         if ($this->context->findVar(11)){
                           $gr[] = ['label' => 'Versión Requerimientos', 'icon' => 'bank', 'url' => ['versdocrequerimientos/index']];
                         }
                         if ($this->context->findVar(12)){
                           $gr[] = ['label' => 'Estado Requerimientos', 'icon' => 'bank', 'url' => ['estrequerimientos/index']];
                         }

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


                        if ($this->context->findVar(13)){
                          $ryp[] = ['label' => 'Roles', 'icon' => 'file-code-o', 'url' => ['roles/index']];
                        }
                        if ($this->context->findVar(14)){
                          $ryp[] = ['label' => 'Rolintecoma', 'icon' => 'bank', 'url' => ['rolintecoma/index']];
                        }
                        if ($this->context->findVar(15)){
                          $ryp[] = ['label' => 'Rolusua', 'icon' => 'bank', 'url' => ['rolusua/index']];
                        }

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


                         if ($this->context->findVar(16)){
                           $pds[] = ['label' => 'Tipo', 'icon' => 'cog', 'url' => ['tipo/index']];
                         }
                         if ($this->context->findVar(17)){
                           $pds[] = ['label' => 'Tipos', 'icon' => 'cog', 'url' => ['tipos/index']];
                         }
                         if ($this->context->findVar(18)){
                           $pds[] = ['label' => 'Interfaces', 'icon' => 'bank', 'url' => ['interfaces/index']];
                         }
                         if ($this->context->findVar(19)){
                           $pds[] = ['label' => 'Comandos', 'icon' => 'cog', 'url' => ['comandos/index']];
                         }
                         if ($this->context->findVar(20)){
                           $pds[] = ['label' => 'Intecoma', 'icon' => 'bank', 'url' => ['intecoma/index']];
                         }

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
                    ['label' => 'Dependencias', 'icon' => 'bank', 'url' => ['dependencias/index']],
                    [
                        'label' => 'Gestión de Aplicaciones',
                        'icon' => 'code',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Aplicaciones', 'icon' => 'window-restore', 'url' => ['aplicaciones/index']],
                            ['label' => 'Módulos por Aplicativo', 'icon' => 'sliders', 'url' => ['appmodulos/index']],
                            ['label' => 'Aplicativos por Dependencias', 'icon' => 'tasks', 'url' => ['appdependencias/index']],

                            ['label' => 'Aplicativo por Dependencia', 'icon' => 'tasks', 'url' => ['appdependencias/index']],


                            /*['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],*/
                        ],
                    ],
                    [
                        'label' => 'Gestión de Empresas',
                        'icon' => 'building',
                        'url' => '#',
                        'items' => [
                                ['label' => 'Distribuidoras', 'icon' => 'truck', 'url' => ['empdistribuidora/index']],
                                ['label' => 'Soporte', 'icon' => 'wrench', 'url' => ['empsoporte/index']],
                            /*['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],*/
                        ],
                    ],
                    [
                        'label' => 'Gestión de Proyectos',
                        'icon' => 'map',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Proyectos', 'icon' => 'line-chart', 'url' => ['proyectos/index']],
                            ['label' => 'Cambio de Alcance', 'icon' => 'exchange', 'url' => ['cambioalcance/index']],
                            /*['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],*/
                        ],
                    ],
                    [
                        'label' => 'Gestión Requerimientos',
                        'icon' => 'tags',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Requerimientos', 'icon' => 'stack-overflow', 'url' => ['requerimientos/index']],
                            ['label' => 'Versión Requerimientos', 'icon' => 'file-text-o', 'url' => ['versdocrequerimientos/index']],
                            ['label' => 'Estado Requerimientos', 'icon' => 'tripadvisor', 'url' => ['estrequerimientos/index']],
                        ],
                    ],
                    [
                        'label' => 'Roles y Permisos',
                        'icon' => 'address-card',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Roles', 'icon' => 'user-circle', 'url' => ['roles/index'],],
                            ['label' => 'Rol por Funcionalidad', 'icon' => 'window-close', 'url' => ['rolintecoma/index']],
                            ['label' => 'Rol por Usuario', 'icon' => 'id-badge', 'url' => ['rolusua/index']],
                        ],
                    ],
                    [
                        'label' => 'Parámetros del Sistema',
                        'icon' => 'cogs',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Tipo', 'icon' => 'check-square', 'url' => ['tipo/index'],],
                            ['label' => 'Tipos', 'icon' => 'minus-square', 'url' => ['tipos/index'],],
                            ['label' => 'Interfaces', 'icon' => 'window-maximize', 'url' => ['interfaces/index']],
                            ['label' => 'Comandos', 'icon' => 'compass', 'url' => ['comandos/index'],],
                            ['label' => 'Interfaz por Comando', 'icon' => 'magic', 'url' => ['intecoma/index']],
                            /*['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],*/
                        ],
                    ],
                ],
            ]
        ) ?> -->

    </section>

</aside>
