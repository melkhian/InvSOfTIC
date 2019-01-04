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

        <?= dmstr\widgets\Menu::widget(
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
                            ['label' => 'Comando por Interfaz', 'icon' => 'window-close', 'url' => ['rolintecoma/index']],
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
        ) ?>

    </section>

</aside>
