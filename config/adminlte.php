<?php

use Illuminate\Support\Facades\Auth;

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => env('APP_NAME'),
    'title_prefix' => env('APP_NAME'),
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => true,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => env('APP_NAME'),
    // 'logo_img' => 'vendor/adminlte/dist/img/logo.png',
    'logo_img' => 'img/logo-transparent.png',
    'logo_img_class' => 'brand-image elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => env('APP_NAME'),

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => false,
    'usermenu_header' => false,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => true,
    'layout_dark_mode' => true,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline card-yellow',
    'classes_auth_header' => '',
    'classes_auth_body' => 'bg-warning',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-dark',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-gray elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-dark navbar-dark',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => true,
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
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
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
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => 'admin',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => false, //'register',
    'password_reset_url' => false,
    // 'password_reset_url' => 'password/reset',
    'password_email_url' => false,
    // 'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => true,
        ],

        // Sidebar items:
        [
            'type' => 'sidebar-menu-search',
            'text' => 'Pesquisar',
        ],
        //Custom menus
        [
            'text'        => 'Dashboard',
            'url'         => '/admin',
            'icon'        => 'fa fa-fw fa-digital-tachograph',
        ],
        [
            'text'        => 'Usuários',
            'url'         => '#',
            'icon'        => 'fas fa-fw fa-user',
            'can'         => 'Acessar Usuários',
            'submenu' => [
                [
                    'text' => 'Listagem de Usuários',
                    'url'  => 'admin/users',
                    'icon' => 'fas fa-fw fa-chevron-right',
                    'can'  => 'Listar Usuários',
                ],
                [
                    'text' => 'Cadastro de Usuário',
                    'url'  => 'admin/users/create',
                    'icon' => 'fas fa-fw fa-chevron-right',
                    'can'  => 'Criar Usuários',
                ],
            ],
        ],
        [
            'text'        => 'Equipes',
            'url'         => '#',
            'icon'        => 'fas fa-fw fa-users',
            'can'         => 'Acessar Equipes',
            'submenu' => [
                [
                    'text' => 'Listagem de Equipes',
                    'url'  => 'admin/teams',
                    'icon' => 'fas fa-fw fa-chevron-right',
                    'can'  => 'Listar Equipes',
                ],
                [
                    'text' => 'Cadastro de Equipe',
                    'url'  => 'admin/teams/create',
                    'icon' => 'fas fa-fw fa-chevron-right',
                    'can'  => 'Criar Equipes',
                ],
            ],
        ],
        [
            'text'        => 'Operações',
            'url'         => '#',
            'icon'        => 'fas fa-fw fa-bullseye',
            'can'         => 'Acessar Operações',
            'submenu' => [
                [
                    'text' => 'Listagem de Operações',
                    'url'  => 'admin/operations',
                    'icon' => 'fas fa-fw fa-chevron-right',
                    'can'  => 'Listar Operações',
                ],
                [
                    'text' => 'Cadastro de Operação',
                    'url'  => 'admin/operations/create',
                    'icon' => 'fas fa-fw fa-chevron-right',
                    'can'  => 'Criar Operações',
                ],
            ],
        ],
        [
            'text'        => 'Relatórios',
            'url'         => '#',
            'icon'        => 'fas fa-fw fa-file',
            'can'         => 'Acessar Relatórios',
            'submenu' => [
                [
                    'text' => 'Listagem de Relatórios',
                    'url'  => 'admin/reports',
                    'icon' => 'fas fa-fw fa-chevron-right',
                    'can'  => 'Listar Relatórios',
                ],
                [
                    'text' => 'Cadastro de Relatório',
                    'url'  => 'admin/reports/create',
                    'icon' => 'fas fa-fw fa-chevron-right',
                    'can'  => 'Criar Relatórios',
                ],
            ],
        ],
        [
            'text'        => 'Ferramentas',
            'url'         => '#',
            'icon'        => 'fas fa-fw fa-virus',
            'can'         => 'Acessar Ferramentas',
            'submenu' => [
                [
                    'text' => 'Listagem de Ferramentas',
                    'url'  => 'admin/tools',
                    'icon' => 'fas fa-fw fa-chevron-right',
                    'can'  => 'Listar Ferramentas',
                ],
                [
                    'text' => 'Cadastro de Ferramenta',
                    'url'  => 'admin/tools/create',
                    'icon' => 'fas fa-fw fa-chevron-right',
                    'can'  => 'Criar Ferramentas',
                ],
            ],
        ],
        [
            'text'    => 'Configurações',
            'icon'    => 'fas fa-fw fa-cogs',
            'can'     => 'Acessar Configurações',
            'submenu' => [
                [
                    'text'        => 'Organizações',
                    'url'         => '#',
                    'icon'        => 'fas fa-fw fa-building',
                    'can'         => 'Acessar Usuários',
                    'submenu' => [
                        [
                            'text' => 'Listagem de Organizações',
                            'url'  => 'admin/organizations',
                            'icon' => 'fas fa-fw fa-chevron-right',
                            'can'  => 'Listar Organizações',
                        ],
                        [
                            'text' => 'Cadastro de Organização',
                            'url'  => 'admin/organizations/create',
                            'icon' => 'fas fa-fw fa-chevron-right',
                            'can'  => 'Criar Organizações',
                        ],
                    ],
                ],
                [
                    'text'        => 'Fases',
                    'url'         => '#',
                    'icon'        => 'fas fa-fw fa-shoe-prints',
                    'can'         => 'Acessar Fases',
                    'submenu' => [
                        [
                            'text' => 'Listagem de Fases',
                            'url'  => 'admin/steps',
                            'icon' => 'fas fa-fw fa-chevron-right',
                            'can'  => 'Listar Fases',
                        ],
                        [
                            'text' => 'Cadastro de Fases',
                            'url'  => 'admin/steps/create',
                            'icon' => 'fas fa-fw fa-chevron-right',
                            'can'  => 'Criar Fases',
                        ],
                    ],
                ],
            ]

        ],
        [
            'text'    => 'ACL',
            'icon'    => 'fas fa-fw fa-user-shield',
            'can'     => 'Acessar ACL',
            'submenu' => [

                [
                    'text' => 'Listagem de Perfis',
                    'url'  => 'admin/role',
                    'icon'    => 'fas fa-fw fa-chevron-right',
                    'can'     => 'Listar Perfis',
                ],
                [
                    'text' => 'Cadastro de Perfis',
                    'url'  => 'admin/role/create',
                    'icon'    => 'fas fa-fw fa-chevron-right',
                    'can'     => 'Criar Perfis',
                ],
                [
                    'text' => 'Listagem de Permissões',
                    'url'  => 'admin/permission',
                    'icon'    => 'fas fa-fw fa-chevron-right',
                ],
                [
                    'text' => 'Cadastro de Permissões',
                    'url'  => 'admin/permission/create',
                    'icon'    => 'fas fa-fw fa-chevron-right',
                    'can'     => 'Criar Permissões',
                ],
            ]
        ],
        // [
        //     'text'        => 'Site',
        //     'url'    => '/',
        //     'icon'    => 'fas fa-fw fa-link',
        //     'target' => '_blank',
        // ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/datatables/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'DatatablesPlugins' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables-plugins/buttons/js/dataTables.buttons.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables-plugins/buttons/js/buttons.bootstrap4.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables-plugins/buttons/js/buttons.html5.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables-plugins/buttons/js/buttons.print.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables-plugins/jszip/jszip.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables-plugins/pdfmake/pdfmake.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables-plugins/pdfmake/vfs_fonts.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/datatables-plugins/buttons/css/buttons.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
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
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/chart.js/Chart.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => 'vendor/chart.js/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
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
        'BsCustomFileInput' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/bs-custom-file-input/bs-custom-file-input.min.js',
                ],
            ],
        ],
        'select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/select2/js/select2.full.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/select2/css/select2.min.css',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/select2-bootstrap4-theme/select2-bootstrap4.min.css',
                ],
            ],
        ],
        'Summernote' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/summernote/summernote-bs4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/summernote/summernote-bs4.min.css',
                ],
            ],
        ],
        'BootstrapColorpicker' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css',
                ],
            ],
        ],
        'BootstrapSelect' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/bootstrap-select-1.13.14/dist/js/bootstrap-select.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/bootstrap-select-1.13.14/dist/css/bootstrap-select.min.css',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | IFrame
    |--------------------------------------------------------------------------
    |
    | Here we change the IFrame mode configuration. Note these changes will
    | only apply to the view that extends and enable the IFrame mode.
    |
    | For detailed instructions you can look the iframe mode section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/IFrame-Mode-Configuration
    |
    */

    'iframe' => [
        'default_tab' => [
            'url' => null,
            'title' => null,
        ],
        'buttons' => [
            'close' => true,
            'close_all' => true,
            'close_all_other' => true,
            'scroll_left' => true,
            'scroll_right' => true,
            'fullscreen' => true,
        ],
        'options' => [
            'loading_screen' => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items' => true,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'livewire' => false,
];
