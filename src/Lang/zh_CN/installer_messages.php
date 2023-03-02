<?php

return [

    /*
     *
     * Shared translations.
     *
     */
    'title' => 'Laravel安装程序',
    'next' => '下一步',
    'finish' => '安装',
    'forms' => [
        'errorTitle' => '发生以下错误:',
    ],

    /*
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'templateTitle' => '欢迎',
        'title' => '欢迎来到Laravel安装程序',
        'message' => '欢迎来到安装向导.',
        'next' => '检查环境要求',
    ],

    /*
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'templateTitle' => '第一步 | 环境要求',
        'title' => '环境要求',
        'next' => '检查权限',
    ],

    /*
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'templateTitle' => '第二步 | 权限',
        'title' => '权限',
        'next' => '配置环境',
    ],

    /*
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'menu' => [
            'templateTitle' => '第三步 | 环境设置',
            'title' => '环境设置',
            'desc' => '请选择您的应用程序的<code> .env </code>文件的配置方式.',
            'wizard-button' => '表单向导设置',
            'classic-button' => '经典文本编辑器',
        ],
        'wizard' => [
            'templateTitle' => '第三步 | 环境设置 | 向导引导',
            'title' => '向导引导 <code>.env</code>文件',
            'tabs' => [
                'environment' => '环境',
                'database' => '数据库',
                'application' => '应用程序',
            ],
            'form' => [
                'name_required' => '环境名称是必需的.',
                'app_name_label' => '应用程序名称',
                'app_name_placeholder' => '应用程序名称',
                'app_environment_label' => '应用程序环境',
                'app_environment_label_local' => '本地',
                'app_environment_label_developement' => '开发',
                'app_environment_label_qa' => 'Qa',
                'app_environment_label_production' => '生产',
                'app_environment_label_other' => '其他',
                'app_environment_placeholder_other' => '输入您的环境...',
                'app_debug_label' => '应用程序调试',
                'app_debug_label_true' => '真',
                'app_debug_label_false' => '假',
                'log_level_label' => '应用程序日志级别',
                'log_level_label_debug' => '调试',
                'log_level_label_info' => '信息',
                'log_level_label_notice' => '注意',
                'log_level_label_warning' => '警告',
                'log_level_label_error' => '错误',
                'log_level_label_critical' => '严重',
                'log_level_label_alert' => '警报',
                'log_level_label_emergency' => '紧急',
                'app_url_label' => '应用程序URL',
                'app_url_placeholder' => '应用程序URL',
                'db_connection_failed' => '无法连接到数据库.',
                'db_connection_label' => '数据库连接',
                'db_connection_label_mysql' => 'mysql',
                'db_connection_label_sqlite' => 'sqlite',
                'db_connection_label_pgsql' => 'pgsql',
                'db_connection_label_sqlsrv' => 'sqlsrv',
                'db_host_label' => '数据库主机',
                'db_host_placeholder' => '数据库主机',
                'db_port_label' => '数据库端口',
                'db_port_placeholder' => '数据库端口',
                'db_name_label' => '数据库名称',
                'db_name_placeholder' => '数据库名称',
                'db_username_label' => '数据库用户名',
                'db_username_placeholder' => '数据库用户名',
                'db_password_label' => '数据库密码',
                'db_password_placeholder' => '数据库密码',

                'app_tabs' => [
                    'more_info' => '更多信息',
                    'broadcasting_title' => '广播，缓存，会话和队列',
                    'broadcasting_label' => '广播驱动程序',
                    'broadcasting_placeholder' => '广播驱动程序',
                    'cache_label' => '缓存驱动程序',
                    'cache_placeholder' => '缓存驱动程序',
                    'session_label' => '会话驱动程序',
                    'session_placeholder' => '会话驱动程序',
                    'queue_label' => '队列驱动程序',
                    'queue_placeholder' => '队列驱动程序',
                    'redis_label' => 'Redis 驱动程序',
                    'redis_host' => 'Redis 主机',
                    'redis_password' => 'Redis 密码',
                    'redis_port' => 'Redis 端口',

                    'mail_label' => '邮件',
                    'mail_driver_label' => '邮件驱动程序',
                    'mail_driver_placeholder' => '邮件驱动程序',
                    'mail_host_label' => '邮件主机',
                    'mail_host_placeholder' => '邮件主机',
                    'mail_port_label' => '邮件端口',
                    'mail_port_placeholder' => '邮件端口',
                    'mail_username_label' => '邮件用户名',
                    'mail_username_placeholder' => '邮件用户名',
                    'mail_password_label' => '邮件密码',
                    'mail_password_placeholder' => '邮件密码',
                    'mail_encryption_label' => '邮件加密',
                    'mail_encryption_placeholder' => '邮件加密',

                    'pusher_label' => '推送',
                    'pusher_app_id_label' => 'Pusher 应用程序 Id',
                    'pusher_app_id_palceholder' => 'Pusher 应用程序 Id',
                    'pusher_app_key_label' => 'Pusher 应用程序 Key',
                    'pusher_app_key_palceholder' => 'Pusher 应用程序 Key',
                    'pusher_app_secret_label' => 'Pusher 应用程序 Secret',
                    'pusher_app_secret_palceholder' => 'Pusher 应用程序 Secret',
                ],
                'buttons' => [
                    'setup_database' => '设置数据库',
                    'setup_application' => '设置应用程序',
                    'install' => '安装',
                ],
            ],
        ],
        'classic' => [
            'templateTitle' => '步骤 3 | 环境设置 | 经典编辑器',
            'title' => '经典环境编辑器',
            'save' => '保存 .env',
            'back' => '使用向导表单',
            'install' => '安装',
        ],
        'success' => '您的 .env 文件设置已保存。',
        'errors' => '无法保存 .env 文件，请手动创建它。',
    ],

    'install' => '安装',

    /*
     *
     * Installed Log translations.
     *
     */
    'installed' => [
        'success_log_message' => 'Laravel 安装程序成功安装于 ',
    ],

    /*
     *
     * Final page translations.
     *
     */
    'final' => [
        'title' => '安装完成',
        'templateTitle' => '安装完成',
        'finished' => '应用程序已成功安装。',
        'migration' => '迁移控制台输出:',
        'console' => '应用程序控制台输出:',
        'log' => '安装日志记录:',
        'env' => '最终 .env 文件:',
        'exit' => '点击这里退出',
    ],

    /*
     *
     * Update specific translations
     *
     */
    'updater' => [
        /*
         *
         * Shared translations.
         *
         */
        'title' => 'Laravel 更新程序',

        /*
         *
         * Welcome page translations for update feature.
         *
         */
        'welcome' => [
            'title' => '欢迎来到更新向导',
            'message' => '欢迎来到更新向导。',
        ],

        /*
         *
         * Welcome page translations for update feature.
         *
         */
        'overview' => [
            'title' => '概述',
            'message' => '有 1 个更新.|有 :number 个更新.',
            'install_updates' => '安装更新',
        ],

        /*
         *
         * Final page translations.
         *
         */
        'final' => [
            'title' => '完成',
            'finished' => '应用程序的数据库已成功更新。',
            'exit' => '点击这里退出',
        ],

        'log' => [
            'success_message' => 'Laravel 安装程序成功更新于 ',
        ],
    ],
];
