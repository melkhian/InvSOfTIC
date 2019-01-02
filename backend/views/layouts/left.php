<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Jhon E. Gonzalez C.</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Usuarios', 'icon' => 'user', 'url' => ['user/index']],

                    [
                        'label' => 'Gestión Aplicaciones',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Dependencias', 'icon' => 'bank', 'url' => ['dependencias/index']],
                            ['label' => 'AppModulos', 'icon' => 'bank', 'url' => ['appmodulos/index']],
                            ['label' => 'AppDependencias', 'icon' => 'bank', 'url' => ['appdependencias/index']],
                            ['label' => 'Aplicaciones', 'icon' => 'bank', 'url' => ['aplicaciones/index']],

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

                    ['label' => 'EmpDistribuidoras', 'icon' => 'bank', 'url' => ['empdistribuidora/index']],
                    ['label' => 'EmpSoporte', 'icon' => 'bank', 'url' => ['empsoporte/index']],
                    ['label' => 'Proyectos', 'icon' => 'bank', 'url' => ['proyectos/index']],
                    ['label' => 'Cambio Alcance', 'icon' => 'bank', 'url' => ['cambioalcance/index']],

                    [
                        'label' => 'Parámetros del Sistema',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Tipo', 'icon' => 'cog', 'url' => ['tipo/index'],],
                            ['label' => 'Tipos', 'icon' => 'cog', 'url' => ['tipos/index'],],
                            ['label' => 'Interfaces', 'icon' => 'bank', 'url' => ['interfaces/index']],
                            ['label' => 'Comandos', 'icon' => 'cog', 'url' => ['comandos/index'],],
                            ['label' => 'Intecoma', 'icon' => 'bank', 'url' => ['intecoma/index']],


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
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Requerimientos', 'icon' => 'bank', 'url' => ['requerimientos/index']],
                            ['label' => 'Versión Requerimientos', 'icon' => 'bank', 'url' => ['versdocrequerimientos/index']],
                            ['label' => 'Estado Requerimientos', 'icon' => 'bank', 'url' => ['estrequerimientos/index']],
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

                    /*['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],*/
                    [
                        'label' => 'Roles y Permisos',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Roles', 'icon' => 'file-code-o', 'url' => ['roles/index'],],
                            ['label' => 'Rolintecoma', 'icon' => 'bank', 'url' => ['rolintecoma/index']],
                            ['label' => 'Rolusua', 'icon' => 'bank', 'url' => ['rolusua/index']],


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
