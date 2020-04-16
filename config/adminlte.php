<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#61-title
    |
    */

    'title' => 'Laravel PHP ADMINLTE - EXAMPLES & SNIPPETS',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#62-logo
    |
    */

    'logo' => '<b>Laravel PHP Admin Lte</b> Examples & Snippets',
    'logo_img' => 'vendor/adminlte/dist/img/logo.png',
    'logo_img_class' => 'brand-image-xl',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'logo',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#63-layout
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => null,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,

    /*
    |--------------------------------------------------------------------------
    | Extra Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#64-classes
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_header' => 'container-fluid',
    'classes_content' => 'container-fluid',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand-md',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#65-sidebar
    |
    */

    'sidebar_mini' => true,
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#66-control-sidebar-right-sidebar
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#67-urls
    |
    */

    'use_route_url' => false,

    'dashboard_url' => 'home',

    'logout_url' => 'logout',

    'login_url' => 'login',

    'register_url' => 'register',

    'password_reset_url' => 'password/reset',

    'password_email_url' => 'password/email',

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#68-laravel-mix
    |
    */

    'enabled_laravel_mix' => false,

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#69-menu
    |
    */

    'menu' =>
        [
            [
                'text' => 'find',
                'search' => true,
                'topnav' => true,
            ],
            [
                'text' => 'blog',
                'url' => 'admin/blog',
                'can' => 'manage-blog',
            ],
            [
                'text' => 'Login',
                'logo_img' => 'vendor/adminlte/dist/img/login2.png',
                'logo_img_class' => 'brand-image-xl',
                'logo_img_xl' => null,
                'logo_img_xl_class' => 'brand-image-xs',
                'logo_img_alt' => 'Login',
                'url' => 'login',
                'label' => 0,
                'label_color' => 'success',
            ],

            [
                'text' => 'Dashboard',
                'icon' => 'nav-icon fas fa-tachometer-alt',
                'submenu' =>
                    [
                        [
                            'text' => 'Dashboard1',
                            'url' => 'dashboard',
                        ],
                        [
                            'text' => 'Dashboard2',
                            'url' => 'dashboard1',
                        ],
                        [
                            'text' => 'Dashboard3',
                            'url' => 'dashboard2',
                        ],
                    ],
            ],

            [
                'text' => 'Widgets',
                'url' => 'widgets',
                'icon' => 'nav-icon fas fa-th',
                'label' => "new",
                'label_color' => 'danger',
            ],

            [
                'text' => 'Layout Options',
                'icon' => 'nav-icon fas fa-copy',
                'label' => 6,
                'label_color' => 'primary',
                'submenu' =>
                    [
                        [
                            'text' => 'Top navigation',
                            'url' => 'topnav',
                        ],
                        [
                            'text' => 'Boxed',
                            'url' => 'boxed',
                        ],
                        [
                            'text' => 'Fixed Sidebar',
                            'url' => 'fixsid',
                        ],
                        [
                            'text' => 'Fixed Navbar',
                            'url' => 'fixtop',
                        ],
                        [
                            'text' => 'Fixed Footer',
                            'url' => 'fixfoo',
                        ],
                        [
                            'text' => 'Collapsed sidebar',
                            'url' => 'colsid',
                        ],
                    ],
            ],

            [
                'text' => 'charts',
                'icon' => 'nav-icon fas fa-chart-pie',
                'submenu' =>
                    [
                        [
                            'text' => 'chartjs',
                            'url' => 'chartjs',
                        ],
                        [
                            'text' => 'flot',
                            'url' => 'flot',
                        ],
                        [
                            'text' => 'inline',
                            'url' => 'inline',
                        ],
                    ],
            ],


            [
                'text' => 'UI Elements',
                'icon' => 'nav-icon fas fa-tree',
                'submenu' =>
                    [
                        [
                            'text' => 'General',
                            'url' => 'general',
                        ],
                        [
                            'text' => 'Icons',
                            'url' => 'icons',
                        ],
                        [
                            'text' => 'Buttons',
                            'url' => 'button',
                        ],
                        [
                            'text' => 'Sliders',
                            'url' => 'sliders',
                        ],
                        [
                            'text' => 'Modals & Alerts',
                            'url' => 'modals',
                        ],
                        [
                            'text' => 'Navbar & Tabs',
                            'url' => 'navbar',
                        ],
                        [
                            'text' => 'Timeline',
                            'url' => 'timeline',
                        ],
                        [
                            'text' => 'Ribbon',
                            'url' => 'ribbons',
                        ],
                    ],
            ],

            [
                'text' => 'Forms',
                'icon' => 'nav-icon fas fa-edit',
                'submenu' =>
                    [
                        [
                            'text' => 'General Elements',
                            'url' => 'generalf',
                        ],
                        [
                            'text' => 'Advanced Elements',
                            'url' => 'advanced',
                        ],
                        [
                            'text' => 'Editors',
                            'url' => 'editors',
                        ],
                        [
                            'text' => 'Validation',
                            'url' => 'validation',
                        ],
                        [
                            'text' => 'File Uplode',
                            'url' => 'fileuplode',
                        ],
                    ],
            ],

            [
                'text' => 'Tables',
                'icon' => 'nav-icon fas fa-table',
                'submenu' =>
                    [
                        [
                            'text' => 'Simple Tables',
                            'url' => 'simple',
                        ],
                        [
                            'text' => 'DataTables',
                            'url' => 'data',
                        ],
                        [
                            'text' => 'jsGrid',
                            'url' => 'jsgrid',
                        ],
                    ],
            ],

            ['header' => 'EXAMPLES'],
            [
                'text' => 'Calendar',
                'url' => 'calendar',
                'icon' => 'nav-icon far fa-calendar-alt',
                'label' => 2,
                'label_color' => 'primary',
            ],
            [
                'text' => 'Gallery',
                'url' => 'gallery',
                'icon' => 'nav-icon far fa-image',
            ],
            [
                'text' => 'Mailbox',
                'icon' => 'nav-icon far fa-envelope',
                'submenu' => [
                    [
                        'text' => 'Inbox',
                        'url' => 'inbox',
                    ],
                    [
                        'text' => 'Compose',
                        'url' => 'compose',
                    ],
                    [
                        'text' => 'Read',
                        'url' => 'read',
                    ],
                ],
            ],
            [
                'text' => 'Pages',
                'icon' => 'nav-icon fas fa-book',
                'submenu' => [
                    [
                        'text' => 'Invoice',
                        'url' => 'invoice',
                    ],
                    [
                        'text' => 'Profile',
                        'url' => 'profile',
                    ],
                    [
                        'text' => 'E-commerce',
                        'url' => 'ecommerce',
                    ],
                    [
                        'text' => 'Projects',
                        'url' => 'projects',
                    ],
                    [
                        'text' => 'Project Add',
                        'url' => 'projectadd',
                    ],
                    [
                        'text' => 'Project Edit',
                        'url' => 'projectedit',
                    ],
                    [
                        'text' => 'Project Detail',
                        'url' => 'projectdetail',
                    ],
                    [
                        'text' => 'Contacts',
                        'url' => 'contacts',
                    ],
                ],
            ],
            [
                'text' => 'Extras',
                'icon' => 'nav-icon far fa-plus-square',
                'submenu' => [
                    [
                        'text' => 'Login',
                        'url' => 'login',
                    ],
                    [
                        'text' => 'Register',
                        'url' => 'register',
                    ],
                    [
                        'text' => 'Forgot Password',
                        'url' => 'forgotpassword',
                    ],
                    [
                        'text' => 'Recover Password',
                        'url' => 'recoverpassword',
                    ],
                    [
                        'text' => 'Lockscreen',
                        'url' => 'lockscreen',
                    ],
                    [
                        'text' => 'Legacy User Menu',
                        'url' => 'legacyusermenu',
                    ],
                    [
                        'text' => 'Language Menu',
                        'url' => 'languagemenu',
                    ],
                    [
                        'text' => 'Error 404',
                        'url' => 'error404',
                    ],
                    [
                        'text' => 'Error 500',
                        'url' => 'error500',
                    ],
                    [
                        'text' => 'Pace',
                        'url' => 'pace',
                    ],
                    [
                        'text' => 'Blank Page',
                        'url' => 'blankpage',
                    ],
                    [
                        'text' => 'Starter Page',
                        'url' => 'starterpage',
                    ],
                ],
            ],
            /*
            ['header' => 'account_settings'],
            [
                'text' => 'profile',
                'url'  => 'admin/settings',
                'icon' => 'fas fa-fw fa-user',
            ],
            [
                'text' => 'change_password',
                'url'  => 'admin/settings',
                'icon' => 'fas fa-fw fa-lock',
            ],
            [
                'text'    => 'multilevel',
                'icon'    => 'fas fa-fw fa-share',
                'submenu' => [
                    [
                        'text' => 'level_one',
                        'url'  => '#',
                    ],
                    [
                        'text'    => 'level_one',
                        'url'     => '#',
                        'submenu' => [
                            [
                                'text' => 'level_two',
                                'url'  => '#',
                            ],
                            [
                                'text'    => 'level_two',
                                'url'     => '#',
                                'submenu' => [
                                    [
                                        'text' => 'level_three',
                                        'url'  => '#',
                                    ],
                                    [
                                        'text' => 'level_three',
                                        'url'  => '#',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    [
                        'text' => 'level_one',
                        'url'  => '#',
                    ],
                ],
            ],
            ['header' => 'labels'],
            [
                'text'       => 'important',
                'icon_color' => 'red',
            ],
            [
                'text'       => 'warning',
                'icon_color' => 'yellow',
            ],
            [
                'text'       => 'information',
                'icon_color' => 'aqua',
            ],*/
        ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#610-menu-filters
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#611-plugins
    |
    */

    'plugins' => [
        [
            'name' => 'Datatables',
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        [
            'name' => 'Select2',
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        [
            'name' => 'Chartjs',
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        [
            'name' => 'Sweetalert2',
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        [
            'name' => 'Pace',
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],
];
